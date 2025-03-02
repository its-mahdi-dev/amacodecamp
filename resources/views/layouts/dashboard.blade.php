<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>AmaCodeCamp</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="/assets/images/favicon.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" href="/assets/css/line-awesome.css" />
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/css/select2.min.css" />
    <link rel="stylesheet" href="/assets/css/fancybox.css" />
    <link rel="stylesheet" href="/assets/css/emojionearea.css" />
    <link rel="stylesheet" href="/assets/css/jquery-te-1.4.0.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/style-rtl.css" />
    <!-- end inject -->
</head>

<body>
  <div class="preloader">
    <div class="loader">
      <svg class="spinner" viewBox="0 0 50 50">
        <circle
          class="path"
          cx="25"
          cy="25"
          r="20"
          fill="none"
          stroke-width="5"
        ></circle>
      </svg>
    </div>
  </div>
  <!-- end cssload-loader -->

  <!--======================================
      START HEADER AREA
  ======================================-->
  <header class="header-menu-area">
    <div class="header-menu-content pe-30px ps-30px bg-white shadow-sm">
      <div class="container-fluid">
        <div class="main-menu-content">
          <div class="row align-items-center">
            <div class="col-lg-2">
              <div class="logo-box">
                <a href="{{route('dashboard.home')}}" class="logo"
                  ><img src="images/logo.png" alt="logo"
                /></a>
                <div class="user-btn-action">
                  
                  <div
                    class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="منوی اصلی"
                  >
                    <i class="la la-bars"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col-lg-2 -->
            <div class="col-lg-10">
              <div class="menu-wrapper">
              
                {{-- <form method="post">
                  <div class="form-group mb-0">
                    <input
                      class="form-control form--control form--control-gray ps-3"
                      type="text"
                      name="search"
                      placeholder="ابحث عن أي شيء"
                    />
                    <span class="la la-search search-icon"></span>
                  </div>
                </form> --}}
                <div class="nav-right-button d-flex align-items-center">
                  <div class="user-action-wrap d-flex align-items-center">
                    <div
                      class="shop-cart course-cart pe-3 me-3 border-left border-left-gray"
                    >
                      <ul>
                        <li>
                          <p
                            class="shop-cart-btn d-flex align-items-center fs-16"
                          >
                            بوت‌کمپ های من
                            <span class="la la-angle-down fs-13 ms-1"></span>
                          </p>
                          <ul class="cart-dropdown-menu after-none" id="menuBootcamps">
                            
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div
                      class="shop-cart wishlist-cart pe-3 me-3 border-left border-left-gray"
                    >
                      <ul>
                        <li>
                          <p class="shop-cart-btn">
                            <i class="la la-heart-o"></i>
                            <span class="dot-status bg-1"></span>
                          </p>
                          <ul class="cart-dropdown-menu after-none" id="menuWishlist">
                            
                            
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <!-- end shop-cart -->
                    
                    <div class="shop-cart user-profile-cart">
                      <ul>
                        <li>
                          <div class="shop-cart-btn">
                            <div class="avatar-xs">
                              <img
                                class="rounded-full img-fluid"
                                src="images/img-loading.png"
                                alt="Avatar image"
                                id="menuAvatar"
                              />
                            </div>
                            <span class="dot-status bg-1"></span>
                          </div>
                          <ul
                            class="cart-dropdown-menu after-none p-0 notification-dropdown-menu"
                          >
                            <li
                              class="menu-heading-block d-flex align-items-center"
                            >
                              <a
                                href="{{route('dashboard.home')}}"
                                class="avatar-sm flex-shrink-0 d-block"
                              >
                                <img
                                  class="rounded-full img-fluid"
                                  src=""
                                  alt="Avatar image"
                                  id="menuAvatar2"
                                />
                              </a>
                              <div class="ms-2">
                                <h4>
                                  <a
                                    href="{{route('dashboard.profile')}}"
                                    class="text-black" id="menuName"
                                    ></a
                                  >
                                </h4>
                                <span class="d-block fs-14 lh-20" id="menuEmail"
                                  ></span
                                >
                              </div>
                            </li>
                            <ul class="generic-list-item">
                                <li>
                                  <a href="{{route('dashboard.profile')}}">
                                    <i class="la la-edit me-1"></i>
                                    ویرایش پروفایل
                                  </a>
                                </li>
                                <li><div class="section-block"></div></li>
                                <li>
                                  <a href="">
                                    <i class="la la-power-off me-1"></i>
                                    خروج
                                  </a>
                                </li>
                                <li><div class="section-block"></div></li>
                               
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <!-- end shop-cart -->
                  </div>
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
      <div
        class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm"
        data-toggle="tooltip"
        data-placement="left"
        title="بستن منو"
      >
        <i class="la la-times"></i>
      </div>
      <!-- end off-canvas-menu-close -->
      <h4 class="off-canvas-menu-heading pt-90px">کاربر</h4>
      <ul
        class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray"
      >
        <li><a href="{{route('dashboard.home')}}#myBootcampsArea">بوت‌کمپ های من</a></li>
        <li><a href="{{route('dashboard.home')}}#myBootcampsArea">علاقه مندی های من</a></li>
        <li><a href="{{route('dashboard.profile')}}">ویرایش پروفایل</a></li>
      </ul>
      
    </div>
    <!-- end off-canvas-menu -->
    
    <div class="body-overlay"></div>
  </header>

    @yield('content', 'Default Content')


    <!-- template js files -->
    <script src="/assets/js/axios.min.js"></script>
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/select2.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/fancybox.js"></script>
    <script src="/assets/js/emojionearea.min.js"></script>
    <script src="/assets/js/animated-skills.js"></script>
    <script src="/assets/js/jquery.MultiFile.min.js"></script>
    <script src="/assets/js/jquery-te-1.4.0.min.js"></script>
    <script src="/assets/js/main-rtl.js"></script>

    <script>
      localStorage.setItem("auth_token" , "8|zbsoLKdz7h9GtgItR6BM4N6vdYeP09xnI2MHuZ6jb4a86ff9")
        axios.defaults.baseURL = "{{ env('API_URL', 'http://localhost:8000') }}";

        // Automatically attach the Bearer token from localStorage (or another storage method)
        axios.interceptors.request.use(
            function(config) {
                const token = localStorage.getItem("auth_token"); // Get token from storage
                if (token) {
                    config.headers.Authorization = `Bearer ${token}`;
                }
                return config;
            },
            function(error) {
                return Promise.reject(error);
            }
        );

        // Handle 401 responses globally and redirect to /login
        axios.interceptors.response.use(
            function(response) {
                return response; // Return response as-is if no error
            },
            function(error) {
                if (error.response && error.response.status === 401) {
                    // Clear stored token
                    localStorage.removeItem("auth_token");

                    // Redirect to login page
                    window.location.href = "/login";
                }
                return Promise.reject(error);
            }
        );


        function loadWishlist(userData){
          let menuWishlist = document.querySelector("#menuWishlist");
              menuWishlist.innerHTML = '';
              for(let i= 0; i < Math.min(2 , userData.wishlist.length); i++){
                let bootcamp = userData.wishlist[i];
                menuWishlist.innerHTML += `
                  <li>
                              <div class="media media-card">
                                <a
                                  href="/bootcamps/${bootcamp.slug}"
                                  class="media-img"
                                >
                                  <img
                                    class="me-3"
                                    src="${bootcamp.cover_url}"
                                    alt="${bootcamp.title}"
                                  />
                                </a>
                                <div class="media-body">
                                  <h5>
                                    <a href="/bootcamps/${bootcamp.slug}"
                                      >${bootcamp.title}</a
                                    >
                                  </h5>
                                  <span class="d-block lh-18 py-1"
                                    >${bootcamp.teachers[0].full_name}</span
                                  >
                                  <p
                                    class="text-black font-weight-semi-bold lh-18"
                                  >
                                    ${bootcamp.price} تومان
                                  </p>
                                </div>
                              </div>
                              <a
                                href="/payment/${bootcamp.id}"
                                class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3"
                                >همین الان بگیرش
                                <i class="la la-arrow-right icon ms-1"></i
                              ></a>
                            </li>
                `;
              }

              menuWishlist.innerHTML += `
                <li>
                              <a
                                href="/dashboard#myBootcampsArea"
                                class="btn theme-btn w-100"
                              >
                                همه علاقه مندی ها<i
                                  class="la la-arrow-right icon ms-1"
                                ></i
                              ></a>
                            </li>
              `;
        }

        function loadBootcamps(userData){
          document.querySelector("#menuBootcamps").innerHTML = '';
                  for(let i =0; i < Math.min(1 , userData.bootcamps.length); i++){
                    let bootcamp = userData.bootcamps[i];
                    document.querySelector("#menuBootcamps").innerHTML +=  `
                      <li class="media media-card">
                              <a href="/bootcamps/${bootcamp.slug}" class="media-img">
                                <img
                                  class="me-3"
                                  src="${bootcamp.cover_url}"
                                  alt="${bootcamp.title}"
                                />
                              </a>
                              <div class="media-body">
                                <h5>
                                  <a href="/bootcamps/${bootcamp.slug}"
                                    >${bootcamp.title}</a
                                  >
                                </h5>
                                  <span class="d-block lh-18 py-1"
                                    >${bootcamp.teachers[0].full_name}</span
                                  >
                              </div>
                            </li>
                    `;
                  };

                  
                  document.querySelector("#menuBootcamps").innerHTML += `<li>
                              <a
                                href="/dashboard#myBootcampsArea"
                                class="btn theme-btn w-100"
                              >
                                همه بوت‌کمپ های من
                                 <i class="la la-arrow-right icon ms-1"
                                ></i
                              ></a>
                            </li>`;
                            
        }

        function loadMenuBar(userData){
          document.querySelector("#menuAvatar").setAttribute('src' , userData.avatar_url);
          document.querySelector("#menuAvatar2").setAttribute('src' , userData.avatar_url);
          document.querySelector("#menuName").setAttribute('src' , userData.full_name);
          
        }
        window.addEventListener('load', function() {
          axios.get('/student/me')
              .then(function(response) {
                  let userData = response.data.data;
                  document.dispatchEvent(new CustomEvent('userDataLoaded', { detail: userData }));
                  loadBootcamps(userData);
                  loadWishlist(userData);
                  loadMenuBar(userData);
              });

              
              
      });
    </script>

    @hasSection('customScripts')
        @yield('customScripts')
    @else
    @endif
</body>

</html>
