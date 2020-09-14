<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('ui/frontend') }}/assets/images/fav.jpg">
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend') }}/assets/css/style.css" />
</head>

<body>

			
       <!-- Section: Team v.2 -->
<div class="container-fluid overcover">
        <div class="container profile-box">
           <div class="cover-image row">
               <img src="{{ asset('ui/frontend') }}/assets/images/bloogs-6.jpg" alt="">
           </div>
            <div class="row">
@foreach($profiles as $profile)
                <div class="col-lg-8 col-md-7 detail-px no-padding">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a felis aliquam justo placerat mattis in quis felis. Sed pulvinar egestas mollis. Nullam mattis, justo id viverra bibendum, magna erat venenatis lacus, quis viverra nisi urna et lacus. Maecenas sodales viverra mi quis dictum. Nam mollis vel metus nec sollicitudin</p>
                    
                    <h3 class="mth3">Profile</h3>
                    <div class="fx-ro">
                        <div class="dat">
                            
                        </div>
                        <div class="detail">
                          <b>Graduation Year {{$profile->graduation_year}}</b>
                        </div>
                    </div>
                    <div class="fx-ro">
                        <div class="dat">
                          
                        </div>
                        <div class="detail">
                            <b>Department Name {{$profile->department}}</b>
                            
                        </div>
                    </div>
                    <div class="fx-ro">
                        <div class="dat">
                            
                        </div>
                        <div class="detail">
                            <b>Batch Id {{$profile->batch_id}}</b>
                        </div>
                    </div>
                    
                    <h3 class="mth3">Career History</h3>
                    
                    <div class="fx-ro">
                        <div class="dat">
                            2018
                        </div>
                        <div class="detail">
                            <b>University of California</b>
                            <p>Los Angels, Calfornia</p>
                        </div>
                    </div>
                    
                    <div class="fx-ro">
                        <div class="dat">
                            2016
                        </div>
                        <div class="detail">
                            <b>Masters Arts Club</b>
                            <p>Londan United Kingdom</p>
                        </div>
                    </div>
                    
                    <div class="fx-ro">
                        <div class="dat">
                            2011
                        </div>
                        <div class="detail">
                            <b>Abraham High School</b>
                            <p>Londan United Kingdom</p>
                        </div>
                    </div>
                    
                    <h3 class="mth3">Expertise</h3>
                    
                    <ul class="exrts">
                        <li>Elementry Sports</li>
                        <li>Football Referee</li>
                        <li>Coaching & Assistant</li>
                        <li>Football Coaching</li>
                        <li>Debate Coaching</li>
                        <li>Debate Assisting</li>
                        <li>Maths Tutor</li>
                        <li>Science Tutor</li>
                        <li>Freedom Speech</li>
                        <li>Wood Workshop</li>
                        <li>Coaching</li>
                        <li>Marathon Race</li>
                    </ul>
                    
                </div>
                <div class="col-lg-4 col-md-5 leftgh">
                    <div class="img-box">
@if(file_exists(storage_path().'/app/public/profiles/'.$profile->image ) && (!is_null($profile->image)))
               <img src="{{ asset('storage/profiles/'.$profile->image) }}">
            
            @endif                    </div>
                    <div class="name-det">
                        
                   
                     <h2>{{$profile->name}}</h2>
                     <h2>{{$profile->batch_id}} Batch</h2>

                     <h3>Contact</h3>
                     
                     <p>Mobile {{$profile->phone}}</p>
                     
                     <p>{{$profile->address}}</p>
                     
                     <p>{{$profile->email}}</p>
                     
                     <h3>Social Media</h3>
                     
                     <p>fb.com/andrewrobertson</p>
                     <p>twitter@andrewrobertson</p>
                     <p>instagram@andrewrobertson</p>
                     <p>pintrest@andrewrobertson</p>
                   
                     
                     
                      <h3>hobbies</h3>
                      
                      <ul class="hoby row no-margin">
                            <li><i class="fas fa-pencil-alt"></i> <br> Writing</li>
                            <li><i class="fas fa-bicycle"></i> <br> Cycling</li>
                            <li><i class="fas fa-futbol"></i> <br> Football</li>
                            <li><i class="fas fa-film"></i><br> Movies</li>
                            <li><i class="fas fa-plane-departure"></i> <br>Travel</li>
                            <li><i class="fas fa-gamepad"></i> <br> Games</li>
                        </ul>
                        
                    </div>
                    
                   
                     
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
@push('script')
<script src="{{ asset('ui/frontend') }}/assets/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('ui/frontend') }}/assets/js/popper.min.js"></script>
<script src="{{ asset('ui/frontend') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('ui/frontend') }}/assets/js/script.js"></script>
@endpush

</html>








