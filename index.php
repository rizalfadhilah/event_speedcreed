<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!-- reference examples at https://www.idangero.us/swiper/demos/#.Vl8kD9-rRHc -->
<section id="lab_video_slider">
  <div class="container-fluid">
    <div class="row">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">

      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">

          <div id="slide_one" class="swiper-slide">
            <div id="lab_video_text_overlay">
              <div class="container">
                <img src="img/logo-sc.png">
                

              </div>
            </div>
            <!-- VIDEO -->
            <video class="slider-video" width="100%" preload="auto" loop="" onloadedmetadata="this.muted = true" playsinline autoplay muted loop autoplay="false" style="visibility: visible; width: 100%;" poster="img/1.png">
              <source src="video/satu.mp4" type="video/mp4">
                <source src="video/satu.mp4" type="video/webm">
                  <source src="video/satu.mp4" type="video/ogg">
                  </video>
                  <!-- END VIDEO -->
                </div>

                <div id="slide_two" class="swiper-slide">
                  <div id="lab_video_text_overlay">
                    <div class="container">
                      <img src="img/logo-sc.png">

                    </div>
                  </div>
                  <!-- end #lab_overlay -->

                  <video class="slider-video" width="100%" preload="auto" loop="" autoplay="" style="visibility: visible; width: 100%;" poster="img/2.png">
                  </video>


                </div>

              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>


            <div class="header-content">
             <h2 style="text-align: center;">Event introduction</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             <div class="container section">
              <div class="row">
                <div class="col-md-6">
                  <h3 style="margin-bottom: 20px">
                    SpeedCreed
                  </h3>
                  <span class="data">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </span>
                </div>
                <div class="col-md-6">
                  <img src="img/spd.jpg" alt=""/>
                </div>
              </div>

            </div>
          </div>

          <div class="container" style="margin-top: 20px;">
            <div class="row">
              <div class="col-md-12 ml-auto col-xl-12 mr-auto">
                <center><h2>ITINERARY</h2></center>
                <!-- Nav tabs -->
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                          <i></i> Day 1
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                          <i></i> Day 2
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                          <i></i> Day 3
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                          <i></i> Day 4
                        </a>
                      </li>

                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- Tab panes -->
                    <div class="tab-content text-center">
                      <div class="tab-pane active" id="home" role="tabpanel">
                        <p style="text-align: left;">1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. (day1) <br>
                          2) Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
                          3) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                          4) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="tab-pane" id="profile" role="tabpanel">
                        <p style="text-align: left;">1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. (day2) <br>
                          2) Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
                          3) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                          4) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="tab-pane" id="messages" role="tabpanel">
                        <p style="text-align: left;">1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. (day3) <br>
                          2) Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
                          3) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                          4) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="tab-pane" id="settings" role="tabpanel">
                        <p style="text-align: left;">1) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. (day4) <br>
                          2) Lorem ipsum dolor sit amet, consectetur adipisicing elit <br>
                          3) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                          4) Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="img/img-article-body-section-bg2.png" alt="images not found">
              <div class="cover">
                <div class="container">
                  <div class="header-content">
                    <div class="line"></div>
                    <h2>SpeedCreed</h2>
                    <h1>Sport Car Community</h1>
                    <h4>Indonesia's Largest Sports Car Lifestyle</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="img/img-landing-header.png" alt="images not found">
              <div class="cover">
                <div class="container">
                  <div class="header-content">
                    <div class="line animated bounceInLeft"></div>
                    <h2>SpeedCreed</h2>
                    <h1>Sport Car Community</h1>
                    <h4>Indonesia's Largest Sports Car Lifestyle</h4>
                  </div>
                </div>
              </div>
            </div>    
          </div>                

          <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <center><h2>Thank You!!!</h2></center>
                </div>


              </div>
            </div>
          </div>



          <div class="container">

            <div class="row">

              <aside class="col-sm-6">
                <h3>Fees</h3>

                <article class="card">
                  <div class="card-body p-5">
                    <div class="form-group">
                      <label for="sel1">Listing</label>
                      <select class="form-control" id="sel1">
                        <option>1 Pax</option>
                        <option>2 Pax</option>
                        <option>3 Pax</option>
                        <option>4 Pax</option>
                      </select>
                    </div>
                    <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                          <i class="fa fa-credit-card"></i> Credit Card</a></li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                              <i class="fab fa-paypal"></i>  Paypal</a></li>
                              <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                  <i class="fa fa-university"></i>  Bank Transfer</a></li>
                                </ul>

                                <div class="tab-content">
                                  <div class="tab-pane fade show active" id="nav-tab-card">

                                    <form role="form">
                                      <div class="form-group">
                                        <label for="username">Full name (on the card)</label>
                                        <input type="text" class="form-control" name="username" placeholder="" required="">
                                      </div> <!-- form-group.// -->

                                      <div class="form-group">
                                        <label for="cardNumber">Card number</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" name="cardNumber" placeholder="">
                                          <div class="input-group-append">
                                            <span class="input-group-text text-muted">
                                              <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
                                              <i class="fab fa-cc-mastercard"></i> 
                                            </span>
                                          </div>
                                        </div>
                                      </div> <!-- form-group.// -->

                                      <div class="row">
                                        <div class="col-sm-8">
                                          <div class="form-group">
                                            <label><span class="hidden-xs">Expiration</span> </label>
                                            <div class="input-group">
                                              <input type="number" class="form-control" placeholder="MM" name="">
                                              <input type="number" class="form-control" placeholder="YY" name="">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                          <div class="form-group">
                                            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                            <input type="number" class="form-control" required="">
                                          </div> <!-- form-group.// -->
                                        </div>
                                      </div> <!-- row.// -->
                                      <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
                                    </form>
                                  </div> <!-- tab-pane.// -->
                                  <div class="tab-pane fade" id="nav-tab-paypal">
                                    <p>Paypal is easiest way to pay online</p>
                                    <p>
                                      <button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my Paypal </button>
                                    </p>
                                    <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                                  </div>
                                  <div class="tab-pane fade" id="nav-tab-bank">
                                    <p>Bank accaunt details</p>
                                    <dl class="param">
                                      <dt>BANK: </dt>
                                      <dd> THE WORLD BANK</dd>
                                    </dl>
                                    <dl class="param">
                                      <dt>Accaunt number: </dt>
                                      <dd> 12345678912345</dd>
                                    </dl>
                                    <dl class="param">
                                      <dt>IBAN: </dt>
                                      <dd> 123456789</dd>
                                    </dl>
                                    <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
                                  </div> <!-- tab-pane.// -->
                                </div> <!-- tab-content .// -->

                              </div> <!-- card-body.// -->
                            </article> <!-- card.// -->


                          </aside> <!-- col.// -->

                          <aside class="col-sm-6">
                            <h3>Pre-register form</h3>

                            <article class="card">
                              <div class="card-body p-5">

                                <div class="form-group">
                                  <label for="usr">Email</label>
                                  <input type="email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                  <label for="usr">Full Name</label>
                                  <input type="text" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                  <label for="usr">Mobile Phone</label>
                                  <input type="text" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                  <label for="limited">Unique Variant/Limited Edition</label>
                                  <textarea class="form-control" rows="5" id="limited"></textarea>
                                </div> <!-- form-group.// -->
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="sel1">Manufacture</label>
                                      <select class="form-control" id="sel1">
                                        <option></option>
                                        <option>Lamborghini</option>
                                        <option>Buggatti</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="sel1">Model</label>
                                      <select class="form-control" id="sel1">
                                        <option></option>
                                        <option>812 Superfast</option>
                                        <option>Portofino</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="sel1">Year</label>
                                      <select class="form-control" id="sel1">
                                        <option></option>
                                        <option>2019</option>
                                        <option>2018</option>
                                        <option>2017</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-12">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Manufacture" name="">
                                        <input type="text" class="form-control" placeholder="Model" name="">
                                        <input type="text" class="form-control" placeholder="Year" name="">
                                      </div>
                                    </div>
                                  </div>
                               


                                </div> <!-- row.// -->
                                <button class="subscribe btn btn-primary btn-block" data-toggle="modal" data-target="#myModal" type="button"> Register  </button>


                              </div> <!-- card-body.// -->
                            </article> <!-- card.// -->


                          </aside> <!-- col.// -->
                        </div> <!-- row.// -->

                      </div> 

                      <section class="contact pt-100 pb-100" id="contact">
                       <div class="container">
                        <div class="row">
                         <div class="col-xl-6 mx-auto text-center">
                          <div class="section-title mb-100">
                            <h4>Contact</h4>
                          </div>
                        </div>
                      </div>
                      <div class="row text-center">
                        <div class="col-md-8">
                         <form action="#" class="contact-form">
                          <div class="row">
                           <div class="col-xl-6">
                            <input type="text" placeholder="name">
                          </div>
                          <div class="col-xl-6">
                            <input type="text" placeholder="email">
                          </div>
                          <div class="col-xl-6">
                            <input type="text" placeholder="subject">
                          </div>
                          <div class="col-xl-6">
                            <input type="text" placeholder="telephone">
                          </div>
                          <div class="col-xl-12">
                            <textarea placeholder="message" cols="30" rows="10"></textarea>
                            <input type="submit" id="kirim" value="send message">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-4">
                     <div class="single-contact">
                      <h5>Address</h5>
                      <p>Jakarta, Indonesia</p>
                    </div>
                    <div class="single-contact">
                      <h5>Phone</h5>
                      <p>(+1) 2117 397 7100</p>
                    </div>
                    <div class="single-contact">
                      <h5>Email</h5>
                      <p>info@speedcreed.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <script type="text/javascript">
              $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                dots:false,
                nav:true,
                mouseDrag:false,
                autoplay:true,
                animateOut: 'slideOutUp',
                responsive:{
                  0:{
                    items:1
                  },
                  600:{
                    items:1
                  },
                  1000:{
                    items:1
                  }
                }
              });
            </script>
            <!-- Swiper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>
            
            <!-- Initialize Swiper -->
            <script>
              var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 0,
                loop: true,
                effect: 'slide',
                longSwipes: true,
                autoplay:20000,
                autoplayDisableOnInteraction:true,
              });


              $(".swiper-container").mouseenter(function(){
                swiper.stopAutoplay();
              });

              $(".swiper-container").mouseleave(function(){
                swiper.startAutoplay();
              });
            </script>

          </div>
          <!-- end .row -->
        </div>
        <!-- end .container-->
      </div>
      <!-- end #section -->
    </section>