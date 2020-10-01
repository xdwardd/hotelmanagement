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
                      <a href="/" class="brand-logo">MyHotel</a>  
              </div>
          </nav>
      </div>
     
        <h4 class="center">{{$room->type}}</h4>
      
       
        <div class="container">
            <div>
                <h6 style="font-weight: bolder" class="light-blue-text">Room No: {{$room->roomnum}}</h6>
            </div>
                
                    <section class="slider">
                        <ul class="slides">
                            <li>
                                <img src="/storage/cover_images/{{$room->cover_image}}" alt="">
                            </li>
                            <li>
                                <img src="/storage/cover_images/{{$room->related_image}}" alt="">
                            </li>
                        </ul>
                        </section>
        </div>
                <section>
                       <h5 class="center text-grey">Room Amenities</h5>
                       <div class="container">
                            <div class="row">
                                <div class="row">
                                   
                                    <div class="col s12 m6 l3"><span class="valign-wrapper"><i class="light-blue-text material-icons">airline_seat_individual_suite</i>1 Double or 2 Single Beds</span></div>
                                    <div class="col s12 m6 l3"><span class="valign-wrapper"><i class="light-blue-text material-icons">free_breakfast</i>Tea and Coffee</span></div>
                                    <div class="col s12 m6 l3"><span class="valign-wrapper"><i class="light-blue-text material-icons">local_dining</i>Free Breakfast</span></div>
                                    <div class="col s12 m6 l3"><span class="valign-wrapper"><i class="light-blue-text material-icons">rss_feed</i>Wifi</span></div>
                                    
                                  </div>
                                  <div class="row">
                                   
                                    <div class="col s12 m6 l3"><span class="valign-wrapper"><i class="light-blue-text material-icons">personal_video</i>Flat Screen TV</span></div>
                                    <div class="col s12 m6 l3"><span class="valign-wrapper"><i class="light-blue-text material-icons">phone</i>Telephone</span></div>
                                    <div class="col s12 m6 l3"><span class="valign-wrapper"><i class="light-blue-text material-icons">hot_tub</i>Bath Tub</span></div>
                                    <div class="col s12 m6 l3"><span class="valign-wrapper"><i class="light-blue-text material-icons">lock</i>Electronic Lock Key System</span></div>
                                    
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
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slider();
        });
    </script>
  </body>
</html>
      