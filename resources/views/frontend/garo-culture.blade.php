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
								<a href="{{route('garo-culture')}}">
									<h4>Garo Culture</h4>
								</a>
								<p>
									The Garos are one of the few remaining matrilineal societies in the world. The individuals take their clan titles from their mothers. Traditionally, the youngest daughter (nokmechik) inherits the property from her mother. Sons leave the parents' house at puberty and are trained in the village bachelor dormitory (nokpante). After getting married, the man lives in his wife's house.									
								</p>
								<p>
									In Garo habitations, the house where unmarried male youth or bachelors live is called Nokpante. The women were forbidden from entering the Nokpante. Any woman who broke this rule was considered tainted or "marang nangjok". But this is a thing of the past and all children are given equal care, rights, and importance by the modern parents.

Garos are a matrilineal society but are not to be mistaken to be matriarchal. While the property is owned by women, the men govern the society and domestic affairs and manage the property.							
								</p>
							</div>
							
								
							</div>
						</div>
						
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->
					
				
							
			@endsection