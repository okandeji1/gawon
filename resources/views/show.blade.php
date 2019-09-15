@extends('layouts.site')
@section ('content')
<div class="hero-wrap" style="background-image: url('posts/{{$post->image}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
    <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="#">Blog</a></span> <span>Blog Details</span></p>
    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog Details</h1>
    </div>
    </div>
    </div>
    </div>
    <section class="ftco-section ftco-degree-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-8 ftco-animate">
    <h2 class="mb-3">{{$post->header}}</h2>
    <p>{{$post->content}}</p>
    <p>
    <img src="posts/{{$post->image}}" alt="" class="img-fluid">
    </p>
    <div class="pt-5 mt-5">
    <h3 class="mb-5">6 Comments</h3>
    @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
    <ul class="comment-list">
        @foreach($post->comments as $comment)
    <li class="comment">
    <div class="vcard bio">
    <img src="" alt="Image placeholder">
    </div>
    <div class="comment-body">
    <h3>{{$comment->name}}</h3>
    <p>{{$comment->message}}</p>
    <p><a href="#" class="reply">Reply</a></p>
    </div>
    </li>
        @endforeach
    </ul>

    <div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a comment</h3>
    <form action="{{ route('comment.add') }}" method="POST" class="p-5 bg-light">
        @csrf
    <div class="form-group">
    <label for="name">Name *</label>
    <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
    <label for="email">Email *</label>
    <input type="email" name="email" class="form-control" id="email" required>
    </div>
    <div class="form-group">
    <label for="message">Message</label>
    <textarea name="" id="message" name="message" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="form-group">
    <input type="submit" class="btn py-3 px-4 btn-primary">
    </div>
    </form>
    </div>
    </div>
    </div>
    <div class="col-md-4 sidebar ftco-animate">
    <div class="sidebar-box ftco-animate">
    <h3>Recent Blog</h3>
    @foreach ($posts->chunk(3) as $row)
    @foreach($row as $post)
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(posts/{{$post->image}});"></a>
    <div class="text">
    <h3 class="heading"><a href="/posts/{{$post->id}}">{{$post->header}}</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> {{$post->created_at->format('F j, Y')}}</a></div>
    <div><a href="#"><span class="icon-person"></span> {{$post->user->role}}</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    @endforeach
    @break
    @endforeach
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
    <div class="text">
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    <div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
    <div class="text">
    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
    <div class="meta">
    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection
