@extends('layouts.app')
@section('content')
<section class="about_banner py_8" style="background-image: url(public/assets/images/canon_printer1.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="banner_heading">
                    <h1>Expert Canon Printer Support Services</h1>
                    <p>Get expert Canon printer support with Printer IT Help. From seamless installation to troubleshooting and maintenance, we ensure your Canon printer delivers reliable performance for home and business use.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="form_banner">
                    <form id="contactForm"
                        class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden"
                        method="POST" action="{{route('contact.submit')}}">
                        @csrf
                        <input type="hidden" name="form_type" value="home_form">
                        <div class="corner-animation z-1"></div>
                        <div class="position-relative z-1">
                                <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your Printing Service Now</h2>

                                <div class="d-md-flex gap-3">
                                    <div class="w-100">
                                        <input class="w-100 mb-1" type="text" placeholder="Name" name="firstname" value="" pattern="[A-Za-z\s]+" title="Please enter only letters" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                    </div>
                                    <div class="w-100 mt-2 mt-lg-0">
                                        <input class="w-100" type="email" placeholder="Email" name="email" value="">
                                    </div>
                                </div>

                                        <div class="d-md-flex gap-3 mt-3">
                                            <div class="w-100 mt-2 mt-lg-0">
                                                <input class="w-100" type="text" placeholder="Phone Number" name="contact" minlength="10" maxlength="10" value="" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                            </div>
                                            <div class="w-100 mt-2 mt-lg-0">
                                                <input class="w-100" type="text" placeholder="Address" name="address" value="">
                                            </div>
                                        </div>

                        <div class="d-md-flex gap-3 mt-lg-3">
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="State" name="State" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                            </div>
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="City" name="city" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                            </div>
    </div>

    <div class="d-md-flex gap-3 mt-lg-3">
        <div class="w-100 mt-2 mt-lg-0">
            <!-- Service Dropdown -->
            <select class="form-control w-100" name="service" id="serviceSelect" required>
                <option value="">Select a Service</option>
                <option value="hp">HP Printer Support</option>
                <option value="epson">Epson Printer Support</option>
                <option value="brother">Brother Printer Support</option>
                <option value="canon">Canon Printer Support</option>
                <option value="install">Installation & Troubleshooting</option>
            </select>
        </div>
        <div class="w-100 mt-2 mt-lg-0">
            <select class="form-control w-100" name="subservice" id="subServiceSelect" required>
                <option value="">Select a Sub-Service</option>
                <option value="wireless">Wireless Printer Setup</option>
                <option value="network">Network Printer Setup</option>
                <option value="multi">Multi-Function Printer Setup</option>
            </select>
        </div>
    </div>


    <!-- Model Number Input (appears based on the sub-service) -->
    <div id="modelDiv" class="d-md-flex gap-3 mt-lg-3" >
        <div class="w-100 mt-2 mt-lg-0">
            <input class="w-100" type="text" placeholder="Enter Printer Model No." name="model" id="modelInput" value="">
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
</section>

<section class="about_section py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about_img">
                <img src="{{ asset('public/assets/images/canon_printer2.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Why Choose Printer IT Help for Canon Printer Support?</h2>
                <p>Printer IT Help provides professional and reliable Canon printer support for home and business users. Our team of experienced technicians can help you with any Canon printer installation, troubleshooting, or maintenance issues. We ensure that your Canon printer runs smoothly and without interruptions by providing top-quality service.
                </p>
                <p>Our support includes step-by-step installation guidance to install your Canon printer precisely so it can integrate well with other devices. If you face problems, call our experts for quick, effective troubleshooting. Moreover, your Canon printer support phone number is available 24/7, and you can get dedicated assistance whenever you want.
                Choose us for our expertise, prompt service, and commitment to customer satisfaction. Trust Printer IT Help to keep your Canon printer running smoothly for a hassle-free printing experience.
                </p>
                <div class="about_us_btn">
                        <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                            <button class="common_btn text-white"><a href="{{route('contact')}}">Contact us</a></button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section color_second py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Comprehensive Canon Printer Troubleshooting and Maintenance</h2>
                <p>At Printer IT Help, we specialize in providing detailed services on Canon printer troubleshooting and maintenance so that they do not create problems for home and business users. If your Canon printer is making errors, having connectivity issues, or performing slowly, our experts will promptly resolve the issues to get your printer back on track.
                </p>
                <p>We troubleshoot our printers for paper jams, driver installation errors, connectivity faults, and other common issues. We also offer regular Canon printer maintenance to ensure long-term reliability, optimize performance, and help the product last longer.
                 Our team also helps you with software updates, hardware checks, and calibration to ensure the smooth functioning of your printer. Our service is tailored to suit your needs, from a single device to an entire network.
                </p>
               
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about_img">
                <img src="{{ asset('public/assets/images/canon_printer3.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_services_main py_8">
    <div class="container">
        <div class="services_main">
        <h2> Step-by-Step Guidance to Install Your Canon Printer</h2>
        <p> Here is a step-by-step guide on installing your Canon printer quickly and efficiently, with a smooth installation process and quick functionality. Follow these steps for a practical installation experience.
        </p>
        </div>

        <div class="row pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Preparing for Canon Printer Installation</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Before you start the installation, ensure you have all the necessary components, including the Canon printer, installation CD, power cable, and connection cables (USB or Wi-Fi).
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-sm-0">

                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Connecting Your Canon Printer</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Connect the Canon printer to your computer for USB installation using the provided USB cable. For wireless setup, follow the Wi-Fi setup instructions in your printer manual to connect it to your network.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-lg-0">

                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Installing Printer Drivers</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Download the latest Canon printer drivers from the official Canon website or use the installation CD. Run the installation wizard to ensure your Canon printer is compatible with your computer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">

                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Testing the Printer Setup</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Once installed, test the printer by printing a test page. This helps ensure that everything is connected properly and that your Canon printer functions correctly.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Troubleshooting Common Installation Issues</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">If your Canon printer doesn’t work immediately, check for common issues such as incorrect driver installation or connectivity problems. Our Canon printer support phone number is available to assist with troubleshooting.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black text-center"> Continuous Support and Assistance</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">You can contact our Canon printer support team for installation queries or additional setup assistance. We are available 24/7 to resolve your issue quickly and efficiently.
Contact Printer IT Help today for hassle-free Canon printer installation and expert support!

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main_section py_8" style="background-image: url(public/assets/images/canon_printer4.jpg);">
    <div class="container">
        <div class="main_content_under">
            <h2>Install Your Canon Printer in No Time with Our Professional Help!</h2>
            <p>Get your Canon printer installed quickly and efficiently with expert help from Printer IT Help. Our team provides step-by-step guidance for seamless setup, ensuring optimal performance with ease.</p>
        </div>
    </div>
</section>

<section class="accordian_services py_8">
    <div class="container">
        <div class="heading_frequently">
            <h2>Common Queries About Canon Printer Support</h2>
            <p>Frequently asked questions about Canon printer support. From installation to troubleshooting, our team of experts offers solutions to ensure your Canon printer operates smoothly and efficiently.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <div class="img_accodian">
                <img src="{{ asset('public/assets/images/canon_printer5.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="accordian_main">
                    <div id="faqAccordion" class="accordion accordion-flush">
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="true" aria-controls="flush-collapse1">
                                How do I install my Canon printer with Printer IT Help?
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion" style="">
                                <div class="accordion-body text-black">Printer IT Help guides you through the steps of installing a Canon printer. Our experts ensure smooth installation for both USB and wireless connections.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                My Canon printer is not printing. What should I do?
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">If your Canon printer fails to print, call Printer IT Help for troubleshooting. We will help you to identify common problems such as connectivity, ink, or driver issues.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                Can I get phone support to help with my Canon printer?
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">Reach Printer IT Help at our dedicated Canon printer support phone number to get urgent help for any issue or printer-related query.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Can the Printer IT Help resolve connection issues with my Canon printer?
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">The Printer IT Help can provide quality support to solve the Canon printer's connectivity issue involving Wi-Fi setup or network configurations.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                What kind of printer maintenance services does Printer IT Help offer for Canon printer companies?
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">Printer IT Help services include regular checks, software upgrading, and troubleshooting services to keep your Canon Printer going optimally.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
