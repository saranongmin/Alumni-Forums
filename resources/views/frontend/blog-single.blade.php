	@extends('frontend.layouts.master')

@section('title', 'Blog-Single')

@section('content')
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Details Page				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Blog Details Page</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
			<!-- Start post-content Area -->
			<section class="post-content-area single-post-area">
				<div class="container">    
				        @foreach($blogs->chunk(2) as $items)
					<div class="row">
					 @foreach($items as $singleBlog)

						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								
								<div class="col-lg-12">
									<div class="feature-img">
										@if(file_exists(storage_path().'/app/public/blogs/'.$singleBlog->image ) && (!is_null($singleBlog->image)))
                                <img src="{{ asset('storage/blogs/'.$singleBlog->image) }}" alt="img" class="card-img-top" height="300px">
                            @endif
									</div>									
								</div>
								
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20">{{$singleBlog->title}}</h3>
									<p class="excert">
										{!! $singleBlog->description !!}
									</p>
									
									
								</div>
								
							</div>
							
						
									                                             				
							</div>
							@endforeach
						</div>
						
						  @endforeach
					</div>
					  
				</div>	
			</section>
			<!-- End post-content Area -->
			
		@endsection