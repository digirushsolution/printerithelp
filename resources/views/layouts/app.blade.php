<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex"> <!-- Allow search engines to index and follow the links -->
    
    <!-- Meta Tags for SEO -->
    <title>@yield('title', 'PrinterItHelp')</title>
    <meta name="description" content="PrinterItHelp provides IT-related solutions, offering expert advice, troubleshooting, and printer help services. Explore our wide range of IT services for businesses and individuals.">
    <meta name="keywords" content="IT services, printer help, troubleshooting, printer repair, IT support, tech solutions">
    <meta name="author" content="PrinterItHelp Team">
    
    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="@yield('title', 'PrinterItHelp')">
    <meta property="og:description" content="PrinterItHelp provides IT-related solutions, offering expert advice, troubleshooting, and printer help services. Explore our wide range of IT services for businesses and individuals.">
    <meta property="og:image" content="{{ asset('public/assets/images/png/og-image.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    
    
    <!-- Favicon for the website -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/png/favicon.png') }}" type="image/x-icon">
    
    <!-- External CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    
    @yield('heads')

</head>
<body>
    @include('includes.header')

    @yield('content')

    @include('includes.footer')
<!-- modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="form_banner modal_form">
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
                    <input class="w-100" type="text" placeholder="City" name="City" value="" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
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
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>

<!-- modal -->
    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>

    <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @yield('scripts')

    <!-- Slick Slider Configuration -->
    <script>
    $(document).ready(function () {
        $('.slick-slider').slick({
            fade: true,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: true,
        });
    });
    </script>

    <script>
    $('.responsive').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 2,
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
    </script>

    <script>
    $('.testimonial').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
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
    </script>

</body>
</html>
