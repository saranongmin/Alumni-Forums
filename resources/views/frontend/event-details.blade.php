	@extends('frontend.layouts.master')

@section('title', 'Event')

@section('content')
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Campus News				
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						@foreach($reports as $report)
						<div class="col-lg-12">
							<div class="details-content">
								
									<h4>{{$report->title}}</h4>
								
								<p>{{$report->description}}</p>
								
							</div>
							
							
						</div>
						@endforeach
					</div>
					
				</div>	
			</section>
			<!-- End event-details Area -->
					
				
									    			

			@endsection