@extends('layouts.app')
@section('content')


<section class="about_banner py_8" style="background-image: url(public/assets/images/about_banner_page.jpg);">
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
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <div class="about_img">
                    <img src="{{ asset('public/assets/images/about_bott.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <h2>PrinterITHelp: Your Go-To Solution for All Printer Setups</h2>
                <p>Welcome to PrinterITHelp! We specialize in printer setup and support across the USA, ensuring seamless installation for all operating systems. Our expert team assists with printers, including HP, Epson, Canon, Brother, and more. Whether you need help setting up your HP DeskJet 2700, installing a Canon printer, or troubleshooting a Brother printer, we guide you.
               At PrinterITHelp, we provide essential resources like HP and Epson printer support numbers, Brother customer support contacts, and detailed installation guides. From installing printers on Mac to downloading printer drivers, we simplify the process to get your printer up and running quickly.
                </p>
                <p>Count on PrinterITHelp for reliable, comprehensive support tailored to your printer setup needs!
                </p>
                <div class="about_us_btn">
                    <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                        <button class="common_btn text-white py-2 px-4"><a href="#">Get Support </a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our_vision_mision py_8">
    <div class="container">
        <div class="heading_our_vision">
            <h2>Our Mission, Vision, and Values</h2>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="under_our_mission">
                    <div class="main_flex">
                        <div class="img-vision">
                            <img src="{{ asset('public/assets/images/png/vision-icon.png') }}" alt="vision-icon">
                        </div>
                        <div class="content">
                            <h3>Mission</h3>
                            <p>Simplify printer setup and installation with experienced guidance and support for our customers with leading brands such as HP, Epson, Canon, Brother, and more while providing prompt and efficient solutions to meeting our customers' unique needs so that their printer is always ready to take on its best performance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="under_our_mission">
                    <div class="main_flex">
                        <div class="img-vision">
                            <img src="{{ asset('public/assets/images/png/mission-icon.png') }}" alt="mission-icon">
                        </div>
                        <div class="content">
                            <h3>Vision</h3>
                            <p>Our vision is to be the most reliable and accessible provider of printer setup and support services across the USA. We aim to ensure businesses and individuals experience seamless, hassle-free printing, empowering them to focus on what truly matters while we handle their printing needs with expertise and care.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="under_our_mission">
                    <div class="main_flex">
                        <div class="img-vision">
                            <img src="{{ asset('public/assets/images/png/values-icon.png') }}" alt="value-icon">
                        </div>
                        <div class="content">
                            <h3>Our Core Values</h3>
                            <p><strong>Customer Focus:</strong> We are customer-centric, giving customers tailored support that matches their unique needs.</p>
                            <p><strong>Reliability:</strong> Consistency is the keyword; we ensure that your printers are set up correctly and perform optimally.</p>
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
                    <p>PrinterITHelp saved my day! Their team quickly resolved my printer issues and walked me through the setup process. Now my printer works flawlessly. Highly recommended!</p>
                    <h4>John D., California
                    </h4>
                    
                </div>
            </div>
            <div class="item">
                <div class="main_content_testimonial">
                <p>I was struggling to install my new Epson printer, but the experts at PrinterITHelp guided me step by step. Their support was prompt and professional. Fantastic service!</p>
                    <h4>Emily R., New York</h4>
                </div>
            </div>
            <div class="item">
                <div class="main_content_testimonial">
                <p>The PrinterITHelp team set up my office network printer with ease. Their attention to detail and customer focus are unmatched. I’ll definitely use their services again!</p>
                    <h4>Michael L., Texas </h4>
                </div>
            </div>
            <div class="item">
                <div class="main_content_testimonial">
                    <p>
                    Their ongoing maintenance service has consistently kept my printer running smoothly. PrinterITHelp is undoubtedly the best choice for reliable and hassle-free printer support.</p>
                    <h4>Sarah T., Florida</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main_section py_8" style="background-image: url(public/assets/images/professional_main.jpg);">
    <div class="container">
        <div class="main_content_under">
            <h2>Get Professional Solutions for All Your Printer Troubles – PrinterITHelp</h2>
            <p>Struggling with printer issues? PrinterITHelp offers expert solutions for all your printer troubles. From repairs to maintenance, we ensure quick, reliable service for all brands and models. Get hassle-free printing today!</p>
        </div>
    </div>
</section>

<section class="how_we_work py_8">
    <div class="container">
      <div class="how_heading_work">
        <h2> Why Choose PrinterITHelp</h2>
      </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-12 text-center mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="main_under_howwork">
                    <img src="https://printerithelp.com/public/assets/images/png/download-icon.png" alt="printer" class="w-100 workprinter_img">
                    <h3 class="text-black fw-medium fs_24 mt-3 text-center">Setup & Installation Procedure</h3>
                    <p class="text-black text-center ">At PrinterITHelp, we offer professional installation procedures for all major brands of printers. We ensure your gadget is configured correctly and working immediately.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-12 text-center mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="main_under_howwork">
                    <img src="https://printerithelp.com/public/assets/images/png/download-icon.png" alt="printer" class="w-100 workprinter_img">
                    <h3 class="text-black fw-medium fs_24 mt-3 text-center">Troubleshooting & Repair</h3>
                    <p class="text-black text-center ">Having printer issues? Let the team at PrinterITHelp quickly diagnose & repair any issues so you can go back to what really matters.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-12 text-center mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="main_under_howwork">
                <img src="https://printerithelp.com/public/assets/images/png/favicon.png" alt="printer" class="w-100 workprinter_img">
                <h3 class="text-black fw-medium mt-3 text-center">Ongoing Support and Maintenance</h3>
                <p class="text-black text-center ">With PrinterITHelp, you’ll receive continuous support to keep your printer in optimal condition, minimize downtime, and prevent potential issues before they occur.
                </p>
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
            responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
        });
        
    });
</script>
@endsection