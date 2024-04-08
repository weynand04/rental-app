<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Rental Mobil | Welcome</title>
      <link rel="shortcut icon" href="{{ asset('template/homepage/assets/images/fav.png') }}" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="{{ asset('template/homepage/assets/images/fav.png') }}">
      <link rel="stylesheet" href="{{ asset('template/homepage/assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('template/homepage/assets/css/style.css') }}" />
   </head>
   <body>
      <header class="head">
         <div class="logo border-bottom">
            <img class="w-100" src="{{ asset('template/homepage/assets/images/logo.jpg') }}" alt="" />
            <a class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
            </a>
         </div>
         <div id="navbarNav" class="navcol pt-0 d-none d-lg-block">
            <ul>
               <li class="border-bottom"><a href="index.html"><i class="bi  bi-house-door fs-6 me-2"></i> Home</a></li>
               <li class="border-bottom"><a href="about.html"><i class="bi me-2 fs-6 bi-info-square"></i> About Us</a></li>
               <li class="border-bottom"><a href="contact.html"><i class="bi me-2 bi-chat-left-dots"></i> Contact Us</a></li>
            </ul>
         </div>
      </header>
      <div  class="main-content">
         <div class="nav-bar sticky-top-xl bg-white shadow-sm w-100 p-3">
            <div class="row">
               <div class="col-md-5">
                  <div class="input-group mb-0">
                     <input type="text" class="form-control border-end-0 mb-0" placeholder="Search Apps" aria-label="Recipient's username" aria-describedby="basic-addon2">
                     <span class="input-group-text sit border-start-0" id="basic-addon2"><i class="bi bi-search"></i></span>
                  </div>
               </div>
               <div class="col-md-3"></div>
               <div class="col-md-4 text-end">
                  <div class="dropdown pt-2">
                     <a class="cp pt-4 fw-bolder fs-8 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                     Vinoth Basker
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">My Downloads</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-container p-2 p-xl-4">
            @yield('content')
         </div>
      </div>
      <script src="{{ asset('template/homepage/assets/js/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('template/homepage/assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('template/homepage/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('template/homepage/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
      <script src="{{ asset('template/homepage/assets/plugins/testimonial/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('template/homepage/assets/js/script.js') }}"></script>
   </body>
</html>
