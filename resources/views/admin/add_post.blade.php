@extends('layouts.admin')
@section('content')
<section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Contact Form</h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Add Post</h4>
            @include('partials.messages')
            <div id="message"></div>
            <form class="contact-form" role="form" action="/admin/add-post" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="header" class="form-control :class="{ 'is-invalid': form.errors.has('header') }" placeholder="Enter post headline">
                    <has-error :form="form" field="header"></has-error>
                </div>
                <div class="form-group">
                    <textarea class="form-control :class="{ 'is-invalid': form.errors.has('content') }" name="content" placeholder="Please enter post contents"
                        rows="5"></textarea>
                        <has-error :form="form" field="content"></has-error>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-control :class="{ 'is-invalid': form.errors.has('image') }">
                    <has-error :form="form" field="image"></has-error>
                </div>
                <div class="form-send">
                    <button type="submit" class="btn btn-large btn-primary">Add Post</button>
                </div>

            </form>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Contact Details</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry"s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the
                printing and typesetting industry.</p>
            <ul class="contact_details">
                <li><i class="fa fa-envelope-o"></i> info@yoursite.com</li>
                <li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
                <li><i class="fa fa-home"></i> Some Fine Address, 887, Madrid, Spain.</li>
            </ul>
            <!-- contact_details -->
        </div>
    </div>
    <!-- /row -->


    <!-- /row -->
</section>
@endsection
