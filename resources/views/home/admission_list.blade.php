@extends('layout.app_admission_list')

@section('breadcrumb')

<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    {{-- <div class="bradcumbContent">
        <h2>Admission</h2>
    </div> --}}
</div>
@stop


 <!-- ##### About Us Area Start ##### -->
 @section('admission_list')

 <section class="about-us-area mt-50 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="100ms">
                    <h3>Requirement List</h3>
                </div>
            </div>
        </div>
       <!-- ##### Accordians ##### -->
        <div class="col-12">
            <div class="accordions mb-100 text-center" id="accordion" role="tablist" aria-multiselectable="true">
                <!-- single accordian area -->
                <div class="panel single-accordion">
                    <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><b>College</b>
                            <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a></h6>
                    <div id="collapseOne" class="accordion-content collapse show">
                        <br>
                        <b>Freshman</b>
                        <ol>
                            <li>Form 138</li>
                            <li>Good Moral Certificate</li>
                            <li>2x2 Colored Pictures</li>
                            <li>Birth Certificate Authenticated by NSO(Photocopy)</li>
                        </ol>

                        <br>

                        <b>Transferees</b>
                        <ol>
                            <li>TOR (Transcipt of Records)</li>
                            <li>Honorable Dismissal</li>
                            <li>Good Moral Certificate</li>
                            <li>Birth Certificate Authenticated by NSO(Photocopy)</li>
                        </ol>

                        
                    </div>
                </div>
                <!-- single accordian area -->
                <div class="panel single-accordion">
                    <h6>
                        <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo"><b>Senior High School</b>
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                    </h6>
                    <div id="collapseTwo" class="accordion-content collapse">
                        <br>
                        <h3></h3>
                        <ol>
                            <li>Form 138</li>
                            <li>Good Moral Certificate</li>
                            <li>2x2 Colored Pictures</li>
                            <li>Birth Certificate Authenticated by NSO(Photocopy)</li>
                        </ol>
                    </div>
                </div>
                 <!-- single accordian area -->
                 <div class="panel single-accordion">
                    <h6>
                        <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree"><b>Junior High</b>
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                    </h6>
                    <div id="collapseThree" class="accordion-content collapse">
                        <br>
                        <h3></h3>
                        <ol>
                            <li>Report Card (Original)</li>
                            <li>Good Moral Certificate</li>
                            <li>2x2 Colored Pictures</li>
                            <li>Birth Certificate Authenticated by NSO(Photocopy)</li>
                        </ol>
                    </div>
                </div>
                <!-- single accordian area -->
                <div class="panel single-accordion">
                    <h6>
                        <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree"><b>Grade School</b>
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                    </h6>
                    <div id="collapseThree" class="accordion-content collapse">
                        <br>
                        <h3></h3>
                        <ol>
                            <li>Report Card (Original)</li>
                            <li>Good Moral Certificate</li>
                            <li>2x2 Colored Pictures</li>
                            <li>Birth Certificate Authenticated by NSO(Photocopy)</li>
                        </ol>
                    </div>
                </div>

                 <!-- single accordian area -->
                <div class="panel single-accordion">
                    <h6>
                        <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFour" data-parent="#accordion" data-toggle="collapse" href="#collapseFour"><b>Pre-School</b>
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                        </h6>
                        <div id="collapseFour" class="accordion-content collapse">
                            <br>
                            <h3></h3>
                            <ol>
                                <li>Report Card (If available and applicable)</li>
                                <li>1 long brown envelope</li>
                                <li>1 long plastic envelope</li>
                                <li>2x2 Colored Pictures</li>
                                <li>Birth Certificate Authenticated by NSO(Photocopy)</li>
                            </ol>
                        </div>
                </div>

                 <!-- single accordian area -->
                 <div class="panel single-accordion">
                    <h6>
                        <a role="button" aria-expanded="true" aria-controls="collapseFive" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFive"><b>Special Education</b>
                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                    </h6>
                    <div id="collapseFive" class="accordion-content collapse">
                        <br>
                        <h3></h3>
                        <ol>
                            <li>Birth Certificate (NSO photocopy)</li>
                            <li>Progress report card (if available/applicable)</li>
                            <li>Medical Assessment</li>
                            <li>2x2 colored pictures (4pcs)</li>
                            <li>1 long brown envelope</li>
                            <li>1 long plastic envelope</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="elements-title mb-50">
                <h2>Milestone</h2>
            </div>
        </div>

        <div class="col-12">
            <div class="academy-cool-facts-area mb-50">
                <div class="row">

                    <!-- Single Cool Fact-->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="single-cool-fact text-center">
                            <i class="icon-agenda-1"></i>
                            <h3><span class="counter">130</span></h3>
                            <p>Courses Available</p>
                        </div>
                    </div>

                    <!-- Single Cool Fact-->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="single-cool-fact text-center">
                            <i class="icon-assistance"></i>
                            <h3><span class="counter">54</span></h3>
                            <p>Amazing Teachers</p>
                        </div>
                    </div>

                    <!-- Single Cool Fact-->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="single-cool-fact text-center">
                            <i class="icon-id-card"></i>
                            <h3><span class="counter">67</span>k</h3>
                            <p>Students</p>
                        </div>
                    </div>

                    <!-- Single Cool Fact-->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="single-cool-fact text-center">
                            <i class="icon-message"></i>
                            <h3><span class="counter">12</span></h3>
                            <p>Awards Won</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@stop
<!-- ##### About Us Area End ##### -->


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