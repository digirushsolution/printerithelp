<?php $__env->startSection('content'); ?>
<section class="about_banner py_8" style="background-image: url(public/assets/images/contact_banner1.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="banner_heading">
                    <h1>Contact Us</h1>
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

<section class="py-5 bg-light">
    <div class=" pointer_events"></div>
    <div class="container bg-white py-md-5 py-4 px-md-5 px-4 position-relative box_shadow border_radius_6 my-xl-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="">
                    <h2 class="fw-semibold text-black fs_32">Contact Us for Expert Printer Support</h2>
                    <p class="text-black fs_16 fw-normal mb-2">At Printer IT Help, we’re here to provide you with reliable printer support and solutions.
                    <span class="d-xl-block"> Whether you need printer installation, troubleshooting, or maintenance, our team of experts is ready to assist you.</span>
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="email_circle d-flex justify-content-center align-items-center">
                            <a href="#"><img src="<?php echo e(asset('public/assets/images/png/email.png')); ?>" alt="email" class="icons"></a>
                        </div>
                        <a href="#" class="text_blue fs_16 fw-normal link">info@example.com</a>
                    </div>
                    <div class="d-flex align-items-center gap-3 mt-3">
                        <div class="email_circle d-flex justify-content-center align-items-center">
                            <a href="#"><img src="<?php echo e(asset('public/assets/images/png/location-pin.png')); ?>" alt="location" class="icons"></a>
                        </div>
                        <div>
                            <a href="#" class="text_blue fs_16 fw-normal link">Office Address</a>
                            <p class="fw-normal text-black fs_16 mt-2">352. UG Floor. Sultanpur. Mehrauli
                                Gurgaon <span class="d-block">Road, New Delhi, 110030</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <script>
                      <?php if(Session::has('success')): ?>
                            toastr.success("<?php echo e(Session::get('success')); ?>");
                        <?php endif; ?>
                </script>
                <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="<?php echo e(route('contact.submit')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="form_type" value="contact_form">
                    <div class="corner-animation z-1"></div>
                    <div class="position-relative z-1">
                        <h2 class="fw-semibold text_blue text-center fs_32 mb-4 position-relative z-2">Fill Out This Form for Assistance</h2>
                        
                        <div class="d-md-flex gap-3">
                            <div class="w-100">
                                <input class="w-100 mb-1" type="text" placeholder="Enter your name" name="firstName" value="<?php echo e(old('firstName')); ?>" pattern="[A-Za-z\s]+" title="Please enter only letters" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                <?php $__errorArgs = ['firstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="Enter Last Name" name="lastName" value="<?php echo e(old('lastName')); ?>" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                <?php $__errorArgs = ['lastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message text-danger ps-1"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                
                        <div class="d-md-flex gap-3 mt-3">
                            <div class="w-100">
                                <input class="w-100" type="email" placeholder="Enter Your Email" name="email" value="<?php echo e(old('email')); ?>">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="Enter Your Address" name="address" value="<?php echo e(old('address')); ?>">
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                
                        <div class="d-md-flex gap-3 mt-lg-3">
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="Enter Your Number" name="contact" minlength="10" maxlength="10" value="<?php echo e(old('contact')); ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="Enter Your City" name="city" value="<?php echo e(old('city')); ?>" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="error-message text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                
                        <div class="d-flex justify-content-center mt-2">
                            <button type="submit" class="common_btn text-white py-2 px-4 fw-medium fs_16 mt-md-3 mt-2">Enquiry Now</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
        <iframe class="w-100 map_height"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15281595.9594793!2d72.0968313048089!3d20.756533069463835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1730979477620!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
<?php $__env->stopSection(); ?>


     
   

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/quicmwmz/printerithelp.com/resources/views/frontend/contact.blade.php ENDPATH**/ ?>