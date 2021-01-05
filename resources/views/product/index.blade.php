@extends('layout.product_layout')

@section('content')


      <!-- service --> 
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Services </h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of <br>using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container margin-r-l">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="assets/images/1.jpg" class="fancybox" rel="ligthbox">
                        <img  src="assets/images/1.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="assets/images/1.jpg" class="fancybox" rel="ligthbox">Food</a>
                        </span>  
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="assets/images/2.jpg" class="fancybox" rel="ligthbox">
                        <img  src="assets/images/2.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="/ownerInfo" class=" btn " rel="ligthbox">Owner Info</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="assets/images/3.jpg" class="fancybox" rel="ligthbox">
                        <img  src="assets/images/3.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="{{ route('article.index')}}" class="btn" rel="ligthbox">Booking</a>
                        </span>
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="assets/images/4.jpg" class="fancybox" rel="ligthbox">
                        <img  src="assets/images/4.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="assets/images/4.jpg" class="fancybox" rel="ligthbox">Marketing</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="assets/images/5.jpg" class="fancybox" rel="ligthbox">
                        <img  src="assets/images/5.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="assets/images/5.jpg" class="fancybox" rel="ligthbox">Design</a>
                        </span> 
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <figure>
                        <a href="assets/images/6.jpg" class="fancybox" rel="ligthbox">
                        <img  src="assets/images/6.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="assets/images/6.jpg" class="fancybox" rel="ligthbox">Making Food</a>
                        </span>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->


@endsection