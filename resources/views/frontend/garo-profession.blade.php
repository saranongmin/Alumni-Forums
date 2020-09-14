@extends('frontend.layouts.master')

@section('title', 'Dashboard')

@section('content')

<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Garo Professions			
							</h1>	
							<p class="text-white link-nav"><a href="{{route('welcome')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('garo')}}"> 								Garo Cummunity</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" src="{{asset('ui/frontend')}}/img/garo/culture.jpg" alt="" width="650px">
							</div>
							<div class="details-content">
								<a href="#">
									<h4>Garo Professions</h4>
								</a>
								<p>
									The Garos rely on nature. Their profession is hunting and warrior known as Matgrik. They practice jhum cultivation which is the most common agricultural tradition. For more than 4,000 years, the Garos have been practicing jhum cultivation. It was their main profession for feeding themselves.					
								</p>
								<p>
									But in the last 50 years the most changing scenario of the Garo ethnic people is the changing of professions. They are now influenced and have adapted to the modern technology and professions. They are engaged in Government and non-government jobs. In India Government jobs are most common for the Garos. They might have jobs in schools, colleges, universities, and other educational institutions. In Bangladesh, their jobs are more diverse than in India. Almost 30,000 Garos are living in Dhaka metropolitan city and most of them are working in beauty parlours, EPZ industries, housekeeping, security personnel, driving, NGOs private service, real-estate, garment industries, etc. There is a good number in Bangladesh Civil Service Cedre service. In Dimapur, Nagaland State, the Garo people may work as day labourers.


							
								</p>
							</div>
							
								
							</div>
						</div>
						
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->
					
				
							
			@endsection