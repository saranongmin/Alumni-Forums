@extends('frontend.layouts.master')

@section('title', 'Alumni-Home')

@section('content')
<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<!-- <div class="overlay overlay-bg"></div>	 -->
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								Alumni are the heart of University		
							</h1>
							<p class="pt-10 pb-10">
								<!-- In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble. -->
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			
       <!-- Section: Team v.2 -->
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Our Notable Alumni</h2>
  <!-- Section description -->
  <p class="grey-text w-responsive mx-auto mb-5">Our alumni are our priority. we believe in providing best support to them.</p>

  <h2><a href="{{route('login')}}">Click here for registration in alumni Member.</a></h2>
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.2 -->

@endsection