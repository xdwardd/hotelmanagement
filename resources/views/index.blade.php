<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">
   
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
      crossorigin="anonymous"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MyHotel</title>
  </head>

  <body id="home" class="scrollspy"> 
      <!--Navbar-->
      <div class="navbar-fixed">
          <nav class="light-blue">
              <div class="container">
                  <div class="wrapper">
                      <a href="#" class="brand-logo">MyHotel</a>
                      <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                          <i class="material-icons">menu</i>
                      </a>
                      <ul class="right hide-on-med-and-down">
                          <li>
                              <a href="#home">Home</a>
                          </li>
                          <li>
                              <a href="#rooms">Rooms</a>
                          </li>
                          <li>
                              <a href="#gallery">Gallery</a>
                          </li>
                          <li>
                              <a href="#book">Book Now</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
      </div>
      <ul class="sidenav" id="mobile-nav">
        <li>
            <a href="#home">Home</a>
        </li>
        <li>
            <a href="#rooms">Rooms</a>
        </li>
        <li>
            <a href="#gallery">Gallery</a>
        </li>
        <li>
            <a href="#book">Book Now</a>
        </li>
      </ul>
            <div class="container">
                @include('inc.material-msg')
            </div>
    
      <!--Section Slider-->
      <section class="slider">
            <ul class="slides">
                <li>
                    <img src="hotel/hotel2.jpg" alt="">
                    <div class="caption center-align">
                        <h2>Take Your Dream Vacation</h2>
                    </div>
                </li>
                <li>
                    <img src="hotel/resort3.jpg" alt="">
                    <div class="caption center-align">
                        <h2>Travel With Low Budget</h2>
                    </div>
                </li>
                <li>
                    <img src="hotel/hotel.jpg" alt="">
                    <div class="caption center-align">
                        <h2>Enjoy Every Moment</h2>
                    </div>
                </li>
            </ul>
      </section>
      <section class="section section-icons grey lighten-4 center">
        <div class="container">
              <div class="row">
                  <div class="col s12 m4">
                      <div class="card-panel">
                          <i class="material-icons large light-blue-text">restaurant_menu</i>
                          <h4>Eat</h4>
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, ut.</p>
                      </div>
                  </div>
                  <div class="col s12 m4">
                      <div class="card-panel">
                          <i class="material-icons large light-blue-text">thumb_up</i>
                          <h4>Enjoy</h4>
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, ut.</p>
                      </div>
                  </div>
                  <div class="col s12 m4">
                      <div class="card-panel">
                          <i class="material-icons large light-blue-text">hotel</i>
                          <h4>Stay Cheap</h4>
                          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, ut.</p>
                      </div>
                  </div>
              </div>
        </div>
    </section>
    <section id="rooms" class="section section-rooms scrollspy">
        <div class="container">
            <div class="row">
                <h4 class="center"><span class="light-blue-text">Available</span> Rooms</h4>
                    @if (count($rooms) > 0)
                        @foreach ($rooms as $room)
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/storage/cover_images/{{$room->cover_image}}" alt="">
                                    <span style="font-weight:bold" class="card-title">{{$room->price}}</span>
                                </div>
                                
                                <div class="card-content">
                                    <h5 class="center light-blue-text">{{$room->type}}</h5>
                                    <p style="font-weight: bolder">Room No. : {{$room->roomnum}}</p>
                                    <small>{{$room->body}}</small>
                                  
                                </div>                
                                    <a class="waves-effect waves-light light-blue btn" style="width: 100%; border-radius: 0%; border-radius: 0%" href="/show/{{$room->id}}">View Room</a>
                                
                            </div>
                        </div>
                        @endforeach
                        
                    @endif            
            </div>
        </div>
    </section>
    <section id="gallery" class="section section-gallery scrollspy">
        <div class="container">
          <h4 class="center">
            <span class="teal-text">Photo</span> Gallery
          </h4>
          <div class="row">
            <div class="col s12 m3">
              <img src="hotel/gallery1.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery2.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery3.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery4.jpg" alt="" class="materialboxed responsive-img">
            </div>
          </div>
    
          <div class="row">
            <div class="col s12 m3">
              <img src="hotel/gallery5.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery6.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery7.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery8.jpg" alt="" class="materialboxed responsive-img">
            </div>
          </div>
    
          <div class="row">
            <div class="col s12 m3">
              <img src="hotel/gallery9.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery10.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery11.jpg" alt="" class="materialboxed responsive-img">
            </div>
            <div class="col s12 m3">
              <img src="hotel/gallery12.jpg" alt="" class="materialboxed responsive-img">
            </div>
          </div>
        </div>
      </section>
      
    <section id="book" class="section section-book scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card-panel light-blue white-text center">
                          <i class="material-icons">email</i>
                          <h5>Contact Us For Booking</h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente optio veritatis quaerat quis! Iure amet esse provident illo quibusdam mollitia.
                          </p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header"> 
                          <h5>Location</h5>
                        </li>
                        <li class="collection-item">MyHotel Resort</li>
                        <li class="collection-item">Colon st, 123</li>
                        <li class="collection-item">Cebu City, Philippines</li>

                    </ul>
                </div>
                <div class="col s12 m6">
                  
                    <div class="card-panel grey lighten-3">

                     
                        <h5>Please fill out this form</h5>
                      {!!Form::open(['action' => ['BookController@store'], 'method' => 'POST'])!!}
                      <div class="input-field">
                          <i class="material-icons prefix">person</i>
                          {{Form::text('name', '',['placeholder' => "Name"])}}
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">email</i>
                          {{Form::text('contact', '', ['placeholder' => "Email / Phone No."])}}
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">event_note</i>
                          {{Form::text('arrival', '', ['placeholder'=> 'Arrival Date', 'id'=>'date', 'class' => 'datepicker'])}}
                      </div>
                      <div class="input-field">
                        <i class="material-icons prefix">event_note</i>
                        {{Form::text('departure', '', ['placeholder'=> 'Departure Date','id'=>'date', 'class' => 'datepicker'])}}
                        </div>
                      <div class="input-field">
                        <i class="material-icons prefix">house</i>
                          {{Form::text('roomnum', '',['placeholder' => 'Enter Room #'])}}
                      </div>
                        {{Form::submit('Book Now',['class' => 'light-blue btn', 'style' => 'width: 100%' ])}}

                      {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-follow light-blue darken-2 white-text center">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Follow MyHotel</h4>
                    <p>Follow us on social media for special offers</p>
                    <a href="#" class="white-text">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="#" class="white-text">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="#" class="white-text">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="#" class="white-text">
                        <i class="fab fa-google-plus fa-2x"></i>
                    </a>
                </div>
            </div>
            <p class="text-center">MyHotel Resort &copy; Edward Catapan</p>
        </div>
    </section>

      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
   <script>
      document.getElementById("message").style.display="block";
      setTimeout(function(){
      document.getElementById("message").style.display="none";
      }, 5000);
   
   </script>
   
  
 
    <script>
        //sidenav
        const sideNav = document.querySelector('.sidenav');
        M.Sidenav.init(sideNav, {});

        //slider
        const slider = document.querySelector('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 500,
            interval: 6000
        });
        const ss = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(ss, {});

        const mb = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(mb, {});

        const date = document.querySelectorAll('.datepicker');
        M.Datepicker.init(date, {
           
        });
    </script>
  </body>
</html>