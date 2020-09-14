@extends('frontend.layouts.master')

@section('title', 'Dashboard')

@section('content')

<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Garo Culture			
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
									<h4>Garo Festivals</h4>
								</a>
								<p>
									The common and regular festivals are those connected with agricultural operations.

Most Garo festivals are based on the agricultural cycle of crops. The harvesting festival Wangala is the biggest celebration of the tribe happening in the month of October or November every year. It is the thanksgiving after harvest in the honor of the god Saljong, provider of nature's bounties.								
								</p>
								<p>
									Wangala of Asanang - There is a celebration of the 100-drum festival in Asanang near Tura in West Garo Hills, Meghalaya, India usually in October or November. Thousands of people, especially young people, gather at Asanang and celebrate Wangala with great joy.<br><br>
									Dhaka Wangala - There are 30,000 Garos living in Dhaka. They celebrate their Wangala festival every year with the new spirit as a thanksgiving to the creator. <br><br>
									Christmas - Though Christmas is a religious celebration, December is a great season of celebration in Garo Hills. In the first week of December, the town of Tura and all other smaller towns are illuminated with lights. <br><br>
									Ahaia Winter Festival - The annual festival, conceptualised in 2008, is aimed to promote and brand this part of the region as a popular tourist destination by giving an opportunity for the local people to showcase their skills and expertise


					
								</p>
							</div>
							
								
							</div>
						</div>
						
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->
					
				
							
			@endsection