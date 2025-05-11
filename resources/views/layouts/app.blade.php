<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>آما - بوت کمپ های برنامه نویسی</title>



  <!-- Favicon -->
  <link rel="icon" sizes="16x16" href="/assets/images/logo.webp" />

  <!-- inject:css -->
  <link rel="stylesheet" href="/assets/css/bootstrap-rtl.min.css" />
  <link rel="stylesheet" href="/assets/css/line-awesome.css" />
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="/assets/css/select2.min.css" />
  <link rel="stylesheet" href="/assets/css/fancybox.css" />
  <link rel="stylesheet" href="/assets/css/tooltipster.bundle.css" />
  <link rel="stylesheet" href="/assets/css/animated-headline.css" />
  <link rel="stylesheet" href="/assets/css/plyr.css">
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/style-rtl.css" />
  <!-- end inject -->


</head>

<body>
  <!-- start cssload-loader -->
  <div class="preloader">
    <div class="loader">
      <svg class="spinner" viewBox="0 0 50 50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
      </svg>
    </div>
  </div>
  <!-- end cssload-loader -->

  <!--======================================
        START HEADER AREA
    ======================================-->
  <header class="header-menu-area bg-white">
    <div class="header-menu-content pe-150px ps-150px bg-white">
      <div class="container-fluid">
        <div class="main-menu-content">
          <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
          <div class="row align-items-center">
            <div class="col-lg-2">
              <div class="logo-box">
                <a href="{{route('home')}}" class="logo logo-inline"><img src="/assets/images/persian-blue2.webp" alt="logo" /></a>
                
                <div class="user-btn-action d-flex align-items-center">

                  <a href="{{route('dashboard.home')}}" class="d-lg-none icon-element icon-element-sm shadow-sm me-2" data-toggle="tooltip"
                    data-placement="top" title="ورود / ثبت نام">
                    <i class="la la-user  "></i>
                  </a>
                  <div class="search-menu-toggle icon-element icon-element-sm shadow-sm me-2" data-toggle="tooltip"
                  data-placement="top" title="جستجو">
                  <i class="la la-search"></i>
                </div>
                  
                  <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                    data-toggle="tooltip" data-placement="top" title="منوی اصلی">
                    <i class="la la-bars"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col-lg-2 -->
            <div class="col-lg-10">
              <div class="menu-wrapper">
                <!-- end menu-category -->
                <form action="/bootcamps" method="get">
                  <div class="form-group mb-0">
                    <input class="form-control form--control ps-3" type="text" name="search"
                      placeholder="چی میخوای یاد بگیری؟ " value="{{request()->search}}" />

                    <button class="btn search-icon">
                        <span class="la la-search"></span>
                    </button>
                  </div>
                </form>
                <nav class="main-menu">
                  <ul>
                    <li>
                      <a href="{{route('home')}}"><i class="la la-home fs-12"></i> خانه</a>
                    </li>
                    <li>
                      <a href="{{route('bootcamps.index')}}"><i class="la la-code fs-12"></i> بوت کمپا</a>
                    </li>
                    {{-- <li>
                      <a href="{{route('blogs.index')}}"><i class="la la-pen fs-12"></i>  نوشته‌هامون</a>
                    </li> --}}
                    <li>
                      <a href="{{route('basket')}}"><i class="la la-shopping-basket fs-12"></i>  سبدت</a>
                    </li>
                    <li>
                      <a href="{{route('aboutus')}}"><i class="la la-graduation-cap fs-12"></i>  درباره آما </a>
                    </li>
                  </ul>
                  <!-- end ul -->
                </nav>
                <!-- end main-menu -->
                <div class="nav-right-button">
                  <a href="{{route('dashboard.home')}}" class="btn theme-btn d-none d-lg-inline-block"><i
                      class="la la-user-plus me-1"></i> ورود / ثبت نام</a>
                </div>
                <!-- end nav-right-button -->
              </div>
              <!-- end menu-wrapper -->
            </div>
            <!-- end col-lg-10 -->
          </div>
          <!-- end row -->
        </div>
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end header-menu-content -->
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
      <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip"
        data-placement="left" title="بستن منو">
        <i class="la la-times"></i>
      </div>
      <!-- end off-canvas-menu-close -->
      <ul class="generic-list-item off-canvas-menu-list pt-90px">
          <li>
            <a class="d-block" href="{{route('home')}}"><i class="me-2 la la-home fs-12"></i> خانه</a>
          </li>
          <li>
            <a class="d-block" href="{{route('bootcamps.index')}}"><i class="me-2 la la-code fs-12"></i> بوت کمپا</a>
          </li>
          {{-- <li>
            <a class="d-block" href="{{route('blogs.index')}}"><i class="me-2 la la-pen fs-12"></i>  نوشته‌هامون</a>
          </li> --}}
          <li>
            <a class="d-block" href="{{route('basket')}}"><i class="me-2 la la-shopping-basket fs-12"></i>  سبدت</a>
          </li>
          <li>
            <a class="d-block" href="{{route('home')}}#about"><i class="me-2 la la-graduation-cap fs-12"></i>  درباره آدا </a>
          </li>
      </ul>
      <div class="nav-right-button d-flex justify-content-center mt-5">
        <a href="{{route('dashboard.home')}}" class="btn theme-btn d d-inline-block"><i
            class="la la-user-plus me-1"></i> ورود / ثبت نام</a>
      </div>

    </div>
    <div class="mobile-search-form">
      <div class="d-flex align-items-center">
        <form method="get" action="/bootcamps" class="flex-grow-1 me-3">
          <div class="form-group mb-0">
            <input class="form-control form--control ps-3" type="text" name="search" placeholder="چی میخوای یاد بگیری؟؟"  value="{{request()->search}}"/>
            <button class="btn search-icon">
                <span class="la la-search"></span>
            </button>
          </div>
        </form>
        <div class="search-bar-close icon-element icon-element-sm shadow-sm">
          <i class="la la-times"></i>
        </div>
        <!-- end off-canvas-menu-close -->
      </div>
    </div>
    <!-- end mobile-search-form -->
    <div class="body-overlay"></div>
  </header>
  <!-- end header-menu-area -->
  <!--======================================
        END HEADER AREA
======================================-->
            


@yield('content', 'Default Content')




  <!-- ================================
         START FOOTER AREA
================================= -->
<section class="footer-area pt-100px">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 responsive-column-half">
          <div class="footer-item">
            <a href="index.html">
              <img src="/assets/images/persian-blue2.webp" alt="footer logo" class="footer__logo" />
              {{-- <a referrerpolicy='origin' target='_blank' href='https://trustseal.enamad.ir/?id=584524&Code=IHgLaIfLgYR2PurM2l0YvtKOzsK25TCe'><img referrerpolicy='origin' src='https://trustseal.enamad.ir/logo.aspx?id=584524&Code=IHgLaIfLgYR2PurM2l0YvtKOzsK25TCe' alt='' style='cursor:pointer' code='IHgLaIfLgYR2PurM2l0YvtKOzsK25TCe'></a> --}}
            </a>
            <ul class="generic-list-item pt-4">
              <li>
                <a href="mailto:support@wbsite.com">info@amacodecamp.ir</a>
              </li>
              <li>با ما در ارتباط باشید</li>
            </ul>
            <h3 class="fs-20 font-weight-semi-bold pt-4 pb-2">سوشال هامون</h3>
            <ul class="social-icons social-icons-styled">
              {{-- <li class="me-1 ms-0">
                <a href="#" class="facebook-bg"><i class="la la-facebook"></i></a>
              </li> --}}
              <li class="me-1 ms-0">
                <a href="https://wa.me/+989938383698" class="facebook-bg"><i class="la la-whatsapp"></i></a>
              </li>
              <li class="me-1 ms-0">
                <a href="https://instagram.com/@amacodecamp" class="instagram-bg"><i class="la la-instagram"></i></a>
              </li>
              <li class="me-1 ms-0">
                <a href="https://t.me/amacodecamp" class="linkedin-bg"><i class="la la-telegram"></i></a>
              </li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-3 responsive-column-half">
          <div class="footer-item">
            <h3 class="fs-20 font-weight-semi-bold pb-2">صفحات</h3>
            <div class="divider border-bottom-0"><span></span></div>
            <ul class="generic-list-item">
              <li>
                <a href="{{route('home')}}"><i class="la la-home fs-12"></i> خانه</a>
              </li>
              <li>
                <a href="{{route('bootcamps.index')}}"><i class="la la-code fs-12"></i> بوت کمپا</a>
              </li>
              {{-- <li>
                <a href="{{route('blogs.index')}}"><i class="la la-pen fs-12"></i>  نوشته‌هامون</a>
              </li> --}}
              <li>
                <a href="{{route('basket')}}"><i class="la la-shopping-basket fs-12"></i>  سبدت</a>
              </li>
              <li>
                <a href="{{route('home')}}#about"><i class="la la-graduation-cap fs-12"></i>  درباره آدا </a>
              </li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>

       
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-half">
          <div class="footer-item">
            <h3 class="fs-20 font-weight-semi-bold pb-2">بوت‌کمپ ها</h3>
            <div class="divider border-bottom-0"><span></span></div>
            <ul class="generic-list-item" id="bootcamps-footer">
              <li><a href="#">بک اند با گو لنگ</a></li>
              <li><a href="#">فرانت اند</a></li>
              <li><a href="#">سی پلاس پلاس</a></li>
              <li><a href="#">جاوا</a></li>
              <li><a href="#">جاوا اسکریپت</a></li>
              <li><a href="#">پایتون</a></li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-half">
          <div class="footer-item">
              
            <h3 class="fs-20 font-weight-semi-bold pb-2">درباره آما</h3>
            <div class="divider border-bottom-0"><span></span></div>
            <div class="mobile-app">
              <p class="pb-3 lh-24">
                آموزشگاه مجازی آما تشکیل شده از برنامه نویسان و مدرسان برترین دانشگاه های کشوره و با هدف ترویج کیفیت بسیار بالای آموزشی و تربیت برنامه نویس های مجرب کار خودشو شروع کرده
              </p>
            
            </div>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
    <div class="section-block"></div>
    <div class="copyright-content py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="">
            <p class="copy-desc">

              &copy; تمامی حقوق این سایت متعلق به
              <a href=".">آما کدکمپ</a>
              می‌باشد
            </p>
          </div>
          <!-- end col-lg-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end copyright-content -->
  </section>
  <!-- end footer-area -->
  <!-- ================================
          END FOOTER AREA
================================= -->

  <!-- start scroll top -->
  <div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
  </div>
  <!-- end scroll top -->

  <!-- template js files -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="/assets/js/jquery-3.7.1.min.js"></script>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/select2.min.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/isotope.js"></script>
  <script src="/assets/js/waypoint.min.js"></script>
  <script src="/assets/js/jquery.counterup.min.js"></script>
  <script src="/assets/js/fancybox.js"></script>
  <script src="/assets/js/datedropper.min.js"></script>
  <script src="/assets/js/emojionearea.min.js"></script>
  <script src="/assets/js/tooltipster.bundle.min.js"></script>
  <script src="/assets/js/animated-headline.js"></script>
  <script src="/assets/js/plyr.js"></script>
  <script src="/assets/js/jquery.lazy.min.js"></script>
  <script src="/assets/js/main-rtl.js"></script>
  <script>
    const API_URL = "{{ env('API_URL', 'http://localhost:8000') }}";
  </script>
  <script src="/assets/js/app.js"></script>

@hasSection ('customScripts')
  @yield('customScripts')
@else
    
@endif
</body>

</html>