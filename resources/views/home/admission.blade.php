@extends('layout.app_admission')

@section('navbar')

<div class="classynav">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/admission">Admission</a></li>
        <li><a href="#">Pages</a>
            <ul class="dropdown">
                <li><a href="/">Home</a></li>
                <li><a href="/admission">Admission</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/coursehtml">Course</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact.html">Contact</a></li>
            </ul>
        </li>
        <li><a href="about-us.html">About Us</a></li>
        <li><a href="course.html">Course</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</div>
@endsection

@section('breadcrumb')
         
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Admission</h2>
    </div>
</div>

@stop

@section('college_requirement')
    
<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="10ms">
                    <h3>Requirements</h3>  
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="20ms">
                    <div class="popular-course-content">
                        <h5><b>Freshmen</b></h5>
                        <hr>
                        <p>Freshmen are excessive college graduates enrolling in St. Cecilia's College for the primary time. 
                            At the time of enrollment, a freshman should put up his excessive college document card 
                            (Form 138) duly licensed through the Principal, and the unique replica of his NSAT result.</p>
                        <a href="/admission_list" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-1.jpg);"></div>
                </div>
            </div>

             <!-- Single Top Popular Course -->
             <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="30ms">
                    <div class="popular-course-content">
                        <h5><b>Transferee</b></h5>
                        <hr>
                        <p>Transfer college students are individuals who desire to sign up withinside the University 
                            after having been enrolled in university path at some other institution. At the time of enrollment, 
                            a transferee need to publish the subsequent credentials:</p>
                        <a href="/admission_list" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-2.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
<!-- ##### Top Popular Courses Area End ##### -->

<!-- ##### CTA Area Start ##### -->
@section('course_banner') 
<div class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                    <h3>View all the Complete List of Admission</h3>
                    <a href="/admission_list" class="btn academy-btn">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<!-- ##### CTA Area End ##### -->

   <!-- ##### Footer Area Start ##### -->
@section('footer')

   <footer class="footer-area">
       <div class="main-footer-area section-padding-100-0">
           <div class="container">
               <div class="row">
                   <!-- Footer Widget Area -->
                   <div class="col-12 col-sm-6 col-lg-3">
                       <div class="footer-widget mb-100">
                           <div class="widget-title">
                               <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                           </div>
                           <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
                           <div class="footer-social-info">
                               <a href="#"><i class="fa fa-facebook"></i></a>
                               <a href="#"><i class="fa fa-twitter"></i></a>
                               <a href="#"><i class="fa fa-dribbble"></i></a>
                               <a href="#"><i class="fa fa-behance"></i></a>
                               <a href="#"><i class="fa fa-instagram"></i></a>
                           </div>
                       </div>
                   </div>
                   <!-- Footer Widget Area -->
                   <div class="col-12 col-sm-6 col-lg-3">
                       <div class="footer-widget mb-100">
                           <div class="widget-title">
                               <h6>Usefull Links</h6>
                           </div>
                           <nav>
                               <ul class="useful-links">
                                   <li><a href="#">Home</a></li>
                                   <li><a href="#">Services &amp; Features</a></li>
                                   <li><a href="#">Accordions and tabs</a></li>
                                   <li><a href="#">Menu ideas</a></li>
                               </ul>
                           </nav>
                       </div>
                   </div>

                   <!-- Footer Widget Area -->
                   <div class="col-12 col-sm-6 col-lg-3">
                       <div class="footer-widget mb-100">
                           <div class="widget-title">
                               <h6>Contact</h6>
                           </div>
                           <div class="single-contact d-flex mb-30">
                               <i class="icon-placeholder"></i>
                               <p>Natalio B. Bacalso S National Hwy, Minglanilla, Cebu, Phillipines</p>
                           </div>
                           <div class="single-contact d-flex mb-30">
                               <i class="icon-telephone-1"></i>
                               <p>Main: (+63) 9xx xxx xxx <br>Office: 203-808-093</p>
                           </div>
                           <div class="single-contact d-flex">
                               <i class="icon-contract"></i>
                               <p>office@yourbusiness.com</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="bottom-footer-area">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                   </div>
               </div>
           </div>
       </div>
   </footer>

   @stop
   <!-- ##### Footer Area Start ##### -->