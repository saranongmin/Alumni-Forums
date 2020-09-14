@extends('frontend.layouts.master')

@section('title', 'Dashboard')

@section('content')

				<!-- start banner Area -->
			<section class="banner-areas relative" id="home">
				<!-- <div class="overlay overlay-bg"></div>	 -->
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								Welcome to the Garo Community		
							</h1>
							
							
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area pb-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Culture</h4>
								</div>
								<div class="desc-wrap">
									<p>
										The Garos are one of the few remaining matrilineal societies.The individuals take their clan titles from their mothers.men and women enjoy  themselves with ornaments
									</p>
									<a href="{{route('garo-culture')}}">Join Now</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Festivals</h4>
								</div>
								<div class="desc-wrap">
									<p>
										The common and regular festivals are those connected with agricultural operations.Most Garo festivals are based on the agricultural cycle of crops.


									</p>
									<a href="{{route('garo-festivals')}}">Join Now</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Professions</h4>
								</div>
								<div class="desc-wrap">
									<p>
										The Garos rely on nature. For more than 4,000 years, the Garos have been practicing jhum cultivation. It was their main profession for feeding themselves.


									</p>
									<a href="{{route('garo-profession')}}">Join Now</a>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->

			<!-- Start info Area -->
			<section class="info-area pb-120">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid" src="{{asset('ui/frontend')}}/img/garo/about.jpg" alt="">
						</div>
						<div class="col-lg-6 info-area-right">
							<h1>Who we are
							</h1>
							<p>The Garos are an indigenous Tibeto-Burman ethnic group from the Indian subcontinent, notably found in the Indian states of Meghalaya, Assam, Tripura, Nagaland, and neighboring areas of Bangladesh, notably Mymensingh, Netrokona, Jamalpur, Sherpur and Sylhet, who call themselves A·chik Mande.</p>
							<br>
							<p>
								A·chik or Mande - the name "Garo" being given to them and used by non-Garos.They are the second-largest tribe in Meghalaya after the Khasi and comprise about a third of the local population. The Garos are one of the few remaining matrilineal societies in the world.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End info Area -->	

			

<!-- Start course-mission Area -->
			<section class="course-mission-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Story of Garo People</h1>
								<p>Who are in extremely love to know about Garo Cummunity.</p>
							</div>
						</div>
					</div>							
                    <div class="row">
                        <div class="col-md-6 accordion-left">

                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a href="">Language</a>
                                </dt>
                                <dd>
                                    The Garo language has dialects — A·beng or Am·beng, Matabeng, Atong, Me·gam, Matchi, Dual [Matchi-Dual], Ruga, Chibok, Chisak, Gara, Gan·ching [Gara-Gan·ching], A·we etc. In Bangladesh.
                                </dd>
                                <dt>
                                    <a href="">Religion</a>
                                </dt>
                                <dd>
                                    A large part of the Garo community follow Christianity,[4] with some rural pockets following traditional animist religion known as Songsarek and its practices.
                                </dd>
                                <dt>
                                    <a href="">Food and drink</a>
                                </dt>
                                <dd>
                                   The staple cereal food is rice. They also eat millet, maize, tapioca etc. Garos are very liberal in their food habits.
                                </dd>
                                <dt>
                                    <a href="">Music and dance</a>
                                </dt>
                                <dd>
                                    Group songs may include Ku·dare sala, Hoa ring·a, Injoka, Kore doka, Ajea, Doroa, Nanggorere goserong, Dim dim chong dading chong, Serejing, Boel sala etc.


                                </dd>                                    
                            </dl>
                            <!-- accordion 2 end-->
                        </div>
                        <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                        	<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=pL0SsmHxb4E"><img class="img-fluid mx-auto" src="{{asset('ui/frontend')}}/img/garo/play.png" alt=""></a>
                        </div>
                    </div>
				</div>	
			</section>
			<!-- End course-mission Area -->
					

			</section>
			<!-- End blog Area -->			
			

			
						
			@endsection