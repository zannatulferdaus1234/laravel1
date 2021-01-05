
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Wise</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('')}}assets/images/fevicon.png" type="{{asset('')}}assets/image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('')}}assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="/product">Wise</a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li class="{{ Request::is('product') ? 'active' :''}}"> <a href="{{route('product.index')}}">Home</a> </li>
                              <li class="{{ Request::is('about*') ? 'active' :''}}"> <a href="/about">About</a> </li>
                              <li class="{{ Request::is('contact*') ? 'active' :''}}"> <a href="/contact">Contact us</a> </li>
                              <li class="mean-last"> <a href="#"><img src="{{asset('')}}assets/images/search_icon.png" alt="#" /></a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->




      @yield('content')

      

      <!--  footer --> 
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Address</h3>
                        <i><img src="{{asset('')}}assets/icon/3.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Menus</h3>
                        <i><img src="{{asset('')}}assets/icon/2.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Useful Linkes</h3>
                        <i><img src="{{asset('')}}assets/icon/1.png">Locations</i>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Social Media </h3>
                        <ul class="contant_icon">
                           <li><img src="{{asset('')}}assets/icon/fb.png" alt="icon"/></li>
                           <li><img src="{{asset('')}}assets/icon/tw.png" alt="icon"/></li>
                           <li><img src="{{asset('')}}assets/icon/lin (2).png" alt="icon"/></li>
                           <li><img src="{{asset('')}}assets/icon/instagram.png" alt="icon"/></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                     <div class="address">
                        <h3>Newsletter </h3>
                        <input class="form-control" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit-btn">Subscribe</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="{{asset('')}}assets/js/jquery.min.js"></script> 
      <script src="{{asset('')}}assets/js/popper.min.js"></script> 
      <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script> 
      <script src="{{asset('')}}assets/js/jquery-3.0.0.min.js"></script> 
      <script src="{{asset('')}}assets/js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="{{asset('')}}assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="{{asset('')}}assets/js/custom.js"></script>
      <script src="{{asset('')}}assets/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>




















