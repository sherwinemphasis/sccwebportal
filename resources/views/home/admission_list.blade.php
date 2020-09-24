@extends('layout.app2')

@section('content')

<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    {{-- <div class="bradcumbContent">
        <h2>Admission</h2>
    </div> --}}
</div>

 <!-- ##### About Us Area Start ##### -->
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

<!-- ##### About Us Area End ##### --> 
@endsection