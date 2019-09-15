<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'blog', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('index')->with('posts', $posts);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('blog')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'header' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);
        // Handle file upload

        if ($request->hasFile('image')) {
            // Get file name with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just file name
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // File nameto store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Upload image
            \Image::make($request->file('image'))->save(public_path('posts/') . $fileNameToStore);
        } else {
            return redirect()->back()->with('error', 'Image is required');
        }
        // Create Product
        $post = new Post;
        $post->header = $request->input('header');
        $post->content = $request->input('content');
        $post->image = $fileNameToStore;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->back()->with('success', 'New Post Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('show', compact(['post', $post, 'posts', $posts]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
