 @extends('frontend.layouts.master')

@section('title', 'Job')

@section('content')  
 <!-- start banner Area -->
                        			<section class="job-area relative" id="home" style="height:500px">
                        				<div class="overlay overlay-bg"></div>
                        				<div class="container">
                        					<div class="row fullscreen d-flex align-items-center justify-content-center">
                        						<div class="job-content col-lg-12">


                        					</div>
                        					</div>
                        				</div>
                        			</section>
                        			<!-- End job Area -->


              <!-- Start features Area -->
             <section class="features-area">
                <div class="container">
            	<div class="row">
              <div class="col-lg-12 col-md-12">
          	<div class="single-feature" style="margin-top:-30px">

               <h4>Apply for the job</h4>
                 <p>Apply with your online resume, create new resume for the job, or make a custom application.</p>

                   <hr>
 <div class="single-popular-post d-flex flex-row">

<div class="details"> @foreach($jobs as $job)
<a href="{{ url('jobdetails') }}"><h4>{{$job->title}}</h4></a>
      <h6>{{$job->location}}</h6>
      @endforeach
   </div>
    </div>
    </div>
                     <div class="single-feature">
                              <center>
                                <a class="primary-btn"style="background-color:#1a8cff;" href="{{ route('customs.index') }}">Custom Application</a>&nbsp;&nbsp;
                                <a class="primary-btn"style="background-color:#1a8cff;" href="{{ route('resumes.index') }}">Submit Your CV</a>



                              </center>


                            </div>
                          </div>


                        </div>
                      </div>
                    </section>
                    <!-- End features Area -->




@endsection