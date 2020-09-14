	@extends('frontend.layouts.master')

@section('title', 'Blog-Home')

@section('content')

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog  Page				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a>  </p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  

			<!-- Start top-category-widget Area -->
			<section class="top-category-widget-area pt-90 pb-90 ">
				<div class="container">
					<div class="row">	
					    @foreach($categories as $category)
	
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="{{ route('blogs.list', $category->id) }}">
								      <div class="thumb">
								  		 <!-- <img class="content-image img-fluid d-block mx-auto" src="{{asset('ui/frontend')}}/img/blog/cat-widget1.jpg" alt=""> -->
								  		   @if(file_exists(storage_path().'/app/public/categories/'.$category->image ) && (!is_null($category->image)))
                <img src="{{ asset('storage/categories/'.$category->image) }}" alt="img" 
                class="content-image img-fluid d-block mx-auto" style="height:200px">
            
            @endif
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase"> {{ $category->title }}</h4>
								        <span></span>								        
								        <p>{!!  $category->description !!}</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
						@endforeach
																	
					</div>
				</div>	
			</section>
			<!-- End top-category-widget Area -->
			
			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">

					<div class="row">

						<div class="col-lg-8 posts-list">
					            @foreach($blog->chunk(2) as $items)

							<div class="single-post row">
								  @foreach($items as $singleBlog)

								<div class="col-lg-3  col-md-3 meta-details">
									
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6">Posted By <a href="#">{!! $singleBlog->createdBy->name !!}</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">
				{{$singleBlog->created_at.  ' '.$singleBlog->created_at->diffForHumans() }}</a> 
											</p>						
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<!-- <img class="img-fluid" src="{{asset('ui/frontend')}}/img/blog/feature-img1.jpg" alt=""> -->
										 @if(file_exists(storage_path().'/app/public/blogs/'.$singleBlog->image ) && (!is_null($singleBlog->image)))
                                <img src="{{ asset('storage/blogs/'.$singleBlog->image) }}" alt="img" class="card-img-top" height="300px">
                            
                            @endif
									</div>
									<a class="posts-title" href="{{url('blog-single')}}"><h3>{{$singleBlog->title}}</h3></a>
									<!-- <p class="excert">
										{!! $singleBlog->description !!}
									</p -->
									
								</div>
							@endforeach

							</div>
						@endforeach
													
		                    
						</div>

						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Popular Posts</h4>
									<div class="popular-post-list">
							             @foreach($blogs as $blog)

										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												
                <img src="{{ asset('storage/blogs/'.$blog->image) }}" alt="img" class="img-fluid" style="height:100px;width:200px">

											</div>
											<div class="details">
												<a href="{{route('blog-single')}}"><h6>{{ $blog->title }}</h6></a>
											</div>
										</div>
											@endforeach														
									</div>
								</div>
													
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->
			
			@endsection