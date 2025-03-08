@extends('layouts.dashboard')
@section('content')
 <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area py-5 bg-white pattern-bg">
  <div class="container">
    <div class="breadcrumb-content text-start">
      <div class="media media-card align-items-center pb-4">
        <div class="media-img media--img media-img-md rounded-full">
          <img
            class="rounded-full lazy"
            src="/assets/images/img-loading.png"
            data-src="/assets/images/small-avatar-1.jpg"
            alt="Student thumbnail image"
            id="user-avatar"
          />
        </div>
        <div class="media-body">
          <h2 class="section__title fs-30" id="user-name"></h2>
          {{-- <span class="d-block lh-18 pt-1 pb-2">عضو منذ مارس 2014</span>
          <p class="lh-18">مستقل ومطور الواجهة الأمامية</p> --}}
        </div>
      </div>
      <!-- end media -->
      <ul class="social-icons social-icons-styled social--icons-styled">
        <li>
          <a href="#"><i class="la la-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="la la-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="la la-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="la la-linkedin"></i></a>
        </li>
        <li>
          <a href="#"><i class="la la-youtube"></i></a>
        </li>
      </ul>
    </div>
    <!-- end breadcrumb-content -->
  </div>
  <!-- end container -->
</section>
<!-- end breadcrumb-area -->
<!-- ================================
END BREADCRUMB AREA
================================= -->

<!-- ================================
   START STUDENT DETAILS AREA
================================= -->
<section class="teacher-details-area pt-50px">
  <div class="container">
    <div class="student-details-wrap pb-20px">
      <div class="row">
        <div class="col-lg-4 responsive-column-half">
          <div class="counter-item">
            <div class="counter__icon icon-element mb-3 shadow-sm">
              <img src="/assets/images/svg/course-view.svg" alt="course view">
            </div>
            <h4 class="counter__title counter text-color-2" id="wishlistCount">15</h4>
            <p class="counter__meta">علاقه مندی ها</p>
          </div>
          <!-- end counter-item -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column-half">
          <div class="counter-item">
            <div class="counter__icon icon-element mb-3 shadow-sm">
              <img src="/assets/images/svg/review.svg" alt="review icon">
            </div>
            <h4 class="counter__title counter text-color-3" id="reviewsCount">12</h4>
            <p class="counter__meta">نظرات داده شده</p>
          </div>
          <!-- end counter-item -->
        </div>
        <!-- end col-lg-4 -->
        <div class="col-lg-4 responsive-column-half">
          <div class="counter-item">
            <div class="counter__icon icon-element mb-3 shadow-sm">
              <img src="/assets/images/svg/bought-course.svg" alt="bought course icon">
            </div>
            <h4 class="counter__title counter text-color-4" id="boughtBootcamps">20</h4>
            <p class="counter__meta">دوره های خریداری شده</p>
          </div>
          <!-- end counter-item -->
        </div>
        <!-- end col-lg-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end team-single-wrap -->
  </div>
  <!-- end container -->
  <div class="bg-gray py-5">
    <div class="container">
      <ul
        class="nav nav-tabs generic-tab justify-content-center"
        id="myTab"
        role="tablist"
      >
        <li class="nav-item">
          <a
            class="nav-link active"
            id="my-learning-tab"
            data-bs-toggle="tab"
            href="#my-learning"
            role="tab"
            aria-controls="my-learning"
            aria-selected="false"
          >
            بوت‌کمپ های من
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            id="wishlist-tab"
            data-bs-toggle="tab"
            href="#wishlist"
            role="tab"
            aria-controls="wishlist"
            aria-selected="false"
          >
            علاقه‌مندی ها
          </a>
        </li>
      </ul>
      <div class="tab-content pt-40px" id="myTabContent">
        <div
          class="tab-pane fade show active"
          id="my-learning"
          role="tabpanel"
          aria-labelledby="my-learning-tab"
        >
          <div class="my-course-body">
            <div class="my-course-cards">
              <div class="row" id="myLearningBody">
                <div class="col-lg-4 responsive-column-half">
                  <div
                    class="card card-item card-preview"
                    data-tooltip-content="#tooltip_content_1"
                  >
                    <div class="card-image">
                      <a href="course-details.html" class="d-block">
                        <img
                          class="card-img-top lazy"
                          src="/assets/images/img-loading.png"
                          data-src="/assets/images/img8.jpg"
                          alt="Card image cap"
                        />
                      </a>
                      <div class="course-badge-labels">
                        <div class="course-badge">الأكثر مبيعا</div>
                        <div class="course-badge blue">-39%</div>
                      </div>
                    </div>
                    <!-- end card-image -->
                    <div class="card-body">
                      <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                        جميع المستويات
                      </h6>
                      <h5 class="card-title">
                        <a href="course-details.html"
                          >دورة محلل ذكاء الأعمال 2021</a
                        >
                      </h5>
                      <p class="card-text">
                        <a href="teacher-detail.html">خوسيه بورتيلا</a>
                      </p>
                      <div
                        class="rating-wrap d-flex align-items-center py-2"
                      >
                        <div class="review-stars">
                          <span class="rating-number">4.4</span>
                          <span class="la la-star"></span>
                          <span class="la la-star"></span>
                          <span class="la la-star"></span>
                          <span class="la la-star"></span>
                          <span class="la la-star-o"></span>
                        </div>
                        <span class="rating-total ps-1">(20,230)</span>
                      </div>
                      <!-- end rating-wrap -->
                      <div
                        class="d-flex justify-content-between align-items-center"
                      >
                        <p class="card-price text-black font-weight-bold">
                          12.99
                          <span class="before-price font-weight-medium"
                            >129.99</span
                          >
                        </p>
                        <div
                          class="icon-element icon-element-sm shadow-sm cursor-pointer"
                          title="Add to Wishlist"
                        >
                          <i class="la la-heart-o"></i>
                        </div>
                      </div>
                    </div>
                    <!-- end card-body -->
                  </div>
                  <!-- end card -->
                </div>
              </div>
              <!-- end row -->
              <div class="text-center pt-3">
                <nav
                  aria-label="Page navigation example"
                  class="pagination-box"
                >
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true"
                          ><i class="la la-arrow-left"></i
                        ></span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true"
                          ><i class="la la-arrow-right"></i
                        ></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <p class="fs-14 pt-2">عرض 1-6 من 56 نتيجة</p>
              </div>
            </div>
            <!-- end my-course-cards -->
          </div>
          <!-- end my-course-body -->
        </div>
        <!-- end tab-pane -->
        <div
          class="tab-pane fade"
          id="wishlist"
          role="tabpanel"
          aria-labelledby="wishlist-tab"
        >
          <div class="my-course-body">
            <div class="my-course-cards">
              <div class="row" id="wishlistBody">
                <div class="col-lg-4 responsive-column-half">
                  <div class="card card-item">
                    <div class="card-image">
                      <a href="course-details.html" class="d-block">
                        <img
                          class="card-img-top lazy"
                          src="/assets/images/img-loading.png"
                          data-src="/assets/images/img8.jpg"
                          alt="Card image cap"
                        />
                      </a>
                      <div class="course-badge-labels">
                        <div class="course-badge">الأكثر مبيعا</div>
                        <div class="course-badge blue">-39%</div>
                      </div>
                    </div>
                    <!-- end card-image -->
                    <div class="card-body">
                      <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                        جميع المستويات
                      </h6>
                      <h5 class="card-title">
                        <a href="course-details.html"
                          >دورة محلل ذكاء الأعمال 2021</a
                        >
                      </h5>
                      <p class="card-text">
                        <a href="teacher-detail.html">خوسيه بورتيلا</a>
                      </p>
                      <div
                        class="rating-wrap d-flex align-items-center py-2"
                      >
                        <div class="review-stars">
                          <span class="rating-number">4.4</span>
                          <span class="la la-star"></span>
                          <span class="la la-star"></span>
                          <span class="la la-star"></span>
                          <span class="la la-star"></span>
                          <span class="la la-star-o"></span>
                        </div>
                        <span class="rating-total ps-1">(20,230)</span>
                      </div>
                      <!-- end rating-wrap -->
                      <div
                        class="d-flex justify-content-between align-items-center"
                      >
                        <p class="card-price text-black font-weight-bold">
                          12.99
                          <span class="before-price font-weight-medium"
                            >129.99</span
                          >
                        </p>
                        <div
                          class="icon-element icon-element-sm shadow-sm cursor-pointer"
                          title="Remove from Wishlist"
                        >
                          <i class="la la-heart"></i>
                        </div>
                      </div>
                    </div>
                    <!-- end card-body -->
                  </div>
                  <!-- end card -->
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end my-course-cards -->
          </div>
          <!-- end my-course-body -->
        </div>
        <!-- end tab-pane -->
      </div>
      <!-- end tab-content -->
    </div>
    <!-- end container -->
  </div>
</section>
<!-- end teacher-details-area -->
<!-- ================================
   START STUDENT DETAILS AREA
================================= -->

<!--======================================
    START CTA AREA
======================================-->
<section class="cta-area py-5 position-relative overflow-hidden">
  <span class="stroke-shape stroke-shape-1"></span>
  <span class="stroke-shape stroke-shape-2"></span>
  <span class="stroke-shape stroke-shape-3"></span>
  <span class="stroke-shape stroke-shape-4"></span>
  <span class="stroke-shape stroke-shape-5"></span>
  <span class="stroke-shape stroke-shape-6"></span>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="cta-content-wrap text-start">
          <h3 class="fs-20 font-weight-semi-bold lh-28">
            اختيار الشركات الكبرى<a
              href="for-business.html"
              class="text-color hover-underline"
              >إحضار للأعمال</a
            >
            لبناء المهارات المهنية المطلوبة.
          </h3>
        </div>
      </div>
      <!-- end col-lg-6 -->
      <div class="col-lg-6">
        <div class="client-logo-wrap text-end">
          <a href="#" class="client-logo-item client--logo-item-2 pe-3"
            ><img src="/assets/images/sponsor-img.png" alt="brand image"
          /></a>
          <a href="#" class="client-logo-item client--logo-item-2 pe-3"
            ><img src="/assets/images/sponsor-img2.png" alt="brand image"
          /></a>
          <a href="#" class="client-logo-item client--logo-item-2 pe-3"
            ><img src="/assets/images/sponsor-img3.png" alt="brand image"
          /></a>
        </div>
        <!-- end client-logo-wrap -->
      </div>
      <!-- end col-lg-6 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end cta-area -->
<!--======================================
    END CTA AREA
======================================-->

<div class="section-block"></div>

<!-- ================================
     END FOOTER AREA
================================= -->
<section class="footer-area pt-90px">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 responsive-column-half">
        <div class="footer-item">
          <a href="index.html">
            <img
              src="/assets/images/logo.png"
              alt="footer logo"
              class="footer__logo"
            />
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
              <a href="#" class="facebook-bg"
                ><i class="la la-facebook"></i
              ></a>
            </li>
            <li class="me-1 ms-0">
              <a href="#" class="twitter-bg"
                ><i class="la la-twitter"></i
              ></a>
            </li>
            <li class="me-1 ms-0">
              <a href="#" class="instagram-bg"
                ><i class="la la-instagram"></i
              ></a>
            </li>
            <li class="me-1 ms-0">
              <a href="#" class="linkedin-bg"
                ><i class="la la-linkedin"></i
              ></a>
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
            <a href="#" class="d-block mb-2 hover-s"
              ><img
                src="/assets/images/appstore.png"
                alt="App store"
                class="img-fluid"
            /></a>
            <a href="#" class="d-block hover-s"
              ><img
                src="/assets/images/googleplay.png"
                alt="Google play store"
                class="img-fluid"
            /></a>
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
            <a href="https://themeforest.net/user/techydevs/portfolio"
              >TechyDevs</a
            >
          </p>
        </div>
        <!-- end col-lg-6 -->
        <div class="col-lg-6">
          <div
            class="d-flex flex-wrap align-items-center justify-content-end"
          >
            <ul
              class="generic-list-item d-flex flex-wrap align-items-center fs-14"
            >
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
          بواسطة<a href="teacher-detail.html">خوسيه بورتيلا</a>
        </p>
        <h5 class="card-title pb-1">
          <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
        </h5>
        <div class="d-flex align-items-center pb-1">
          <h6 class="ribbon fs-14 me-2">الأكثر مبيعا</h6>
          <p class="text-success fs-14 font-weight-medium">
            محدث<span class="font-weight-bold ps-1">نوفمبر 2020</span>
          </p>
        </div>
        <ul
          class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14"
        >
          <li>إجمالي 23 ساعة</li>
          <li>جميع المستويات</li>
        </ul>
        <p class="card-text pt-1 fs-14 lh-22">
          المهارات التي تحتاجها لتصبح محلل - الإحصاء ، نظرية قواعد البيانات
          ، - يتم تضمين كل شيء
        </p>
        <ul class="generic-list-item fs-14 py-3">
          <li>
            <i class="la la-check me-1 text-black"></i>كن خبيرًا في الإحصاء
            و SQL و Tableau وحل المشكلات
          </li>
          <li>
            <i class="la la-check me-1 text-black"></i>عزز سيرتك الذاتية
            بالمهارات المطلوبة
          </li>
          <li>
            <i class="la la-check me-1 text-black"></i>جمع البيانات وتنظيمها
            وتحليلها وتصورها
          </li>
        </ul>
        <div class="d-flex justify-content-between align-items-center">
          <a
            href="course-details.html"
            class="btn theme-btn flex-grow-1 me-3"
            >اذهب إلى الدورة</a
          >
          <div
            class="icon-element icon-element-sm shadow-sm cursor-pointer"
            title="Add to Wishlist"
          >
            <i class="la la-heart-o"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- end card -->
  </div>
</div>
<!-- end tooltip_templates -->


@section('customScripts')
<script>

  
  function changeWishlist(bootcamp_id , wishlist_id){
    console.log(wishlist_id);
    axios.put('/student/wishlist/' + bootcamp_id)
    .then(function(response){
      wishlist_id.classList.toggle('la-heart');
      wishlist_id.classList.toggle('la-heart-o');
    })
    .catch(function(error){
      console.log(error);
    })
  }
  axios.get('/student/me')
  .then(function(response){
    let data = response.data.data;
    $("#user-name").html(data.first_name ?? "" + " " + data.last_name ?? "");
    document.querySelector("#user-avatar").setAttribute('src' , data.avatar ? data.avatar : '/assets/images/img-loading.png');
    document.querySelector("#boughtBootcamps").textContent = data.bootcamps.length;
    document.querySelector("#reviewsCount").textContent = data.reviews.length;
    document.querySelector("#wishlistCount").textContent = data.wishlist.length;

    document.querySelector("#myLearningBody").innerHTML = '';
    data.bootcamps.forEach(bootcamp => {
      let isWish = false;
      data.wishlist.forEach(b=>{
        if (b.id == bootcamp.id) isWish = true;
      })

      document.querySelector("#myLearningBody").innerHTML += `
        <div class="col-lg-4 responsive-column-half">
                  <div
                    class="card card-item card-preview"
                    data-tooltip-content="#tooltip_content_${bootcamp.id}"
                  >
                    <div class="card-image">
                      <a href="course-details.html" class="d-block">
                        <img
                          class="card-img-top lazy"
                          src="${bootcamp.cover_url ? bootcamp.cover_url : '/assets/images/img-loading.png'}"
                          data-src="/assets/images/img-loading.png"
                          alt="bootcamp image cap"
                        />
                      </a>
                    </div>
                    <!-- end card-image -->
                    <div class="card-body">
                     
                      <h5 class="card-title">
                        <a href="/bootcamps/${bootcamp.slug}"
                          >${bootcamp.title}</a
                        >
                      </h5>
                      <p class="card-text">
                        <a href="teacher-detail.html">${bootcamp.teachers[0].first_name ?? ""} ${bootcamp.teachers[0].last_name ?? ""}</a>
                      </p>
                      <div
                        class="rating-wrap d-flex align-items-center py-2"
                      >
                        <div class="review-stars">
                          <span class="rating-number">${bootcamp.rate}</span>
                          <span class="la la-star${bootcamp.rate > 0 ? '' : '-o'}"></span>
                          <span class="la la-star${bootcamp.rate > 1 ? '' : '-o'}"></span>
                          <span class="la la-star${bootcamp.rate > 2 ? '' : '-o'}"></span>
                          <span class="la la-star${bootcamp.rate > 3 ? '' : '-o'}"></span>
                          <span class="la la-star${bootcamp.rate > 4 ? '' : '-o'}"></span>
                        </div>
                        <span class="rating-total ps-1">${bootcamp.reviews.length} نظر</span>
                      </div>
                      <!-- end rating-wrap -->
                      <div
                        class="d-flex justify-content-between align-items-center"
                      >
                        <p class="card-price text-black font-weight-bold">
                          ${bootcamp.price}
                        </p>
                        <div
                          class="icon-element icon-element-sm shadow-sm cursor-pointer"
                          title="Add to Wishlist"
                        >
                          <i class="la la-heart${isWish ? '' : '-o'}" id="leaning${bootcamp.id}" onclick="changeWishlist(${bootcamp.id} , leaning${bootcamp.id})"></i>
                        </div>
                      </div>
                    </div>
                    <!-- end card-body -->
                  </div>
                  <!-- end card -->
                </div>
      `;
    });

    document. ("#wishlistBody").innerHTML = "";
    data.wishlist.forEach(bootcamp => {
      document.querySelector("#wishlistBody").innerHTML += `
        <div class="col-lg-4 responsive-column-half">
                  <div
                    class="card card-item card-preview"
                    data-tooltip-content="#tooltip_content_${bootcamp.id}"
                  >
                    <div class="card-image">
                      <a href="course-details.html" class="d-block">
                        <img
                          class="card-img-top lazy"
                          src="${bootcamp.cover_url ? bootcamp.cover_url : '/assets/images/img-loading.png'}"
                          data-src="/assets/images/img-loading.png"
                          alt="bootcamp image cap"
                        />
                      </a>
                    </div>
                    <!-- end card-image -->
                    <div class="card-body">
                     
                      <h5 class="card-title">
                        <a href="/bootcamps/${bootcamp.slug}"
                          >${bootcamp.title}</a
                        >
                      </h5>
                      <p class="card-text">
                        <a href="teacher-detail.html">${bootcamp.teachers[0].first_name ?? ""} ${bootcamp.teachers[0].last_name ?? ""}</a>
                      </p>
                      <div
                        class="rating-wrap d-flex align-items-center py-2"
                      >
                        <div class="review-stars">
                          <span class="rating-number">${bootcamp.rate}</span>
                          <span class="la la-star"></span>
                          <span class="la la-star"></span>
                          <span class="la la-star "></span>
                          <span class="la la-star"></span>
                          <span class="la la-star-o"></span>
                        </div>
                        <span class="rating-total ps-1">${bootcamp.reviews.length} نظر</span>
                      </div>
                      <!-- end rating-wrap -->
                      <div
                        class="d-flex justify-content-between align-items-center"
                      >
                        <p class="card-price text-black font-weight-bold">
                          ${bootcamp.price}
                        </p>
                        <div
                          class="icon-element icon-element-sm shadow-sm cursor-pointer"
                          title="Add to Wishlist"
                        >
                          <i class="la la-heart-o"></i>
                        </div>
                      </div>
                    </div>
                    <!-- end card-body -->
                  </div>
                  <!-- end card -->
                </div>
      `;
    });
  })
  .catch(function(error){
    console.log(error);
  })


</script>
@endsection
@endsection
