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

            <div class="filter-bar mb-4">
                <div class="filter-bar-inner d-flex flex-wrap align-items-center justify-content-between">
                    <p class="fs-14">
                        <span class="text-black" id="searchResultsCounter">0</span> نتیجه واست پیدا کردم 
                    </p>
                </div>
                <!-- end filter-bar-inner -->
            </div>
            <!-- end filter-bar -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">جستجو کنید</h3>
                                <div class="divider"><span></span></div>
                                <form method="get">
                                    <div class="form-group mb-0">
                                        <input class="form-control form--control ps-3" type="text" name="search"
                                            placeholder="جستجو کن" value="{{request()->search}}" />
                                        <button class="btn search-icon">
                                            <span class="la la-search"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-4 -->
                <div class="mb-5">
                    <div class="row" id="bootcampsContainer">

                        {{-- Loading Bootcamps --}}
                    </div>
                    <!-- end row -->

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
        
        axios.get('/bootcamps?search={{request()->search}}')
            .then(function(response) {
                let d = response.data.data;
                //update results counter
                document.getElementById("searchResultsCounter").innerText = d.length;

                d.forEach(bootcamp => {
                    const bootcampShowUrl = "{{ route('bootcamps.show', ['slug' => 'BOOTCAMP_SLUG']) }}";
                    const url = bootcampShowUrl.replace('BOOTCAMP_SLUG', bootcamp.slug);
                    let pricebox = `<p class="card-price text-black font-weight-bold">
                                            ${bootcamp.price.toLocaleString('en-US')} تومن
                                        </p>`;

                    if (bootcamp.price != bootcamp.price_off){
                        pricebox = `
                            <p class="card-price text-black font-weight-bold">
                                            ${bootcamp.price_off.toLocaleString('en-US')} تومن
                                            <span class="before-price font-weight-medium">${bootcamp.price.toLocaleString('en-US')} تومن</span>
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
                                    <h5 class="card-title text-truncate">
                                        <a href="${url}">${bootcamp.title}</a>
                                    </h5>
                                    <p class="card-text">

                                        <a href="teacher-detail.html">${bootcamp.intro.substring(30)}...</a>
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
