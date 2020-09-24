@extends('layout.app2')

@section('content')
      
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Admission</h2>
    </div>
</div>

    
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
                        <a href="/adm" class="btn academy-btn btn-sm">See More</a>
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
                        <a href="/admissionlist" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-2.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Popular Courses Area End ##### -->

<!-- ##### CTA Area Start ##### -->

<div class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                    <h3>View all the Complete List of Admission</h3>
                    <a href="/admissionlist" class="btn academy-btn">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<!-- ##### CTA Area End ##### -->
