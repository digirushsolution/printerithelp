@extends('layouts.app')
@section('content')


<section class="about_banner py_8" style="background-image: url(public/assets/images/banner_bg_about.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="banner_heading">
                    <h1>About Us</h1>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form_banner">
                    <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="http://localhost/printer_it_help/submit-contact-form">
                        <input type="hidden" name="_token" value="syZ6WRdq39wF8lNCr2CjpuZegfSQbQ5R7dKelfdk" autocomplete="off" tabindex="0">                    <input type="hidden" name="form_type" value="home_form" tabindex="0">
                        <div class="corner-animation z-1"></div>
                        <div class="position-relative z-1">
                            <h2 class="fw-semibold text_blue text-center fs_32 mb-4 position-relative z-2">Fill Out This Form for Assistance</h2>
                            
                            <div class="d-md-flex gap-3">
                                <div class="w-100">
                                    <input class="w-100 mb-1" type="text" placeholder="Enter your name" name="firstName" value="" pattern="[A-Za-z\s]+" title="Please enter only letters" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" tabindex="0">
                                                                </div>
                                <div class="w-100 mt-2 mt-lg-0">
                                    <input class="w-100" type="text" placeholder="Enter Last Name" name="lastName" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" tabindex="0">
                                                                </div>
                            </div>
                    
                            <div class="d-md-flex gap-3 mt-3">
                                <div class="w-100">
                                    <input class="w-100" type="email" placeholder="Enter Your Email" name="email" value="" tabindex="0">
                                                                </div>
                                <div class="w-100 mt-2 mt-lg-0">
                                    <input class="w-100" type="text" placeholder="Enter Your Address" name="address" value="" tabindex="0">
                                                                </div>
                            </div>
                    
                            <div class="d-md-flex gap-3 mt-lg-3">
                                <div class="w-100 mt-2 mt-lg-0">
                                    <input class="w-100" type="text" placeholder="Enter Your Number" name="contact" minlength="10" maxlength="10" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '')" tabindex="0">
                                                                </div>
                                <div class="w-100 mt-2 mt-lg-0">
                                    <input class="w-100" type="text" placeholder="Enter Your City" name="city" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" tabindex="0">
                                                                </div>
                            </div>
                    
                            <div class="d-flex justify-content-center mt-2">
                                <button type="submit" class="common_btn text-white py-2 px-4 fw-medium fs_16 mt-md-3 mt-2" tabindex="0">Enquiry Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <div class="about_img">
                    <img src="http://localhost/printer_ithelp_website/public/assets/images/about.jpg" alt="aboutimg">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <span>About Us</span>
                <h2>About All Printer Setup</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quasi eius architecto. Corrupti ab a quam omnis porro ea voluptatibus autem eius, iusto consequuntur temporibus, aut enim facere, nisi quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quasi eius architecto. Corrupti ab a quam omnis porro ea voluptatibus autem eius, iusto consequuntur temporibus, aut enim facere, nisi quod.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quasi eius architecto. Corrupti ab a quam omnis porro ea voluptatibus autem eius, iusto consequuntur temporibus, aut enim facere, nisi quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quasi eius architecto. Corrupti ab a quam omnis porro ea voluptatibus autem eius, iusto consequuntur temporibus, aut enim facere, nisi quod.
                </p>
                <div class="about_us_btn">
                    <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                        <button class="common_btn text-white py-2 px-4">Contact us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our_vision_mision py_8">
    <div class="container">
        <div class="heading_our_vision">
            <h2>Our Mission, Vision and Values</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi veniam quae accusamus impedit fuga. Quam, non optio reiciendis esse aliquid eaque in ipsam magnam omnis, inventore, hic quis architecto dolorum?</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="under_our_mission">
                    <div class="main_flex">
                        <div class="img-vision">
                            <img src="{{ asset('public/assets/images/png/vision-icon.png') }}" alt="vision-icon">
                        </div>
                        <div class="content">
                            <h3>Mission</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ad? Lorem, ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deserunt sunt itaque Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, reiciendis. Lorem ipsum at molestias vitae sed eaque commodi dignissimos eum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="under_our_mission">
                    <div class="main_flex">
                        <div class="img-vision">
                            <img src="{{ asset('public/assets/images/png/mission-icon.png') }}" alt="mission-icon">
                        </div>
                        <div class="content">
                            <h3>Mission</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ad? Lorem, ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deserunt sunt itaque Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, reiciendis. Lorem ipsum at molestias vitae sed eaque commodi dignissimos eum.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="under_our_mission">
                    <div class="main_flex">
                        <div class="img-vision">
                            <img src="{{ asset('public/assets/images/png/values-icon.png') }}" alt="value-icon">
                        </div>
                        <div class="content">
                            <h3>Mission</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ad? Lorem, ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deserunt sunt itaque Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, reiciendis. Lorem ipsum at molestias vitae sed eaque commodi dignissimos eum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial_review py_8">
    <div class="container">
        <div class="heading_testimonial">
            <h2>Testimonial</h2>
        </div>
        <div class="testimonial_slider">
            <div class="item">
                <div class="main_content_testimonial">
                    <h4>Lorem, ipsum dolor sit amet</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis quidem veritatis quasi adipisci tenetur nobis libero, reprehenderit fugit aperiam repellendus ullam iusto consectetur nesciunt ad alias sint commodi at est.</p>
                </div>
            </div>
            <div class="item">
                <div class="main_content_testimonial">
                    <h4>Lorem, ipsum dolor sit amet</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis quidem veritatis quasi adipisci tenetur nobis libero, reprehenderit fugit aperiam repellendus ullam iusto consectetur nesciunt ad alias sint commodi at est.</p>
                </div>
            </div>
            <div class="item">
                <div class="main_content_testimonial">
                    <h4>Lorem, ipsum dolor sit amet</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis quidem veritatis quasi adipisci tenetur nobis libero, reprehenderit fugit aperiam repellendus ullam iusto consectetur nesciunt ad alias sint commodi at est.</p>
                </div>
            </div>
            <div class="item">
                <div class="main_content_testimonial">
                    <h4>Lorem, ipsum dolor sit amet</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis quidem veritatis quasi adipisci tenetur nobis libero, reprehenderit fugit aperiam repellendus ullam iusto consectetur nesciunt ad alias sint commodi at est.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main_section py_8" style="background-image: url(public/assets/images/about_bannner_main.png);">
    <div class="container">
        <div class="main_content_under">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus vitae, doloribus ducimus sit recusandae ab aperiam id nulla voluptatem expedita harum? Iusto vitae tenetur quo harum eligendi sunt magni nam?</p>
        </div>
    </div>
</section>

<section class="how_we_work py_8">
    <div class="container">
        <img src="https://printerithelp.com/public/assets/images/png/arrow-right.png" alt="arrow" class="position-absolute work_arrow1 d-lg-block d-none">
        <img src="https://printerithelp.com/public/assets/images/png/arrow-right.png" alt="arrow" class="position-absolute work_arrow2 d-lg-block d-none">        
        <h4 class="text-center text_blue fw-medium fs_18 aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"> Work Process</h4>
        <h2 class="fw-semibold fs_32 text-center text-black aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"> How We Work</h2>
        <div class="row mt-5">
            <div class="col-lg-4 col-12 text-center aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="main_under_howwork">
                    <img src="https://printerithelp.com/public/assets/images/png/favicon.png" alt="printer" class="w-100 workprinter_img">
                <h3 class="text-black fw-medium fs_24 mt-3 text-center">Lorem ipsum dolor</h3>
                <p class="text-black text-center ">Lorem, ipsum dolor sit amet
                    consectetur
                    <span class="d-xl-block">adipisicing elit.
                        Esse,</span>
                </p>
                </div>
            </div>
            <div class="col-lg-4 col-12 text-center mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="main_under_howwork">
                    <img src="https://printerithelp.com/public/assets/images/png/download-icon.png" alt="printer" class="w-100 workprinter_img">
                    <h3 class="text-black fw-medium fs_24 mt-3 text-center">Lorem ipsum dolor</h3>
                    <p class="text-black text-center ">Lorem, ipsum dolor sit amet
                        consectetur
                        <span class="d-xl-block">adipisicing elit.
                            Esse,</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-12 text-center mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="main_under_howwork">
                <img src="https://printerithelp.com/public/assets/images/png/favicon.png" alt="printer" class="w-100 workprinter_img">
                <h3 class="text-black fw-medium mt-3 text-center">Lorem ipsum dolor</h3>
                <p class="text-black text-center ">Lorem, ipsum dolor sit amet
                    consectetur
                    <span class="d-xl-block">adipisicing elit.
                        Esse,</span>
                </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="excellent_providing py_8 pt-0">
    <div class="container">
        <h2 class="text-center  mb-2 aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">We are excellent at providing the <span class="text_blue">best
                products.</span></h2>
        <div class="row mt-lg-5 mt-4">
            <div class="col-lg-6 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="d-flex gap-3 mb-3">
                    <img src="https://printerithelp.com/public/assets/images/png/tick-icon.png" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p> ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class ="d-xl-block">adipisicing elit.
                                Esse, </span>
                        </p>
                 
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <img src="https://printerithelp.com/public/assets/images/png/tick-icon.png" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p> ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <img src="https://printerithelp.com/public/assets/images/png/tick-icon.png" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p> ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <div class="d-flex gap-3 mb-3">
                    <img src="https://printerithelp.com/public/assets/images/png/tick-icon.png" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p> ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <img src="https://printerithelp.com/public/assets/images/png/tick-icon.png" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p> ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <img src="https://printerithelp.com/public/assets/images/png/tick-icon.png" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p> ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.testimonial_slider').slick({
            speed: 1000,
            autoplay: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            arrows: false,
            dots: true,
        });
    });
</script>
@endsection