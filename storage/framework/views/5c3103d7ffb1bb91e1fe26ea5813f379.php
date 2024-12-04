<header>
    <div class="top_header">
        <div class="nav_contact bg_blue py-3">
            <div class="container">
                <div class="d-lg-flex justify-content-between align-items-center">
                    <div class="d-lg-flex gap-5 mt-4 mt-lg-0">
                        <div class="d-sm-flex gap-5 justify-content-sm-between align-items-sm-start">
                            <div class="d-flex gap-3 align-items-center pe-xl-4 mb-3 mb-sm-0">
                                <img src="<?php echo e(asset('public/assets/images/png/location-pin.png')); ?>" alt="location-icon" class="mail_icon">
                                <div>
                                    <a href="#" class="text-white fs_16 fw-normal link">Lorem, ipsum dolor.</a>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center pe-xl-5">
                                <img src="<?php echo e(asset('public/assets/images/png/email.png')); ?>" alt="mail-icon" class="mail_icon">
                                <div>
                                    <a href="#" class="text-white fs_16 fw-normal link">contactus@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex gap-3 d-none">
                        <a href="#"><img src="<?php echo e(asset('public/assets/images/png/instagram-icon.png')); ?>" alt="social-icon" class="social_icon"></a>
                        <a href="#"><img src="<?php echo e(asset('public/assets/images/png/facebook-icon.png')); ?>" alt="social-icon" class="social_icon"></a>
                        <a href="#"><img src="<?php echo e(asset('public/assets/images/png/whatsapp-icon.png')); ?>" alt="social-icon" class="social_icon"></a>
                        <a href="#"><img src="<?php echo e(asset('public/assets/images/png/twitter.png')); ?>" alt="social-icon" class="social_icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <!-- Logo -->
        <div class="header_logo">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(asset('public/assets/images/png/page-logo.png')); ?>" alt="page-logo">
            </a>
        </div>
        <!-- Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo e(route('home')); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('about.show')); ?>">About</a>
            </li>
            <li class="nav-item dropdown">
                <!-- <button class="dropbtn"> Services</button>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="#">HP Printer Support</a>
                    <a class="dropdown-item" href="#">Epson Printer Support</a>
                    <a class="dropdown-item" href="#">Brother Printer Support</a>
                    <a class="dropdown-item" href="#">Canon Printer Support</a>
                    <a class="dropdown-item" href="#">Installation & Troubleshooting</a>
                </div> -->
               <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                <li><a class="dropdown-item" href="<?php echo e(route('hp_printer')); ?>">HP Printer Support</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('epson_printer')); ?>">Epson Printer Support</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('brother_printer')); ?>">Brother Printer Support</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('canon_printer')); ?>">Canon Printer Support</a></li>
                <li><a class="dropdown-item" href="<?php echo e(route('installation_printer')); ?>">Installation & Troubleshooting</a></li>
              </ul> 
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header><?php /**PATH /home/quicmwmz/printerithelp.com/resources/views/includes/header.blade.php ENDPATH**/ ?>