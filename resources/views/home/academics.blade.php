@extends('layout.app_academics')

@section('breadcrumb')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Academics</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
@stop

@section('academics')
<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>St. Cecilia's Offer</span>
                    <h3>College and School</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                    <div class="popular-course-content">
                        <h5><b>College of Commerce</b></h5>
                        <hr>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                        <a href="#" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-1.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="popular-course-content">
                        <h5><b>College of Education</b></h5>
                        <hr>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                        <a href="#" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-2.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        <h5><b>College of Information Technology</b></h5>
                        <hr>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                        <a href="#" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-3.jpg);"></div>
                </div>
            </div>


            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                    <div class="popular-course-content">
                        <h5><b>College of Criminology</b></h5>
                        <hr>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                        <a href="#" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-3.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                    <div class="popular-course-content">
                        <h5><b>Senior High</b></h5>
                        <hr>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                        <a href="#" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-4.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="popular-course-content">
                        <h5><b>Junior High</b></h5>
                        <hr>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                        <a href="#" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-5.jpg);"></div>
                </div>
            </div>

            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="900ms">
                    <div class="popular-course-content">
                        <h5><b>Grade School</b></h5>
                        <hr>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.</p>
                        <a href="#" class="btn academy-btn btn-sm">See More</a>
                    </div>
                    <div class="popular-course-thumb bg-img" style="background-image: url(img/bg-img/pc-6.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Popular Courses Area End ##### -->
@stop

@section('academicslist')
  <!-- ##### CTA Area Start ##### -->
  <div class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                    <h3>Complete List of Course Offers</h3>
                    <a href="/academicslist" class="btn academy-btn">See </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### CTA Area End ##### -->
@stop