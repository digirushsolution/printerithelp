@extends('layouts.app')
@section('content')
<section class="about_banner py_8" style="background-image: url(public/assets/images/banner_bg_about.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="banner_heading">
                    <h1>HP Printer</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, non unde. Dicta voluptate culpa voluptatem voluptas tempore rem dolorum, consequuntur, a consectetur maiores est quis commodi possimus odit quas eveniet!</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form_banner">
                    <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="http://localhost/printer_it_help/submit-contact-form">
                        <input type="hidden" name="_token" value="syZ6WRdq39wF8lNCr2CjpuZegfSQbQ5R7dKelfdk" autocomplete="off" tabindex="0">                    <input type="hidden" name="form_type" value="home_form" tabindex="0">
                        <div class="corner-animation z-1"></div>
                        <div class="position-relative z-1">
                            <h2 class=" text_blue text-center mb-4 position-relative z-2">Fill Out This Form for Assistance</h2>
                            
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
                                <button type="submit" class="common_btn text-white py-2 px-4 mt-md-3 mt-2" tabindex="0">Enquiry Now</button>
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
                            <button class="common_btn text-white"><a href="#">Contact us</a></button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section color_second py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <span>About Us</span>
                <h2>About All Printer Setup</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quasi eius architecto. Corrupti ab a quam omnis porro ea voluptatibus autem eius, iusto consequuntur temporibus, aut enim facere, nisi quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quasi eius architecto. Corrupti ab a quam omnis porro ea voluptatibus autem eius, iusto consequuntur temporibus, aut enim facere, nisi quod.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quasi eius architecto. Corrupti ab a quam omnis porro ea voluptatibus autem eius, iusto consequuntur temporibus, aut enim facere, nisi quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quasi eius architecto. Corrupti ab a quam omnis porro ea voluptatibus autem eius, iusto consequuntur temporibus, aut enim facere, nisi quod.
                </p>
               
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <div class="about_img">
                    <img src="http://localhost/printer_ithelp_website/public/assets/images/about.jpg" alt="aboutimg">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_services_main py_8">
    <div class="container">
        <h2 class="text-center text-black mb-2 aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600"><span class="text_blue">Our</span> Services</h2>
        <p class="fs_16 text-center text-black mb-4 aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">Lorem ipsum, dolor sit dolor sit amet Lorem ipsum
            dolor
            sit amet-<span class="d-xl-block"> error omnis minima quisquam quae nobis dicta. consectetur Lorem ipsum
                dolor sit.
                adipisicing .
                amet consectetur
            </span>
        </p>
        <div class="row pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="service_clr_card">
                    <div class="d-flex justify-content-center">
                        <img src="https://printerithelp.com/public/assets/images/png/service-icon.png" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-sm-0 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">

                <div class="service_clr_card2">
                    <div class="d-flex justify-content-center">
                        <img src="https://printerithelp.com/public/assets/images/png/service-icon.png" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">

                <div class="service_clr_card">
                    <div class="d-flex justify-content-center">
                        <img src="https://printerithelp.com/public/assets/images/png/service-icon.png" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">

                <div class="service_clr_card2">
                    <div class="d-flex justify-content-center">
                        <img src="https://printerithelp.com/public/assets/images/png/service-icon.png" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="service_clr_card">
                    <div class="d-flex justify-content-center">
                        <img src="https://printerithelp.com/public/assets/images/png/service-icon.png" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="service_clr_card2">
                    <div class="d-flex justify-content-center">
                        <img src="https://printerithelp.com/public/assets/images/png/service-icon.png" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
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

<section class="accordian_services py_8">
    <div class="container">
        <div class="heading_frequently">
            <h2>Frequently Asked Questions</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ipsam provident quaerat expedita quo nesciunt unde minus libero enim, ex sit quod repudiandae, laborum magni error obcaecati ut consequuntur officia?</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="img_accodian">
                    <img src="http://localhost/printer_ithelp_website/public/assets/images/about.jpg" alt="aboutimg">
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordian_main">
                    <div id="faqAccordion" class="accordion accordion-flush">
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="true" aria-controls="flush-collapse1">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion" style="">
                                <div class="accordion-body text-black">This is the first item's accordion
                                    body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                    eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                    consectetur
                                    adipisicing elit. Dolor, accusantium?</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">This is the first item's accordion
                                    body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                    eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                    consectetur
                                    adipisicing elit. Dolor, accusantium?</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">TThis is the first item's accordion
                                    body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                    eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                    consectetur
                                    adipisicing elit. Dolor, accusantium?</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                    Accordion Item #4
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">TThis is the first item's accordion
                                    body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                    eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                    consectetur
                                    adipisicing elit. Dolor, accusantium?</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                    Accordion Item #5
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">TThis is the first item's accordion
                                    body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                    eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                    consectetur
                                    adipisicing elit. Dolor, accusantium?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
