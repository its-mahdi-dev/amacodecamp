@extends('layouts.app')

@section('content')
    <!-- ================================
        START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area section-padding img-bg-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="section-heading">
                    <h2 class="section__title text-white">
                        بوت‌کمپ های مارو دنبال کن
                    </h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">خانه</a></li>
                    <li>بوت کمپ ها</li>
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

    <!--======================================
          START COURSE AREA
    ======================================-->
    <section class="course-area section--padding">
        <div class="container">
            <!-- end filter-bar -->
            <div class="row">
                
                <!-- end col-lg-4 -->
                <div class="mb-5">
                    <div class="row" id="bootcampsContainer">
                        {{-- <div class="col-lg-6 responsive-column-half">
                            <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                <div class="card-image">
                                    <a href="course-details.html" class="d-block">
                                        <img class="card-img-top lazy" src="/assets/images/img-loading.png"
                                            data-src="/assets/images/img8.jpg" alt="Card image cap" />
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
                        </div> --}}
                        <!-- end col-lg-6 -->
                    </div>
                    <!-- end row -->
                    {{-- <div class="text-center pt-3">
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
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <p class="fs-14 pt-2">عرض 1-10 من 56 نتيجة</p>
                    </div> --}}
                </div>
                <!-- end col-lg-8 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end courses-area -->
    <!--======================================
          END COURSE AREA
    ======================================-->
@endsection


@section('customScripts')
    <script>
        axios.defaults.baseURL = "{{env('API_URL' , 'localhost/api')}}";
        const bootcampsContainer = document.getElementById("bootcampsContainer");
        axios.get('/bootcamps')
            .then(function(response) {
                let d = response.data.data;
                d.forEach(bootcamp => {
                    const bootcampShowUrl = "{{ route('bootcamps.show', ['slug' => 'BOOTCAMP_SLUG']) }}";
                    const url = bootcampShowUrl.replace('BOOTCAMP_SLUG', bootcamp.slug);
                    let pricebox = `<p class="card-price text-black font-weight-bold">
                                            ${bootcamp.price} تومن
                                        </p>`;

                    if (bootcamp.price != bootcamp.price_off){
                        pricebox = `
                            <p class="card-price text-black font-weight-bold">
                                            ${bootcamp.price_off} تومن
                                            <span class="before-price font-weight-medium">${bootcamp.price} تومن</span>
                                        </p>
                        `;
                    }
                    bootcampsContainer.innerHTML += `
                    <div class="col-lg-4 responsive-column-half">
                            <div class="card card-item" data-tooltip-content="#tooltip_content_1">
                                <div class="card-image">
                                    <a href="${url}" class="d-block">
                                        <img class="card-img-top lazy" src="/assets/images/img-loading.png"
                                            data-src="${bootcamp.cover_url}" alt="Card image cap" />
                                    </a>
                                </div>
                                <!-- end card-image -->
                                <div class="card-body">
                                    <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                        ${bootcamp.category}
                                    </h6>
                                    <h5 class="card-title">
                                        <a href="${url}">${bootcamp.title}</a>
                                    </h5>
                                    <p class="card-text">
                                        <a href="teacher-detail.html">${bootcamp.teachers[0].full_name}</a>
                                    </p>
                                    <div class="rating-wrap d-flex align-items-center py-2">
                                        <div class="review-stars">
                                            <span class="rating-number">${bootcamp.rate}</span>
                                            <span class="la la-star${bootcamp.rate > 0 ? '' : '-o'}"></span>
                                            <span class="la la-star${bootcamp.rate > 1 ? '' : '-o'}"></span>
                                            <span class="la la-star${bootcamp.rate > 2 ? '' : '-o'}"></span>
                                            <span class="la la-star${bootcamp.rate > 3 ? '' : '-o'}"></span>
                                            <span class="la la-star${bootcamp.rate > 4 ? '' : '-o'}"></span>
                                        </div>
                                        <span class="rating-total ps-1">(${bootcamp.reviews.length})</span>
                                    </div>
                                    <!-- end rating-wrap -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        ${pricebox}
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                    `;
                });

            })
            .catch(function(error) {
                console.log(error);
            })
    </script>
@endsection
