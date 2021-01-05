@extends('layout.product_layout')


@section('content')

<br>
      <!-- Testimonial -->
      <div id="testimonial" class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Contact Us</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div id="testimonial_slider" class="carousel slide banner-bg" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="assets/images/testimonial-img.png">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>Patrol due</h3>
                                 <span><i class="fa fa-quote-left"></i> ( foundery )<i class="fa fa-quote-right"></i></span>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  </p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="assets/images/testimonial-img.png">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>Dijel due</h3>
                                 <span><i class="fa fa-quote-left"></i> ( foundery )<i class="fa fa-quote-right"></i></span>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  </p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="third-slide" src="assets/images/testimonial-img.png">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>Luka due</h3>
                                 <span><i class="fa fa-quote-left"></i> ( foundery )<i class="fa fa-quote-right"></i></span>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  </p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimonial_slider" role="button" data-slide="prev"> <i class='fa fa-angle-right'></i></a> <a class="carousel-control-next" href="#testimonial_slider" role="button" data-slide="next"> <i class='fa fa-angle-left'></i></a> 
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>Contact Us</h3>
                     <form>
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Name" type="text" name="Name">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Phone" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" name="Email">
                           </div>
                           <div class="col-sm-12">
                              <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button class="send">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- end Testimonial --> 




@endsection