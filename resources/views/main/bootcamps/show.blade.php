@extends('layouts.app')
@section('content')
    <!-- ================================
            START BREADCRUMB AREA
        ================================= -->
    <section class="breadcrumb-area pt-50px pb-50px bg-white pattern-bg">
        <div class="container">
            <div class="col-lg-8 me-auto">
                <div class="breadcrumb-content text-start">
                    <ul class="generic-list-item generic-list-item-arrow d-flex flex-wrap align-items-center">
                        <li><a href="index.html">خانه</a></li>
                        <li><a href="#">بوت کمپ ها</a></li>
                        <li><a href="#">ثبت نام</a></li>
                    </ul>
                    <div id="bootcampHeader">
                        در حال بارگذاری اطلاعات
                    </div>
                </div>
                <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-8 -->
        </div>
        <!-- end container -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
          END BREADCRUMB AREA
        ================================= -->
    <div class="container">
        <ul class="nav nav-tabs generic-tab justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="my-learning-tab" data-bs-toggle="tab" href="#my-learning" role="tab"
                    aria-controls="my-learning" aria-selected="false">
                    درباره بوتکمپ
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="wishlist-tab" data-bs-toggle="tab" href="#wishlist" role="tab"
                    aria-controls="wishlist" aria-selected="false">
                    قائمة الرغبات
                </a>
            </li>
        </ul>
        <div class="tab-content pt-40px" id="myTabContent">
            <div class="tab-pane fade show active" id="my-learning" role="tabpanel" aria-labelledby="my-learning-tab">
                <div class="my-course-body">
                    <div class="my-course-cards">
                        <div class="row">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img8.jpg" alt="Card image cap" />
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
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                12.99
                                                <span class="before-price font-weight-medium">129.99</span>
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Add to Wishlist">
                                                <i class="la la-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img9.jpg" alt="Card image cap" />
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge red">متميز</div>
                                        </div>
                                    </div>
                                    <!-- end card-image -->
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                            جميع المستويات
                                        </h6>
                                        <h5 class="card-title">
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                129.99
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Add to Wishlist">
                                                <i class="la la-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img10.jpg" alt="Card image cap" />
                                        </a>
                                    </div>
                                    <!-- end card-image -->
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                            جميع المستويات
                                        </h6>
                                        <h5 class="card-title">
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                129.99
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Add to Wishlist">
                                                <i class="la la-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img11.jpg" alt="Card image cap" />
                                        </a>
                                    </div>
                                    <!-- end card-image -->
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                            جميع المستويات
                                        </h6>
                                        <h5 class="card-title">
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                129.99
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Add to Wishlist">
                                                <i class="la la-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img12.jpg" alt="Card image cap" />
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge green">حر</div>
                                        </div>
                                    </div>
                                    <!-- end card-image -->
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                            جميع المستويات
                                        </h6>
                                        <h5 class="card-title">
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                حر
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Add to Wishlist">
                                                <i class="la la-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img13.jpg" alt="Card image cap" />
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge sky-blue">
                                                Highest rated
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-image -->
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                            جميع المستويات
                                        </h6>
                                        <h5 class="card-title">
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                129.99
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Add to Wishlist">
                                                <i class="la la-heart-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
                        </div>
                        <!-- end row -->
                        <div class="text-center pt-3">
                            <nav aria-label="Page navigation example" class="pagination-box">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
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
                                            <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
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
            <div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                <div class="my-course-body">
                    <div class="my-course-cards">
                        <div class="row">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img8.jpg" alt="Card image cap" />
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
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                12.99
                                                <span class="before-price font-weight-medium">129.99</span>
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Remove from Wishlist">
                                                <i class="la la-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img9.jpg" alt="Card image cap" />
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge red">متميز</div>
                                        </div>
                                    </div>
                                    <!-- end card-image -->
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                            جميع المستويات
                                        </h6>
                                        <h5 class="card-title">
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                129.99
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Remove from Wishlist">
                                                <i class="la la-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png"
                                                data-src="images/img10.jpg" alt="Card image cap" />
                                        </a>
                                    </div>
                                    <!-- end card-image -->
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                            جميع المستويات
                                        </h6>
                                        <h5 class="card-title">
                                            <a href="course-details.html">دورة محلل ذكاء الأعمال 2021</a>
                                        </h5>
                                        <p class="card-text">
                                            <a href="teacher-detail.html">خوسيه بورتيلا</a>
                                        </p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
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
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">
                                                129.99
                                            </p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                                title="Remove from Wishlist">
                                                <i class="la la-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-lg-4 -->
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
@endsection
