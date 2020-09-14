@extends('frontend.layouts.master')

@section('title', 'Dashboard')

@section('content')

                <!-- start banner Area -->
            <section class="banner-area relative" id="home">
                <div class="container">
                    <div class="row fullscreen d-flex align-items-center justify-content-between">
                        <div class="banner-content col-lg-9 col-md-12">
                            <h1 class="text-uppercase">
                                Alumni are the heart of University      
                            </h1>
                            <p class="pt-10 pb-10">
                                
                            </p>
                            <a href="{{route('login')}}" class="primary-btn text-uppercase">Get Started</a>
                        </div>                                      
                    </div>
                </div>                  
            </section>
            <!-- End banner Area -->

            
                    
            <!-- Start popular-course Area -->
            <section class="popular-course-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Most Popular Events</h1>
                                
                            </div>
                        </div>
                    </div>                      
                    <div class="row">
                        <div class="active-popular-carusel">
                            @foreach($events as $event)
                            <div class="single-popular-carusel">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>  
       
        @if(file_exists(storage_path().'/app/public/events/'.$event->image ) && (!is_null($event->image)))
        <img src="{{ asset('storage/events/'.$event->image) }}" alt="img" class="img-fluid" style="height:200px">
                            @endif

                                    </div>
                                                                     
                                </div>
                                <div class="details">
                                    <a href="#">
                                        <h4>{{$event->name}}
                                        </h4>
                                    </a>
                                </div>
                            </div>  
                            @endforeach
                                               
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End popular-course Area -->
            

            <!-- Start search-course Area -->
       <!--      <section class="search-course-area relative">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 search-course-left">
                            <h1 class="text-black">Alumni are the voice of Campus</h1>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                            </p>
                            <div class="row details-content">
                                <div class="col single-detials">
                                    <span class="lnr lnr-graduation-hat"></span>
                                    <a href="#"><h4>Expert Instructors</h4></a>     
                                    <p>
                                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                                    </p>                        
                                </div>
                                <div class="col single-detials">
                                    <span class="lnr lnr-license"></span>
                                    <a href="#"><h4>Certification</h4></a>      
                                    <p>
                                        Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                                    </p>                        
                                </div>                              
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 search-course-right section-gap">
                            <form class="form-wrap" action="#">
                                <h4 class="text-black pb-20 text-center mb-30">

Be a Part of Alumni Association</h4>        
                                <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >

                                <input type="phone" class="form-control" name="phone" placeholder="Your Batch Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Batch Number'" >
                                <input type="phone" class="form-control" name="phone" placeholder="Your Graduation Year" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Graduation Year'" >

                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
                                <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
                                <input type="phone" class="form-control" name="phone" placeholder="Your Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Address'" >
                                <div class="form-select" id="service-select">
                                    <select>
                                        <option datd-display="">Select Department</option>
                                        <option value="1">SWE</option>
                                        <option value="2">CSE</option>
                                        <option value="3">BBA</option>
                                        <option value="4">EEE</option>
                                        <option value="1">ENG</option>
                                        <option value="2">MCT</option>
                                        <option value="3">LLB</option>
                                        <option value="4">ETE</option>
                                    </select>
                                </div>  
                                                                
                                <button class="primary-btn text-uppercase">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>  
            </section> -->
            <!-- End search-course Area -->
            
        
            <!-- Start review Area -->
            <section class="review-area section-gap relative">
                <div class="overlay overlay-bg"></div>
                <h2>Testimonial & Notable Alumni</h2><br>
                        <p>Our alumni are our priority. we believe in providing best support to them.</p> <br>
                <div class="container">             
                    <div class="row">

                        <div class="active-review-carusel">
                            
                            
                            
    
                            <div class="single-review item">
                                <img src="{{asset('storage/profiles/t1.jpg')}}" alt="">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Md. Sanzidul Islam</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
                                    I will always be grateful for all the support and help that I have received from everybody.
                                </p>
                            </div>
                            <div class="single-review item">
                                <img src="{{asset('storage/profiles/t5.jpg')}}" alt="">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Fazle Rabby</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <p>
It's really amazing to share my heartiest gratefulness towards my beloved University as DIU has excellently supported me to be qualified in the international corporate market.                             </p>
                            </div>
                            <div class="single-review item">
                                <img src="{{ asset('storage/profiles/t6.png')}}"  style ="height:120px" alt="">
                                <div class="title justify-content-start d-flex">
                                    <a href="#"><h4>Elura Chiran</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                                <p>
                                    Not only has engaging with the center allowed me to give back a little to the university that gave me so much, but it's introduced me to young professionals with a vast array of diversity and a great deal of potential
                                </p>
                            </div>
                            <div class="single-review item">
                                <img src="{{asset('ui/frontend')}}/img/t3.jpg" alt="">
                                <div class="title justify-content-start d-flex">

                                    <a href="#"><h4>Sohel Arman</h4></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                </div>
                                <p>
It's really amazing to share my heartiest gratefulness towards my beloved University as DIU has excellently supported me to be qualified in the international corporate market.                             </p>
                            </div>                                                                                                              
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End review Area -->    
            
            <!-- Start cta-one Area -->
            <section class="cta-one-area relative section-gap">
                <div class="container">
                    <div class="overlay overlay-bg"></div>
                    <div class="row justify-content-center">
                        @foreach($jobs as $job)
                        <div class="wrap">
                            <h1 class="text-white">{{$job->title}}</h1>
                            <p>
                                {{$job->job_type}}
                            </p>
                            <a class="primary-btn wh" href="{{route('jobapplies')}}">Apply for the post</a>                               
                        </div>   
                        @endforeach               
                    </div>
                </div>  
            </section>
            <!-- End cta-one Area -->

            <!-- Start blog Area -->
            <section class="blog-area section-gap" id="blog">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Latest posts from our Alumni</h1>
                                <p>A blog is only as interesting as the interest shown in others.</p>
                            </div>
                        </div>
                    </div>                  
                    <div class="row">
                                    @foreach($blogs as $blog)

                        <div class="col-lg-3 col-md-6 single-blog">

                            <div class="thumb">
                              
                               @if(file_exists(storage_path().'/app/public/blogs/'.$blog->image ) && (!is_null($blog->image)))
                                <img src="{{ asset('storage/blogs/'.$blog->image) }}" alt="img" class="img-fluid" >
                            @endif                         
                            </div>
                            <p class="meta">{{$blog->created_at.  ' '.$blog->created_at->diffForHumans() }} |  Posted By : {!! $blog->createdBy->name !!}</a></p>
                            <a href="{{route('blog-single')}}">
                                <h5>{{$blog->title}}</h5>
                            </a>
                           
                                 
                        </div>
                        @endforeach
                      
                    </div>

                </div>  
            </section>
            <!-- End blog Area -->          
            

            
                        
            @endsection