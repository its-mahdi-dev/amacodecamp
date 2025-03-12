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
      {{-- <ul class="social-icons social-icons-styled social--icons-styled">
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
      </ul> --}}
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
              <img src="/assets/images/svg/review.svg" alt="course view">
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
              <img src="/assets/images/svg/course-view.svg" alt="review icon">
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
            <div  id="myBootcampsArea" class="absolute"></div>
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

<!-- start scroll top -->
<div id="scroll-top">
  <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->



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
  document.addEventListener('userDataLoaded', function(e) {
    let data = e.detail;
    console.log("ddddddddddddd" ,data)
    $("#user-name").html(data.first_name ?? "" + " " + data.last_name ?? "");
    document.querySelector("#user-avatar").setAttribute('src' , data.avatar_url);
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
                      <a href="/bootcamps/${bootcamp.slug}" class="d-block">
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
                        <a href="teacher-detail.html">${bootcamp.teachers[0].full_name}</a>
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
      let isWish = false;
      data.wishlist.forEach(b=>{
        if (b.id == bootcamp.id) isWish = true;
      })
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
                        <a href="teacher-detail.html">${bootcamp.teachers[0].full_name}}</a>
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
  })


</script>
@endsection
@endsection
