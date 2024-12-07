<?php $__env->startSection('content'); ?>

<section class="printer_help_itbannner">
    <div class="slick-slider-banner">
        <div class="element element-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="under_banner_content">
                            <span>Printer IT Help</span>
                            <h1>Expert Printer Setup and Support Services in the USA</h1>
                            <p>Printer IT Help offers reliable printer setup and support services for Epson, HP, Canon, and Brother printer setup and support services. We ensure smooth working performance for home and business users, from installation to troubleshooting.
                            </p>
                            <div class="flex_banner_images">
                                <img src="<?php echo e(asset('public/assets/images/printer_google_1.png')); ?>" alt="warranty" class="support_icon">
                                <img src="<?php echo e(asset('public/assets/images/printer_google_2.png')); ?>" alt="warranty" class="support_icon">
                                <img src="<?php echo e(asset('public/assets/images/printer_google_3.png')); ?>" alt="warranty" class="support_icon">
                                <img src="<?php echo e(asset('public/assets/images/printer_google_4.png')); ?>" alt="warranty" class="support_icon">
                            </div>
                            <div class="d-flex justify-content-lg-start justify-content-center gap-2">
                                <!-- <button class="common_btn text-white"><a href="#">Watch Video</a></button> -->
                                <button class="book_btn text-white"><a href="<?php echo e(route('contact')); ?>">Book Appointment</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="form_banner">
                            <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="#">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="form_type" value="home_form">
                                <div class="corner-animation z-1"></div>
                                <div class="position-relative z-1">
                                    <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your Printing Service Now</h2>
                                    
                                    <div class="d-md-flex gap-3">
                                        <div class="w-100">
                                            <input class="w-100 mb-1" type="text" placeholder="Enter your name" name="firstName" value="" pattern="[A-Za-z\s]+" title="Please enter only letters" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                        </div>
                                        <div class="w-100 mt-2 mt-lg-0">
                                            <input class="w-100" type="text" placeholder="Enter Last Name" name="lastName" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                        </div>
                                    </div>
                            
                                    <div class="d-md-flex gap-3 mt-3">
                                        <div class="w-100">
                                            <input class="w-100" type="email" placeholder="Enter Your Email" name="email" value="">
                                                                        </div>
                                        <div class="w-100 mt-2 mt-lg-0">
                                            <input class="w-100" type="text" placeholder="Enter Your Address" name="address" value="">
                                                                        </div>
                                    </div>
                            
                                    <div class="d-md-flex gap-3 mt-lg-3">
                                        <div class="w-100 mt-2 mt-lg-0">
                                            <input class="w-100" type="text" placeholder="Enter Your Number" name="contact" minlength="10" maxlength="10" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                                        </div>
                                        <div class="w-100 mt-2 mt-lg-0">
                                            <input class="w-100" type="text" placeholder="Enter Your City" name="city" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                        </div>
                                    </div>
                            
                                    <div class="d-flex justify-content-center mt-2">
                                        <button type="submit" class="common_btn text-white mt-md-3 mt-2">Enquiry Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="element element-2">    
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="under_banner_content">
                            <span>Printer IT Help</span>
                            <h2>Reliable Printer Installation and Support Services in the USA</h2>
                            <p>Printer IT Help provides professional printer installation and support services for Epson, HP, Canon, and Brother printers, ensuring seamless performance for home and business users.</p>
                            <div class="flex_banner_images">
                                <img src="<?php echo e(asset('public/assets/images/printer_google_1.png')); ?>" alt="warranty" class="support_icon">
                                <img src="<?php echo e(asset('public/assets/images/printer_google_2.png')); ?>" alt="warranty" class="support_icon">
                                <img src="<?php echo e(asset('public/assets/images/printer_google_3.png')); ?>" alt="warranty" class="support_icon">
                                <img src="<?php echo e(asset('public/assets/images/printer_google_4.png')); ?>" alt="warranty" class="support_icon">
                            </div>
                            <div class="d-flex justify-content-lg-start justify-content-center gap-2">
                                <!-- <button class="common_btn text-white">Watch Video</button> -->
                                <button class="book_btn text-white">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="form_banner">
                            <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="#">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="form_type" value="home_form">
                                <div class="corner-animation z-1"></div>
                                <div class="position-relative z-1">
                                    <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your Printing Service Now</h2>
                                    
                                    <div class="d-md-flex gap-3">
                                        <div class="w-100">
                                            <input class="w-100 mb-1" type="text" placeholder="Enter your name" name="firstName" value="" pattern="[A-Za-z\s]+" title="Please enter only letters" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                        </div>
                                        <div class="w-100 mt-2 mt-lg-0">
                                            <input class="w-100" type="text" placeholder="Enter Last Name" name="lastName" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                        </div>
                                    </div>
                            
                                    <div class="d-md-flex gap-3 mt-3">
                                        <div class="w-100">
                                            <input class="w-100" type="email" placeholder="Enter Your Email" name="email" value="">
                                                                        </div>
                                        <div class="w-100 mt-2 mt-lg-0">
                                            <input class="w-100" type="text" placeholder="Enter Your Address" name="address" value="">
                                                                        </div>
                                    </div>
                            
                                    <div class="d-md-flex gap-3 mt-lg-3">
                                        <div class="w-100 mt-2 mt-lg-0">
                                            <input class="w-100" type="text" placeholder="Enter Your Number" name="contact" minlength="10" maxlength="10" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                                        </div>
                                        <div class="w-100 mt-2 mt-lg-0">
                                            <input class="w-100" type="text" placeholder="Enter Your City" name="city" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                        </div>
                                    </div>
                            
                                    <div class="d-flex justify-content-center mt-2">
                                        <button type="submit" class="common_btn text-white mt-md-3 mt-2">Enquiry Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="marquee">
    <div class="container">
       <div class="pic-container">
          <div class="pic">
            <img src="<?php echo e(asset('public/assets/images/marque_logo_1.png')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_2.avif')); ?>" alt="">
          </div>
            <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_5.png')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_1.png')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_2.avif')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_5.png')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_1.png')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_2.avif')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_5.png')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_1.png')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_2.avif')); ?>" alt="">
          </div>
          <div class="pic">
          <img src="<?php echo e(asset('public/assets/images/marque_logo_5.png')); ?>" alt="">
          </div>
       </div>
    </div>
 </section>

<section class="about_section py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about_img">
                    <img src="<?php echo e(asset('public/assets/images/about.jpg')); ?>" alt="aboutimg">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Printer IT Help: Trusted Experts for Reliable Printer Support Services</h2>
                <p>At Printer IT Help, we are your go-to experts for seamless printer setup and support services across the USA. Whether you need to install an Epson printer, configure a Canon printer, or troubleshoot an HP printer, we ensure efficient solutions tailored to your specific needs. Our experienced team specializes in handling significant brands like Epson, HP, Canon, and Brother, providing reliable Epson printer support and assistance through our HP printer phone support. For quick help, contact our Brother printer support number for fast, professional service. With a commitment to quality and customer satisfaction, we simplify complex printer tasks, ensuring optimal performance for both home and business users. Let Printer IT Help make your printing experience hassle-free and efficient.
                </p>
                <div class="about_us_btn">
                        <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                            <button class="common_btn text-white"><a href="<?php echo e(route('contact')); ?>">Contact US
                            </a></button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_services_sec bg-light py_8">
    <div class="container">
        <div class="heading_our_services">
            <h2>Our Expert Printer Services: Installation, Support and Troubleshooting</h2>
            <p>Explore our expert services, including printer installation, troubleshooting, and maintenance for Epson, HP, Canon, and Brother printers. We offer reliable support for home and business users.
            </span></p>
        </div>

        <div class="row justify-content-center pt-lg-4">
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3 ">
                <div class="service_card">
                    <div class="services_img">
                        <img src="<?php echo e(asset('public/assets/images/hp_print_services1.jpg')); ?>" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>HP Printer Support</h3>
                    <p>Get expert assistance with all HP printer setup, troubleshooting & maintenance.</p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="service_card">
                    <div class="services_img">
                        <img src="<?php echo e(asset('public/assets/images/hp_print_services2.jpg')); ?>" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>Epson Printer Support</h3>
                    <p>Reliable support for Epson printers, from setup to complex issues.</p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="service_card">
                    <div class="services_img">
                        <img src="<?php echo e(asset('public/assets/images/hp_print_services3.jpg')); ?>" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>BROTHER Printer Support</h3>
                    <p>Fast and efficient solutions for Brother printer problems and setup.</p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="service_card">
                    <div class="services_img">
                        <img src="<?php echo e(asset('public/assets/images/hp_print_services4.jpg')); ?>" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>Canon Printer Support</h3>
                    <p>Professional Canon printer support for smooth installation & fixes.
                    </p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="service_card">
                    <div class="services_img">
                        <img src="<?php echo e(asset('public/assets/images/hp_print_services5.jpg')); ?>" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>Installation & Troubleshooting</h3>
                    <p>Complete printer installation and troubleshooting services for all brands.
                    </p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main_home_page contact_bg_img position-relative py_8">
    <div class="footer_bg_layer"></div>
    <div class="container bg-light box_shadow border_radius_6 position-relative p-sm-4 p-3">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 d-flex justify-content-center aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="overflow-hidden mx-auto">
                    <img src="<?php echo e(asset('public/assets/images/service-printer.jpg')); ?>" alt="service" class="about_img border_radius_6 w-100">
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <h2 class="text-center text-lg-start fw-semibold text-black mb-3">Industry-Specific Technical Support for All Your Printer Needs</h2>
               <p>We have dedicated printer support services tailored for various industries to make printing seamless. Whether in health, education, or business, our team will expertly assist you in setting up, configuring, and troubleshooting any printer from top brands such as HP, Epson, Canon, and Brother.
               We understand every industry's requirements and can provide reliable solutions for installing the printer and troubleshooting your printing tasks. After-sales Leave the technical support to us while you attend to what is essential to you.
            </p>              
            </div>
        </div>
    </div>
</section>

<section class="why_choose_us py_8">
    <div class="container">
            <div class="heading_why_choose">
                <h2>Why Printer IT Help is Your
                     Trusted Choice for Expert Printer Services Expert Technicians
                </h2>
                <p>Our certified technicians have extensive experience providing efficient and reliable printer installation, support, and repairs for all major brands, including HP, Epson, Canon, and Brother.
                </p>
            </div>
            <div class="row pt-lg-4">
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="<?php echo e(asset('public/assets/images/Services.png')); ?>" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Tailored Solutions for Your Needs</h5>
                                </div>
                                <div class="solu_description">
                                    <p>Every printer is unique, and so are your needs. Printer IT Help provides customized solutions that address specific issues and improve the performance of your printer, ensuring you get the most out of your device.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="<?php echo e(asset('public/assets/images/Fast Responsive Time.png')); ?>" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Fast Response Time</h5>
                                </div>
                                <div class="solu_description">
                                    <p>We know how time-sensitive any printer issue may be. Our team's fast responses and solutions ensure minimal downtime and seamless operations for our home and business users.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="<?php echo e(asset('public/assets/images/solution.png')); ?>" alt="printing" >
                             </div>
                                <div class="solu_title">
                                    <h5>Comprehensive Services</h5>
                                </div>
                                <div class="solu_description">
                                    <p>From printer installation to ongoing troubleshooting and maintenance, we offer a full range of services that meet your specific needs, whether at home or in a business environment.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="<?php echo e(asset('public/assets/images/affordable price.png')); ?>" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Affordable Pricing</h5>
                                </div>
                                <div class="solu_description">
                                    <p>We provide high-quality printer services at competitive prices, ensuring you receive the best value for your money without compromising service quality or customer satisfaction.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="<?php echo e(asset('public/assets/images/support.png')); ?>" alt="printing">  
                             </div>
                                <div class="solu_title">
                                    <h5>Industry-Specific Support</h5>
                                </div>
                                <div class="solu_description">
                                    <p>Whether you are in healthcare, education, or retail, we offer tailored printer support services designed to meet your industry's unique requirements for optimal performance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="<?php echo e(asset('public/assets/images/custmore Satisfication.png')); ?>" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Customer Satisfaction</h5>
                                </div>
                                <div class="solu_description">
                                    <p>Our primary focus is customer satisfaction. We go the extra mile to ensure every service is performed efficiently and provide solutions that keep your printers working at peak efficiency.
                                    </p>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
           </div>
    </div>
</section>

<section class="contact_bg_img py_8">
    <div class="contact_bg_layer pointer_events"></div>
        <div class="container position-relative">
            <div class="row justify-content-between align-items-center pt-3">
                <div class="col-lg-6 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                    <h2 class="fw-semibold text-white mb-1"> Get in Touch with Printer IT Help: We're Here to Assist You
                    </h2>
                    <div class="form_line mb-3 mt-1"></div>
                    <p class="text-white fw-normal mb-3">At Printer IT Help, we are committed to providing exceptional customer service and support for all your printer needs. Whether you need assistance with printer installation, troubleshooting, or ongoing maintenance, our team of experts is here to help. We understand the importance of having your printers up and running smoothly, so we offer fast, reliable, and personalized support.
                    </p>
           
                </div>
                <div class="col-lg-5 col-12 mt-md-4 mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                    <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="#">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="form_type" value="home_form">
                        <div class="corner-animation z-1"></div>
                        <div class="position-relative z-1">
                            <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Fill the Form </h2>
                            
                            <div class="d-md-flex gap-3">
                                <div class="w-100">
                                    <input class="w-100 mb-1" type="text" placeholder="Enter your name" name="firstName" value="" pattern="[A-Za-z\s]+" title="Please enter only letters" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                            </div>
                                <div class="w-100 mt-2 mt-lg-0">
                                    <input class="w-100" type="text" placeholder="Enter Last Name" name="lastName" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                            </div>
                            </div>
                    
                            <div class="d-md-flex gap-3 mt-3">
                                <div class="w-100">
                                    <input class="w-100" type="email" placeholder="Enter Your Email" name="email" value="">
                                                                            </div>
                                <div class="w-100 mt-2 mt-lg-0">
                                    <input class="w-100" type="text" placeholder="Enter Your Address" name="address" value="">
                                                                            </div>
                            </div>
                    
                            <div class="d-md-flex gap-3 mt-lg-3">
                                <div class="w-100 mt-2 mt-lg-0">
                                    <input class="w-100" type="text" placeholder="Enter Your Number" name="contact" minlength="10" maxlength="10" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                                                            </div>
                                <div class="w-100 mt-2 mt-lg-0">
                                    <input class="w-100" type="text" placeholder="Enter Your City" name="city" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                                                            </div>
                            </div>
                    
                            <div class="d-flex justify-content-center mt-2">
                                <button type="submit" class="common_btn text-white mt-md-3 mt-2">Enquiry Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

<section class="latest_blog_sec py_8">
    <div class="container">
        <div classs="latest_blog_heading">
            <h2 class="text-center" data-aos="fade-down"
                data-aos-easing="linear" data-aos-duration="600"> All Printer Setup - Latest <span
                    class="text_blue">Blogs</span> Update</h2>
        </div>
        <div class="row responsive pt-md-4 pt-1 justify-content-center">
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="<?php echo e(asset('public/assets/images/png/blogimg.jpg')); ?>" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="<?php echo e(asset('public/assets/images/png/watch.png')); ?>" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.
                        </p>
                        <button class="common_btn text-white">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="<?php echo e(asset('public/assets/images/png/blogimg.jpg')); ?>" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="<?php echo e(asset('public/assets/images/png/watch.png')); ?>" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fw-normal opacity-75">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.
                        </p>
                        <button class="common_btn text-white">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="<?php echo e(asset('public/assets/images/png/blogimg.jpg')); ?>" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="<?php echo e(asset('public/assets/images/png/watch.png')); ?>" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fw-normal opacity-75">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="<?php echo e(asset('public/assets/images/png/blogimg.jpg')); ?>" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="<?php echo e(asset('public/assets/images/png/watch.png')); ?>" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="<?php echo e(asset('public/assets/images/png/blogimg.jpg')); ?>" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="<?php echo e(asset('public/assets/images/png/watch.png')); ?>" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



   
<?php $__env->stopSection(); ?>
  

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function () {
        $('.slick-slider-banner').slick({
            fade: true,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 7000,
            arrows: false,
            dots: true,
        });
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/quicmwmz/printerithelp.com/resources/views/frontend/home.blade.php ENDPATH**/ ?>