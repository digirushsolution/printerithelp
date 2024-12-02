@extends('layouts.app')
@section('content')

<section class="printer_help_itbannner">
    <div class="slick-slider-banner">
        <div class="element element-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="under_banner_content">
                            <span>Printer IT Help</span>
                            <h1>Expert Printer Service and Repair for Seamless Printing Solutions</h1>
                            <p>We offer expert printer service and repair to keep your printers running smoothly. Our fast and reliable solutions ensure minimal downtime, allowing your business to maintain efficient and uninterrupted printing.</p>
                            <div class="flex_banner_images">
                                <img src="{{ asset('public/assets/images/printer_google_1.png') }}" alt="warranty" class="support_icon">
                                <img src="{{ asset('public/assets/images/printer_google_2.png') }}" alt="warranty" class="support_icon">
                                <img src="{{ asset('public/assets/images/printer_google_3.png') }}" alt="warranty" class="support_icon">
                                <img src="{{ asset('public/assets/images/printer_google_4.png') }}" alt="warranty" class="support_icon">
                            </div>
                            <div class="d-flex justify-content-lg-start justify-content-center gap-2">
                                <button class="common_btn text-white"><a href="#">Watch Video</a></button>
                                <button class="book_btn text-white"><a href="#">Book Appointment</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form_banner">
                            <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="http://localhost/printer_it_help/submit-contact-form">
                                <input type="hidden" name="_token" value="syZ6WRdq39wF8lNCr2CjpuZegfSQbQ5R7dKelfdk" autocomplete="off">                    <input type="hidden" name="form_type" value="home_form">
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
                    <div class="col-md-7">
                        <div class="under_banner_content">
                            <span>Printer IT Help</span>
                            <h2>Expert Printer Troubleshooting for Quick and Reliable Fixes</h2>
                            <p>At Printer It Help, we specialize in expert printer troubleshooting to quickly identify and resolve issues. Our reliable solutions ensure your printer runs smoothly, minimizing downtime and keeping your business operations efficient</p>
                            <div class="flex_banner_images">
                                <img src="{{ asset('public/assets/images/printer_google_1.png') }}" alt="warranty" class="support_icon">
                                <img src="{{ asset('public/assets/images/printer_google_2.png') }}" alt="warranty" class="support_icon">
                                <img src="{{ asset('public/assets/images/printer_google_3.png') }}" alt="warranty" class="support_icon">
                                <img src="{{ asset('public/assets/images/printer_google_4.png') }}" alt="warranty" class="support_icon">
                            </div>
                            <div class="d-flex justify-content-lg-start justify-content-center gap-2">
                                <button class="common_btn text-white">Watch Video</button>
                                <button class="book_btn text-white">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form_banner">
                            <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="http://localhost/printer_it_help/submit-contact-form">
                                <input type="hidden" name="_token" value="syZ6WRdq39wF8lNCr2CjpuZegfSQbQ5R7dKelfdk" autocomplete="off">                    <input type="hidden" name="form_type" value="home_form">
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
             <img src="https://digirushsolutions.com/public/front_assets/img/royalcare-logo.jpg" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/foryou.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/Great-media-1536x733.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/royalcare-logo.jpg" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/foryou.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/Great-media-1536x733.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/royalcare-logo.jpg" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/foryou.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/Great-media-1536x733.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/royalcare-logo.jpg" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/foryou.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/Great-media-1536x733.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/royalcare-logo.jpg" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/foryou.png" alt="">
          </div>
          <div class="pic">
             <img src="https://digirushsolutions.com/public/front_assets/img/Great-media-1536x733.png" alt="">
          </div>
       </div>
    </div>
 </section>

<section class="about_section py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <div class="about_img">
                    <img src="{{ asset('public/assets/images/about.jpg') }}" alt="aboutimg">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <h2>About PrinterItHelp: Your Trusted Partner for Reliable Printer Services</h2>
                <p>At Printer It Help, we are committed to offering superlative service and repair on printers so your equipment can operate efficiently and run smoothly. Our team, comprising printer repair service specialists with many years of experience in the industry, troubleshoots and maintains all type of printers accross the USA. We know how vital it is to have dependable printing for businesses and individuals, so we make a concerted effort to provide solutions quickly to minimize downtime. We can help with anything ranging from repairing a simple problem to even more complex areas of troubleshooting. Our commitment to quality, customer satisfaction and affordable pricing makes us the go to place for all your printer service and repair needs. Trust Printer It Help for all your printing solutions!
                </p>
                <div class="about_us_btn">
                        <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                            <button class="common_btn text-white"><a href="#">About us</a></button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_services_sec bg-light py_8">
    <div class="container">
        <div class="heading_our_services">
            <h2 class="aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">Our <span class="text_blue"> Services</span></h2>
            <p class=" fw-normal text-black opacity-75 aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">We have comprehensive printer service and repair, ensuring devices run smoothly. Our experts provide fast and reliable solutions through computer printer repair services and maintenance.</span></p>
        </div>

        <div class="row justify-content-center pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12  mb-3 aos-init aos-animate" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="service_card">
                    <div class="services_img">
                        <img src="https://printerithelp.com/public/assets/images/serviceimg.jpg" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>HP Printer Support</h3>
                    <p>Expert HP printer support for fast, reliable troubleshooting and repair</p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12  mb-3 aos-init aos-animate" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="service_card">
                    <div class="services_img">
                        <img src="https://printerithelp.com/public/assets/images/serviceimg.jpg" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>EPSON Printer Support</h3>
                    <p>Reliable EPSON printer support for efficient troubleshooting and quick repairs</p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12  mb-3 aos-init aos-animate" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="service_card">
                    <div class="services_img">
                        <img src="https://printerithelp.com/public/assets/images/serviceimg.jpg" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>BROTHER Printer Support</h3>
                    <p>Quick and reliable BROTHER printer support for all your repair needs</p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12  mb-3 aos-init aos-animate" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="service_card">
                    <div class="services_img">
                        <img src="https://printerithelp.com/public/assets/images/serviceimg.jpg" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>Canon Printer Support</h3>
                    <p>Expert Canon printer support for fast troubleshooting and reliable repairs</p>
                    <button class="common_btn text-white"><a href="#">Explore More</a></button>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12  mb-3 aos-init aos-animate" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="600">
                <div class="service_card">
                    <div class="services_img">
                        <img src="https://printerithelp.com/public/assets/images/serviceimg.jpg" alt="serviceimg">
                    </div>
                   <div class="under_txt_services">
                    <h3>Installation & Troubleshooting</h3>
                    <p>Expert installation and troubleshooting services for seamless printer performance</p>
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
                    <img src="http://localhost/printer_it_help/public/assets/images/service-printer.jpg" alt="service" class="about_img border_radius_6 w-100">
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <h2 class="text-center text-lg-start fw-semibold text-black mb-3">What Industry Based Technical Support We Offer</h2>
               <p>We offer industry specific technical support tailored to meet the unique needs of many sectors, including healthcare, education, retail, manufacturing and more. Whether it is optimizing printer fleets for large businesses or offering reliable support for home office setups, we deliver customized solutions that align with your industry's requirements, helping you maintain operational efficiency and reduce costs.</p>              
            </div>
        </div>
    </div>
</section>

<section class="why_choose_us py_8">
    <div class="container">
            <div class="heading_why_choose">
                <h2 class="aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">Why Choose Us for Expert Printer Service and Repair Solutions</h2>
            </div>
            <div class="row pt-lg-4">
                <div class="col-lg-4 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="https://printerithelp.com/public/assets/images/png/printing.png" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Experienced Technicians</h5>
                                </div>
                                <div class="solu_description">
                                    <p>Trained and experienced technicians would work on your printer in our team. Specializing in the repair and servicing of printers would ensure that your printer is quickly back to service with permanent fixes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="https://printerithelp.com/public/assets/images/png/printing.png" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Quick Response Time</h5>
                                </div>
                                <div class="solu_description">
                                    <p>We know how urgent printer issues are. We will promptly address the issue within minimum downtime, be it for computer printer repair services or for the routine troubleshooting.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="https://printerithelp.com/public/assets/images/png/printing.png" alt="printing" >
                             </div>
                                <div class="solu_title">
                                    <h5>Comprehensive Printer Services</h5>
                                </div>
                                <div class="solu_description">
                                    <p>From troubleshooting to full printer repair, we will take care of everything you might need to keep your printers in top shape, from the home user to the business one, so you can have a single source for all your needs.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-sm-4 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="https://printerithelp.com/public/assets/images/png/printing.png" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Cost-Effective Solutions</h5>
                                </div>
                                <div class="solu_description">
                                    <p>Reliable printer repair services at low priced, value-orientated prices without compromising quality in deliverables.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-sm-4 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="https://printerithelp.com/public/assets/images/png/printing.png" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Preventive Maintenance</h5>
                                </div>
                                <div class="solu_description">
                                    <p>We don't just fix problems, we prevent them. Our services for preventive maintenance help spot problems before they are brought to higher levels of damage, elongating the life cycle of your printer and minimizing future repairs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-sm-4 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                    <div class="our_solution_category">
                        <div class="choose_cards_box">
                            <div class="choose_card">
                                <div class="hover_color_bubble"></div>
                             <div class="img_why_choose">
                                   <img src="https://printerithelp.com/public/assets/images/png/printing.png" alt="printing">
                             </div>
                                <div class="solu_title">
                                    <h5>Customer Satisfaction Guarantee</h5>
                                </div>
                                <div class="solu_description">
                                    <p>Your satisfaction is our priority. We guarantee high-quality service and support, ensuring that your printer is running smoothly and efficiently, backed by our commitment to providing excellent customer service.
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
                    <h2 class="fw-semibold text-white mb-1"> Contact Information
                    </h2>
                    <div class="form_line mb-3 mt-1"></div>
                    <p class="text-white fw-normal mb-3">Lorem ipsum Lorem, ipsum. dolor sit amet Lorem ipsum
                        dolor sit amet. Lorem ipsum dolor consectetur, sit laudantium, consequatur consectetur adipisicing.Lorem ipsum Lorem, ipsum. dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor consectetur, sit laudantium, consequatur consectetur adipisicing.Lorem ipsum Lorem, ipsum. dolor sit amet Lorem ipsum
                        dolor sit amet. Lorem ipsum dolor consectetur, sit laudantium, consequatur consectetur adipisicing.Lorem ipsum Lorem, ipsum. dolor sit amet Lorem ipsum dolor sit amet. Lorem ipsum dolor consectetur, sit laudantium, consequatur consectetur adipisicing.
                    </p>
           
                </div>
                <div class="col-lg-5 col-12 mt-md-4 mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                    <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="https://printerithelp.com/submit-contact-form">
                        <input type="hidden" name="_token" value="2FInLqSQQqJMEpHQRmpDgKBm7IwZMZwIvqbMtrJI" autocomplete="off">                                <input type="hidden" name="form_type" value="home_form">
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
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.
                        </p>
                        <button class="common_btn text-white">a</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fw-normal opacity-75">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.
                        </p>
                        <button class="common_btn text-white">a</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fw-normal opacity-75">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white">a</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white">a</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white">a</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
    
</script>
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
@endsection
  




