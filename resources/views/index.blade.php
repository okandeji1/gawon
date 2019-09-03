@extends('layouts.site')
@section('content')
<div class="hero-wrap" style="background-image: url('images/cb.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Doing Nothing is
                    Not An Option of Our Life</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-counter ftco-intro" id="section-counter">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-2 align-items-stretch">
                    <div class="text">
                        <h3 class="mb-4">Our Aims and Objectives</h3>
                        <p>To identify any socio-economic, environmental, health, educational and or security challenges
                            facing the community and to launch necessary strategies for their immediate eradication.</p>
                         <p><a href="#" class="btn btn-white px-3 py-2 mt-2" data-toggle="modal" data-target="#exampleModalLong">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-3 align-items-stretch">
                    <div class="text">
                        <h3 class="mb-4">Our Achievement</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts.</p>
                         <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 d-flex services p-3 py-4 d-block">
                    <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Make Donation</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 d-flex services p-3 py-4 d-block">
                    <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Become A Volunteer</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 d-flex services p-3 py-4 d-block">
                    <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Sponsorship</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Causes</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-cause owl-carousel">
                    @foreach ($posts as $post)
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img" style="background-image: url(posts/{{$post->image}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">{{$post->header}}</a></h3>

                                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                <div class="progress custom-progress-success">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                        aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fund-raised d-block">{{$post->user->name}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Team</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                        <div class="info ml-4">
                            <h3><a href="#">Fatai</a></h3>
                            <div class="text">
                                <p>President</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                        <div class="info ml-4">
                            <h3><a href="#">Soliu</a></h3>
                            <div class="text">
                                <p>Secretary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(images/person_3.jpg);"></div>
                        <div class="info ml-4">
                            <h3><a href="#">Okandeji</a></h3>
                            <div class="text">
                                <p>PRO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-gallery">
    <div class="d-md-flex">
        <a href="images/c6.png"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/c6.png);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/b8.png"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/b8.png);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/b4.png"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/b4.png);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/c4.png"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/c4.png);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
    </div>
    <div class="d-md-flex">
        <a href="images/b6.png"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/b6.png);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/d2.png"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/d2.png);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/b7.png"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/b7.png);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="images/c9.png"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url(images/c9.png);">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Recent from blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts.</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($posts->chunk(3) as $row)
            @foreach ($row as $post)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="/posts/{{$post->id}}" class="block-20" style="background-image: url('posts/{{$post->image}}');">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">{{$post->created_at}}</a></div>
                            <div><a href="#">{{$post->user->role}}</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-3"><a href="/posts/{{$post->id}}">{{$post->header}}</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            @endforeach
            @break
            @endforeach
        </div>
    </div>
</section>
<section class="ftco-section-3 img" style="background-image: url(images/ca.png);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch" style="background-image: url(images/cl.png);"></div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Contact Us</h3>
                <form action="#" class="volunter-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Our Aims and Objectives</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul>
                  <li>To identify any socio-economic, environmental, health, educational and or security challenges facing the Community and to launch necessary strategies for their immediate eradication.</li>
                  <li>To scout for, identify, design, facilitate, implement, supervise, monitor and review any projects and programs for the development of the community.</li>
                  <li>To counsel, guide, encourage, motivate, support and assist every member of the Community, particularly youths, in choosing, building and shaping their future careers.</li>
                  <li>To manage any differences among individuals or groups for the betterment of the Community.</li>
                  <li>To create and develop spirit of common interest, sacrifice, sense of unity, cooperation, integration and collective participation among members of the Community.</li>
                  <li>To develop better understanding among the people of the Community about Community issues and needs through public enlightenment programs.</li>
                  <li>To mobilize resources in order to create a suitable ground for the completion of the Community's basic needs  and eradication of problems facing the Community. Good thing</li>
              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
