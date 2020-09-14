	@extends('frontend.layouts.master')

@section('title', 'Events')

@section('content')
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								News & Event  Page				
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


				
			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
						@foreach($events as $event)
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<!-- <img class="img-fluid" src="{{asset('ui/frontend')}}/img//events/1.jpg" alt=""> -->
									@if(file_exists(storage_path().'/app/public/events/'.$event->image ) && (!is_null($event->image)))
                <img src="{{ asset('storage/events/'.$event->image) }}" alt="img" 
                class="content-image img-fluid d-block mx-auto" style="height:150px">
            @endif
								</div>
								<div class="detials col-12 col-md-6">
									<h4 style="color:black">{{$event->name}}</h4>
									<p>
										Upcoming Date {{$event->date}}
									</p>
									<p>
										Venue - {{$event->place}}
									</p>
								</div>
							</div>
						</div>
						@endforeach
						
						
						
																		
						
					</div>
				</div>	
			</section>
			<!-- End events-list Area -->
		
					<section class="sample-text-area">
				<div class="container">			    			
               <div class="col-md-12 mt-sm-30 typo-sec">
								<h3 class="mb-20">Recent Campus News</h3>
								<div class="">
									@foreach($reports as $report)
								<ul class="unordered-list">

										<a href="{{route('event-details')}}"><li><span>{{$report->title}}</span></li></a>						
									</ul>
									@endforeach
								</div>
							</div>
						</div>
					</section>
			@endsection
