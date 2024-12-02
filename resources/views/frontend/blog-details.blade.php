@extends('layouts.app')
@section('content')
<section class="about_banner py_8" style="background-image: url(public/assets/images/banner_bg_about.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="blog_banner">
                    <h1>Blog Details</h1>
                </div>
            </div>
     
        </div>
    </div>
</section>


<section class="single_blog_page py_8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="under_single_blog">
                    <div class="img_single">
                       <img src="{{ asset('public/assets/images/about.avif') }}" alt="service" >
                    </div>
                    <div class="single_content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, numquam. Nisi optio veritatis cupiditate commodi. Ex quasi quis porro. Consequatur expedita iste ipsum ad eius placeat molestiae, sunt tenetur nostrum?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, numquam. Nisi optio veritatis cupiditate commodi. Ex quasi quis porro. Consequatur expedita iste ipsum ad eius placeat molestiae, sunt tenetur nostrum?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, numquam. Nisi optio veritatis cupiditate commodi. Ex quasi quis porro. Consequatur expedita iste ipsum ad eius placeat molestiae, sunt tenetur nostrum?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, numquam. Nisi optio veritatis cupiditate commodi. Ex quasi quis porro. Consequatur expedita iste ipsum ad eius placeat molestiae, sunt tenetur nostrum?</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, numquam. Nisi optio veritatis cupiditate commodi. Ex quasi quis porro. Consequatur expedita iste ipsum ad eius placeat molestiae, sunt tenetur nostrum?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, numquam. Nisi optio veritatis cupiditate commodi. Ex quasi quis porro. Consequatur expedita iste ipsum ad eius placeat molestiae, sunt tenetur nostrum?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection