@extends('layouts.site')
@section('content')
<div class="hero-wrap" style="background-image: url('images/cf.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="/">Home</a></span> <span>About</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-about align-self-stretch"
                    style="background-image: url(images/cl.png); width: 100%;"></div>
            </div>
            <div class="col-md-6 pl-md-5 ftco-animate">
                <h2 class="mb-4">Gawon Bariki Progressive</h2><span><small style="margin-top: 0">Association Dakaiyawa</small></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus, dui sed mollis finibus,
                    lacus sapien bibendum est, ac tempus arcu nulla ut odio. Pellentesque et ultrices lorem. Etiam
                    gravida efficitur magna id bibendum. Morbi tincidunt, est a auctor volutpat, turpis tellus vehicula
                    urna, nec pulvinar nunc neque pellentesque urna. Integer facilisis magna id dolor cursus, iaculis
                    lacinia lorem elementum. Aliquam sed metus a orci finibus ullamcorper. Proin sit amet tempor elit.
                </p>
                <p>Nulla congue ante nulla. Vestibulum ullamcorper eros ac arcu hendrerit, non imperdiet tellus
                    elementum. Aenean vel augue blandit, aliquam eros nec, ullamcorper purus. Suspendisse sagittis
                    fringilla lectus vitae efficitur. Fusce cursus vestibulum aliquam. Phasellus tincidunt neque sit
                    amet varius volutpat. Donec sagittis, elit ac imperdiet dignissim, libero enim euismod lectus, vitae
                    molestie tellus diam a urna. Cras nibh ante, elementum eget fringilla ac, mattis nec metus. Morbi ac
                    elit at purus feugiat mollis. Nulla pretium enim nec purus tincidunt, in lobortis dolor tincidunt.
                    Curabitur volutpat quam ut tempor imperdiet. Vivamus ac consectetur risus. In vulputate sagittis
                    dignissim. Phasellus venenatis lectus et aliquam porttitor. Ut ligula magna, porta ut tincidunt ac,
                    tempus ac purus. Duis sed diam ante.</p>
                <p>Ut pellentesque non risus ac luctus. Morbi lobortis tincidunt urna, at placerat erat ullamcorper
                    mattis. Curabitur sed sapien condimentum turpis tincidunt faucibus sed ac eros. Curabitur ac diam
                    non tellus accumsan scelerisque eget a metus. Class aptent taciti sociosqu ad litora torquent per
                    conubia nostra, per inceptos himenaeos. Fusce venenatis bibendum viverra. Ut vulputate maximus
                    mattis. Quisque pharetra massa in nisi interdum, quis dapibus lacus tempor. Aliquam fringilla
                    consequat sapien, eget lacinia arcu consequat quis.</p>
                <p>Integer id orci purus. Aliquam sodales aliquet elit ut fringilla. Phasellus tellus arcu, accumsan ac
                    laoreet sit amet, ornare non quam. Duis egestas id orci in scelerisque. Ut blandit tortor a ante
                    iaculis bibendum. Quisque accumsan, lacus laoreet sagittis vehicula, ipsum sem eleifend est, id
                    cursus tellus orci eu orci. Morbi interdum suscipit eleifend. Donec nec libero id felis pharetra
                    aliquet sit amet eget dolor. Suspendisse ullamcorper, ligula ac finibus placerat, felis nisi
                    molestie nisi, at efficitur sem dui in massa. Donec fermentum ex eu urna consectetur, vitae laoreet
                    risus egestas.</p>
                <p>Sed interdum lorem sed dapibus faucibus. Morbi vel bibendum lacus. Donec congue sagittis diam a
                    varius. Quisque in imperdiet augue. Phasellus ac nisl nec est laoreet porta. Fusce hendrerit porta
                    urna, sed facilisis sapien sodales ut. Morbi vel placerat est. Mauris ac lacus tortor. Curabitur
                    quis laoreet libero.</p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-2 align-items-stretch">
                    <div class="text">
                        <h3 class="mb-4">Our Aims and Objectives</h3>
                        <p>To identify any socio-economic, environmental, health, educational and or security challenges
                                facing the community and to launch necessary strategies for their immediate eradication.</p>
                                <p><a href="#" class="btn btn-white px-3 py-2 mt-2" data-toggle="modal" data-target="#about">Read More</a></p>
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
@endsection

<!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
