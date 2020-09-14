
@extends('frontend.layouts.master')

@section('title', 'Job')

@section('content')


<section class="job-area relative" id="home" style="height:500px">
    <div class="overlay overlay-bg"></div>
    <div class="container">
     <div class="row fullscreen d-flex align-items-center justify-content-center">
       <div class="job-content col-lg-12"></div>
                        					</div>
                    </div>
                    </section>
          <!-- End job Area -->


			
    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Recently Added Jobs</span>
            <h2 class="mb-4"><span>Recent</span> Jobs</h2>
          </div>
        </div>
				<div class="row">
					          	@foreach($jobs as $job)


          <div class="col-md-12 ftco-animate">
						<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

						  <div class="mb-4 mb-md-0 mr-5">
						   <div class="job-post-item-header d-flex align-items-center">
						     <h2 class="mr-3 text-black h4">{{$job->position}}</h2>
						     <div class="badge-wrap">
						      <span class="bg-warning text-white badge py-2 px-3">{{$job->job_type}}</span>
						     </div>
						   </div>
						   <div class="job-post-item-body d-block d-md-flex">
						     <div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$job->title}}</a></div>
						     <div><span class="icon-my_location"></span> <span>{{$job->company_name}}</span></div>
						   </div>
						  </div>

						  <div class="ml-auto d-flex">
						  	<a href="{{route('jobapplies')}}" class="btn btn-primary py-2 mr-1">Apply Job</a>
               
                </a>
              </div>

						</div>
          </div> <!-- end -->
          @endforeach
          
       
        

         
				</div>
				
			</div>
		</section>

		@endsection