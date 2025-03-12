<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="TechyDevs" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>آما - بوت کمپ های برنامه نویسی</title>



  <!-- Favicon -->
  <link rel="icon" sizes="16x16" href="/assets/images/favicon.png" />

  <!-- inject:css -->
  <link rel="stylesheet" href="/assets/css/bootstrap-rtl.min.css" />
  <link rel="stylesheet" href="/assets/css/line-awesome.css" />
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="/assets/css/select2.min.css" />
  <link rel="stylesheet" href="/assets/css/fancybox.css" />
  <link rel="stylesheet" href="/assets/css/tooltipster.bundle.css" />
  <link rel="stylesheet" href="/assets/css/animated-headline.css" />
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
                <a href="index.html" class="logo logo-inline"><img src="/assets/images/logo-inline.png" alt="logo" /></a>
                <div class="user-btn-action">
                  <div class="search-menu-toggle icon-element icon-element-sm shadow-sm me-2" data-toggle="tooltip"
                    data-placement="top" title="جستجو">
                    <i class="la la-search"></i>
                  </div>
                  <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm me-2"
                    data-toggle="tooltip" data-placement="top" title="Category menu">
                    <i class="la la-th-large"></i>
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
                      placeholder="چی میخوای یاد بگیری؟ " />

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
                    <li>
                      <a href="{{route('blogs.index')}}"><i class="la la-pen fs-12"></i>  نوشته‌هامون</a>
                    </li>
                    <li>
                      <a href="{{route('basket')}}"><i class="la la-shopping-basket fs-12"></i>  سبدت</a>
                    </li>
                    <li>
                      <a href="{{route('home')}}#about"><i class="la la-graduation-cap fs-12"></i>  درباره آدا </a>
                    </li>
                  </ul>
                  <!-- end ul -->
                </nav>
                <!-- end main-menu -->
                <div class="nav-right-button">
                  <a href="admission.html" class="btn theme-btn d-none d-lg-inline-block"><i
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
          <a href="#">Home</a>
          <ul class="sub-menu">
            <li><a href="index.html">Home One</a></li>
            <li><a href="home-2.html">Home Two</a></li>
            <li><a href="home-3.html">Home Three</a></li>
            <li>
              <a href="home-4.html">Home four <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">courses</a>
          <ul class="sub-menu">
            <li><a href="course-grid.html">course grid</a></li>
            <li>
              <a href="course-list.html">course list <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li>
              <a href="course-left-sidebar.html">left sidebar
                <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li>
              <a href="course-right-sidebar.html">right sidebar
                <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li><a href="course-details.html">course details</a></li>
            <li><a href="lesson-details.html">lesson details</a></li>
            <li><a href="my-courses.html">My courses</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Student</a>
          <ul class="sub-menu">
            <li><a href="student-detail.html">student detail</a></li>
            <li><a href="student-quiz.html">take quiz</a></li>
            <li><a href="student-quiz-results.html">quiz results</a></li>
            <li>
              <a href="student-quiz-result-details.html">quiz details</a>
            </li>
            <li>
              <a href="student-quiz-result-details-2.html">quiz details 2</a>
            </li>
            <li>
              <a href="student-path.html">path details
                <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li>
              <a href="student-path-assessment.html">Skill Assessment</a>
            </li>
            <li>
              <a href="student-path-assessment-result.html">Skill result</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">pages</a>
          <ul class="sub-menu">
            <li>
              <a href="dashboard.html">dashboard <span class="ribbon">Hot</span></a>
            </li>
            <li><a href="about.html">about</a></li>
            <li><a href="teachers.html">Teachers</a></li>
            <li><a href="teacher-detail.html">Teacher detail</a></li>
            <li>
              <a href="careers.html">careers <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li>
              <a href="career-details.html">career details
                <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li>
              <a href="categories.html">categories <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li>
              <a href="terms-and-conditions.html">Terms & conditions
                <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li>
              <a href="privacy-policy.html">privacy policy
                <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li>
              <a href="for-business.html">for business
                <span class="ribbon ribbon-blue-bg">New</span></a>
            </li>
            <li><a href="become-a-teacher.html">become an instructor</a></li>
            <li><a href="faq.html">FAQs</a></li>
            <li><a href="admission.html">admission</a></li>
            <li><a href="gallery.html">gallery</a></li>
            <li><a href="pricing-table.html">pricing tables</a></li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="sign-up.html">sign-up</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="recover.html">recover</a></li>
            <li><a href="shopping-cart.html">cart</a></li>
            <li><a href="checkout.html">checkout</a></li>
            <li><a href="error.html">page 404</a></li>
          </ul>
        </li>
        <li>
          <a href="#">blog</a>
          <ul class="sub-menu">
            <li><a href="blog-full-width.html">blog full width </a></li>
            <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
            <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
            <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
            <li><a href="blog-single.html">blog detail</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="mobile-search-form">
      <div class="d-flex align-items-center">
        <form method="post" class="flex-grow-1 me-3">
          <div class="form-group mb-0">
            <input class="form-control form--control ps-3" type="text" name="search" placeholder="چی میخوای یاد بگیری؟؟" />
            <span class="la la-search search-icon"></span>
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
              {{-- <img src="/assets/images/logo.png" alt="footer logo" class="footer__logo" /> --}}
              {{-- <a referrerpolicy='origin' target='_blank' href='https://trustseal.enamad.ir/?id=584524&Code=IHgLaIfLgYR2PurM2l0YvtKOzsK25TCe'><img referrerpolicy='origin' src='https://trustseal.enamad.ir/logo.aspx?id=584524&Code=IHgLaIfLgYR2PurM2l0YvtKOzsK25TCe' alt='' style='cursor:pointer' code='IHgLaIfLgYR2PurM2l0YvtKOzsK25TCe'></a> --}}
            </a>
            <ul class="generic-list-item pt-4">
              <li><a href="tel:+1631237884">+163 123 7884</a></li>
              <li>
                <a href="mailto:support@wbsite.com">support@website.com</a>
              </li>
              <li>Melbourne, Australia, 105 South Park Avenue</li>
            </ul>
            <h3 class="fs-20 font-weight-semi-bold pt-4 pb-2">نحن على</h3>
            <ul class="social-icons social-icons-styled">
              <li class="me-1 ms-0">
                <a href="#" class="facebook-bg"><i class="la la-facebook"></i></a>
              </li>
              <li class="me-1 ms-0">
                <a href="#" class="twitter-bg"><i class="la la-twitter"></i></a>
              </li>
              <li class="me-1 ms-0">
                <a href="#" class="instagram-bg"><i class="la la-instagram"></i></a>
              </li>
              <li class="me-1 ms-0">
                <a href="#" class="linkedin-bg"><i class="la la-linkedin"></i></a>
              </li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-half">
          <div class="footer-item">
            <h3 class="fs-20 font-weight-semi-bold pb-2">شركة</h3>
            <div class="divider border-bottom-0"><span></span></div>
            <ul class="generic-list-item">
              <li><a href="#">معلومات عنا</a></li>
              <li><a href="#">اتصل بنا</a></li>
              <li><a href="#">يصبح مدرسا</a></li>
              <li><a href="#">الدعم</a></li>
              <li><a href="#">أسئلة وأجوبة</a></li>
              <li><a href="#">مدونة او مذكرة</a></li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-half">
          <div class="footer-item">
            <h3 class="fs-20 font-weight-semi-bold pb-2">الدورات</h3>
            <div class="divider border-bottom-0"><span></span></div>
            <ul class="generic-list-item">
              <li><a href="#">تطوير الشبكة</a></li>
              <li><a href="#">القرصنة</a></li>
              <li><a href="#">تعلم PHP</a></li>
              <li><a href="#">الانكليزية المحكية</a></li>
              <li><a href="#">سيارة ذاتية القيادة</a></li>
              <li><a href="#">جامعي القمامة</a></li>
            </ul>
          </div>
          <!-- end footer-item -->
        </div>
        <!-- end col-lg-3 -->
        <div class="col-lg-3 responsive-column-half">
          <div class="footer-item">
            <h3 class="fs-20 font-weight-semi-bold pb-2">تحميل التطبيق</h3>
            <div class="divider border-bottom-0"><span></span></div>
            <div class="mobile-app">
              <p class="pb-3 lh-24">
                قم بتنزيل تطبيق الهاتف المحمول الخاص بنا وتعلم أثناء التنقل.
              </p>
              <a href="#" class="d-block mb-2 hover-s"><img src="/assets/images/appstore.png" alt="App store"
                  class="img-fluid" /></a>
              <a href="#" class="d-block hover-s"><img src="/assets/images/googleplay.png" alt="Google play store"
                  class="img-fluid" /></a>
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
          <div class="col-lg-6">
            <p class="copy-desc">
              &copy; 2021 Aduca. All Rights Reserved. by
              <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
            </p>
          </div>
          <!-- end col-lg-6 -->
          <div class="col-lg-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end">
              <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                <li class="me-3">
                  <a href="terms-and-conditions.html">البنود و الظروف</a>
                </li>
                <li class="me-3">
                  <a href="privacy-policy.html">سياسة الخصوصية</a>
                </li>
              </ul>
              <div class="select-container select-container-sm">
                <select class="select-container-select">
                  <option value="1">English</option>
                  <option value="2">Deutsch</option>
                  <option value="3">Español</option>
                  <option value="4">Français</option>
                  <option value="5">Bahasa Indonesia</option>
                  <option value="6">Bangla</option>
                  <option value="7">日本語</option>
                  <option value="8">한국어</option>
                  <option value="9">Nederlands</option>
                  <option value="10">Polski</option>
                  <option value="11">Português</option>
                  <option value="12">Română</option>
                  <option value="13">Русский</option>
                  <option value="14">ภาษาไทย</option>
                  <option value="15">Türkçe</option>
                  <option value="16">中文(简体)</option>
                  <option value="17">中文(繁體)</option>
                  <option value="17">Hindi</option>
                </select>
              </div>
            </div>
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

  <div class="tooltip_templates">
    <div id="tooltip_content_1">
      <div class="card card-item">
        <div class="card-body">
          <p class="card-text pb-2">
            By <a href="teacher-detail.html">خوسيه بورتيلا</a>
          </p>
          <h5 class="card-title pb-1">
            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
          </h5>
          <div class="d-flex align-items-center pb-1">
            <h6 class="ribbon fs-14 me-2">الأكثر مبيعا</h6>
            <p class="text-success fs-14 font-weight-medium">
              Updated<span class="font-weight-bold ps-1">November 2020</span>
            </p>
          </div>
          <ul
            class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
            <li>23 total hours</li>
            <li>جميع المستويات</li>
          </ul>
          <p class="card-text pt-1 fs-14 lh-22">
            The skills you need to become a BI Analyst - Statistics, Database
            theory, SQL, Tableau – Everything is included
          </p>
          <ul class="generic-list-item fs-14 py-3">
            <li>
              <i class="la la-check me-1 text-black"></i> Become an expert in
              Statistics, SQL, Tableau, and problem solving
            </li>
            <li>
              <i class="la la-check me-1 text-black"></i> Boost your resume
              with in-demand skills
            </li>
            <li>
              <i class="la la-check me-1 text-black"></i> Gather, organize,
              analyze and visualize data
            </li>
          </ul>
          <div class="d-flex justify-content-between align-items-center">
            <a href="#" class="btn theme-btn flex-grow-1 me-3"><i class="la la-shopping-cart me-1 fs-18"></i> Add to
              Cart</a>
            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
              <i class="la la-heart-o"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
  <!-- end tooltip_templates -->
  <div class="tooltip_templates">
    <div id="tooltip_content_2">
      <div class="card card-item">
        <div class="card-body">
          <p class="card-text pb-2">
            By <a href="teacher-detail.html">خوسيه بورتيلا</a>
          </p>
          <h5 class="card-title pb-1">
            <a href="course-details.html">تدريب فوتوشوب النهائي: من المبتدئين إلى المحترفين</a>
          </h5>
          <div class="d-flex align-items-center pb-1">
            <h6 class="ribbon fs-14 me-2">الأكثر مبيعا</h6>
            <p class="text-success fs-14 font-weight-medium">
              Updated<span class="font-weight-bold ps-1">November 2020</span>
            </p>
          </div>
          <ul
            class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
            <li>23 total hours</li>
            <li>جميع المستويات</li>
          </ul>
          <p class="card-text pt-1 fs-14 lh-22">
            The skills you need to become a BI Analyst - Statistics, Database
            theory, SQL, Tableau – Everything is included
          </p>
          <ul class="generic-list-item fs-14 py-3">
            <li>
              <i class="la la-check me-1 text-black"></i> Become an expert in
              Statistics, SQL, Tableau, and problem solving
            </li>
            <li>
              <i class="la la-check me-1 text-black"></i> Boost your resume
              with in-demand skills
            </li>
            <li>
              <i class="la la-check me-1 text-black"></i> Gather, organize,
              analyze and visualize data
            </li>
          </ul>
          <div class="d-flex justify-content-between align-items-center">
            <a href="#" class="btn theme-btn flex-grow-1 me-3"><i class="la la-shopping-cart me-1 fs-18"></i> Add to
              Cart</a>
            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
              <i class="la la-heart-o"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
  <!-- end tooltip_templates -->
  <div class="tooltip_templates">
    <div id="tooltip_content_3">
      <div class="card card-item">
        <div class="card-body">
          <p class="card-text pb-2">
            By <a href="teacher-detail.html">خوسيه بورتيلا</a>
          </p>
          <h5 class="card-title pb-1">
            <a href="course-details.html">دورة الأعمال الكاملة لموقع الويب</a>
          </h5>
          <div class="d-flex align-items-center pb-1">
            <h6 class="ribbon fs-14 me-2">الأكثر مبيعا</h6>
            <p class="text-success fs-14 font-weight-medium">
              Updated<span class="font-weight-bold ps-1">November 2020</span>
            </p>
          </div>
          <ul
            class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
            <li>23 total hours</li>
            <li>جميع المستويات</li>
          </ul>
          <p class="card-text pt-1 fs-14 lh-22">
            The skills you need to become a BI Analyst - Statistics, Database
            theory, SQL, Tableau – Everything is included
          </p>
          <ul class="generic-list-item fs-14 py-3">
            <li>
              <i class="la la-check me-1 text-black"></i> Become an expert in
              Statistics, SQL, Tableau, and problem solving
            </li>
            <li>
              <i class="la la-check me-1 text-black"></i> Boost your resume
              with in-demand skills
            </li>
            <li>
              <i class="la la-check me-1 text-black"></i> Gather, organize,
              analyze and visualize data
            </li>
          </ul>
          <div class="d-flex justify-content-between align-items-center">
            <a href="#" class="btn theme-btn flex-grow-1 me-3"><i class="la la-shopping-cart me-1 fs-18"></i> Add to
              Cart</a>
            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="Add to Wishlist">
              <i class="la la-heart-o"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
  <!-- end tooltip_templates -->

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
  <script src="/assets/js/jquery.lazy.min.js"></script>
  <script src="/assets/js/main-rtl.js"></script>

@hasSection ('customScripts')
  @yield('customScripts')
@else
    
@endif
</body>

</html>