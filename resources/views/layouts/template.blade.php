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
      <title>romofyi</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset(' css/bootstrap.min.css ')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset(' css/style.css ')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset(' css/responsive.css ')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset(' images/fevicon.png ')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset(' css/jquery.mCustomScrollbar.min.css ')}}">
      <!-- Tweaks for older IEs-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset(' images/loading.gif ')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_top d_none1">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <ul class="conta_icon ">
                           <li><a href="#"><img src="{{ asset(' images/call.png ')}}" alt="#"/>Call us: 0126 - 922 - 0162</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <ul class="social_icon">
                           <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <div class="se_fonr1">
                           <form action="#" >
                              <div class="select-box">
                                 <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                                 <select id="select-box1" class="select">
                                    <option value="Choice 1">English</option>
                                    <option value="Choice 1">Falkla</option>
                                    <option value="Choice 2">Germa</option>
                                    <option value="Choice 3">Neverl</option>
                                 </select>
                              </div>
                           </form>
                           <span class="time_o"> Open hour: 8.00 - 18.00</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4">
                        <ul class="conta_icon d_none1">
                           <li><a href="#"><img src="{{ asset(' images/email.png ')}}" alt="#"/> demo@gmail.com</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4">
                        <a class="logo" href="#"><img src="{{ asset(' images/logo.png ')}}" alt="#"/></a>
                     </div>
                     <div class="col-md-4">
                        <ul class="right_icon d_none1">
                           <li><a href="#"><img src="{{ asset(' images/shopping.png ')}}" alt="#"/></a> </li>
                           <a href="#" class="order">Order Now</a> 
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="products.html">Products</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="fashion.html">Fashion</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="news.html">News</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-4">
                        <div class="search">
                           <form action="/action_page.php">
                              <input class="form_sea" type="text" placeholder="Search" name="search">
                              <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> Romofyi </span> <br>Trands 2019</h1>
                     <p>A huge fashion collection for ever </p>
                     <a class="read_more" href="#">Shop now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     <figure><img src="{{ asset(' images/ban_img.png ')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- six_box section -->
      <div class="six_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="{{ asset('  images/shoes.png ')}}" alt="#"/></i>
                     <span>Shoes</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="{{ asset(' images/underwear.png ')}}" alt="#"/></i>
                     <span>underwear</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="{{ asset(' images/pent.png ')}}" alt="#"/></i>
                     <span>Pante & socks</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="{{ asset(' images/t_shart.png ')}}" alt="#"/></i>
                     <span>T-shirt & tankstop</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="{{ asset(' images/jakit.png ')}}" alt="#"/></i>
                     <span>cardigans & jumpers</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="{{ asset(' images/helbet.png ')}}" alt="#"/></i>
                     <span>Top & hat</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end six_box section -->
      <!-- project section -->
      @yield('content')
      <!-- end three_box section -->

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>INFORMATION </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>MY ACCOUNT </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>ABOUT  </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>CONTACTS  </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset(' js/jquery.min.js')}}"></script>
      <script src="{{ asset(' js/popper.min.js ')}}"></script>
      <script src="{{ asset(' js/bootstrap.bundle.min.js ')}}"></script>
      <script src="{{ asset(' js/jquery-3.0.0.min.js ')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset(' js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>
      <script src="{{ asset(' js/custom.js ')}}"></script>
   </body>
</html>

