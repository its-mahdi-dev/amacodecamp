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

    <!--======================================
                              START COURSE DETAILS AREA
                        ======================================-->
    <section class="course-details-area pb-20px">
        <div id="buyNowBtn" class="position-fixed bottom-0 mb-4 d-block d-md-none text-center w-100">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pb-5">
                    <div id="thumbanailContainer" class="mt-4"></div>
                    <div class="course-details-content-wrap pt-90px">
                        <!-- end course-overview-card -->
                        <div class="course-overview-card">
                            <div class="container">
                                <ul class="nav nav-tabs generic-tab justify-content-center" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="about-bootcamp-tab" data-bs-toggle="tab"
                                            href="#about-bootcamp" role="tab" aria-controls="about-bootcamp"
                                            aria-selected="false">
                                            درباره بوتکمپ
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="curriculum-tab" data-bs-toggle="tab" href="#curriculum"
                                            role="tab" aria-controls="curriculum" aria-selected="false">
                                            سرفصل ها
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                                            role="tab" aria-controls="reviews" aria-selected="false">
                                            نظرات
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="teachers-tab" data-bs-toggle="tab" href="#teachers"
                                            role="tab" aria-controls="teachers" aria-selected="false">
                                            اساتید
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content pt-40px" id="myTabContent">
                                    <div class="tab-pane fade show active" id="about-bootcamp" role="tabpanel"
                                        aria-labelledby="about-bootcamp-tab">
                                        <h3 class="fs-24 font-weight-semi-bold pb-3">آشنایی با این بوت کمپ</h3>

                                        <div id="bootcampBody">

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="curriculum" role="tabpanel"
                                        aria-labelledby="curriculum-tab">
                                        <div class="course-overview-card">
                                            <div
                                                class="curriculum-header d-flex align-items-center justify-content-between pb-4">
                                                <h3 class="fs-24 font-weight-semi-bold">سرفصل ها </h3>
                                                <div class="curriculum-duration fs-15">
                                                    <span class="curriculum-total__text me-2"><strong
                                                            class="text-black font-weight-semi-bold">مجموع:</strong>
                                                           <span id="totalEpisodesContent"> 17 </span>
                                                        قسمت
                                                    </span>
                                                    <span class="curriculum-total__hours">
                                                        <strong class="text-black font-weight-semi-bold">مدت زمان: </strong>
                                                        <span id="totalDurationContent">123</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="curriculum-content">
                                                <div id="curriculumContent" class="generic-accordion">

                                                </div>
                                                <!-- end generic-accordion -->
                                            </div>
                                            <!-- end curriculum-content -->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                        <div class="course-overview-card pt-4">
                                            <h3 class="fs-24 font-weight-semi-bold pb-4">دانشجوها چی میگن</h3>
                                            <div class="review-wrap" id="reviewsContent">


                                            </div>
                                            <!-- end review-wrap -->
                                        </div>
                                        <!-- end course-overview-card -->
                                        <div class="course-overview-card pt-4 d-none" id="reviewSubmitContainer">
                                            <h3 class="fs-24 font-weight-semi-bold pb-4">
                                                نظرتو بگو 🫂
                                            </h3>
                                            <div class="leave-rating-wrap pb-4">
                                                <div class="leave-rating leave--rating">
                                                    <input type="radio" name="rate" id="star5" />
                                                    <label for="star5" title="5 Stars"></label>
                                                    <input type="radio" name="rate" id="star4" />
                                                    <label for="star4" title="4 Stars"></label>
                                                    <input type="radio" name="rate" id="star3" />
                                                    <label for="star3" title="3 Stars"></label>
                                                    <input type="radio" name="rate" id="star2" />
                                                    <label for="star2" title="2 Stars"></label>
                                                    <input type="radio" name="rate" id="star1" />
                                                    <label for="star1" title="1 Star"></label>
                                                </div>
                                                <!-- end leave-rating -->
                                            </div>
                                            <form method="post" class="row">
                                                <!-- end input-box -->
                                                <div class="input-box col-lg-12">
                                                    <label class="label-text">کامنت</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control form--control ps-3" name="message" id="reviewMessage"
                                                            placeholder="مثلا دوره خیلی خوب بود 😚" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <!-- end input-box -->
                                                <div class="btn-box col-lg-12">
                                                    <!-- end custom-control -->
                                                    <button class="btn theme-btn" type="button" id="reviewSubmitter">
                                                        همینو بفرست
                                                    </button>
                                                </div>
                                                <!-- end btn-box -->
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="curriculum" role="tabpanel"
                                        aria-labelledby="curriculum-tab">
                                    </div>

                                    <div class="tab-pane fade" id="teachers" role="tabpanel"
                                    aria-labelledby="teachers-tab">
                                    <div class="container">
                                        <div class="row" id="teachersContent">

                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>


                        </div>
                        <!-- end course-overview-card -->

                        <!-- end course-overview-card -->
                    </div>
                    <!-- end course-details-content-wrap -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar sidebar-negative" id="sidebar">

                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end course-details-area -->
    <!--======================================
                              END COURSE DETAILS AREA
                        ======================================-->


    <div id="modalsContainer"></div>
@endsection


@section('customScripts')
    <script>
        axios.defaults.baseURL = "{{env('API_URL' , 'localhost/api')}}";
        const sidebar = document.getElementById("sidebar");
        const bootcampHeader = document.getElementById("bootcampHeader");
        const bootcampBody = document.getElementById("bootcampBody");
        const curriculum = document.getElementById("curriculumContent");
        const reviews = document.getElementById("reviewsContent");
        const reviewSubmitter = document.getElementById("reviewSubmitter");
        const teachers = document.getElementById("teachersContent");
        const totalDuration = document.getElementById("totalDurationContent");
        const totalEpisodes = document.getElementById("totalEpisodesContent");
        const modalsContainer = document.getElementById("modalsContainer");
        axios.get('/bootcamps/{{ $slug }}')
            .then(function(response) {
                let d = response.data.data;
                addSidebar(d);
                bootcampBody.innerHTML = d.body;
                bootcampHeader.innerHTML = `
                        <div class="section-heading placeholder-glow d-block">
                            <h2 class="section__title">
                                ${d.title}
                            </h2>
                            <p class="section__desc pt-2 lh-30" >
                                ${d.intro}
                            </p>
                        </div>
                        <!-- end section-heading -->
                        <div class="d-flex flex-wrap align-items-center pt-3 placeholder-glow">
                            <h6 class="ribbon ribbon-lg me-2 bg-3 text-white">
                                فروش ویژه %
                            </h6>
                            <div class="rating-wrap d-flex flex-wrap align-items-center">
                                <div class="review-stars">
                                    <span class="rating-number">${d.rate}</span>
                                    <span class="la la-star${d.rate < 1 ? '-o': ''}"></span>
                                    <span class="la la-star${d.rate < 2 ? '-o': ''}"></span>
                                    <span class="la la-star${d.rate < 3 ? '-o': ''}"></span>
                                    <span class="la la-star${d.rate < 4 ? '-o': ''}"></span> 
                                    <span class="la la-star${d.rate < 5 ? '-o': ''}"></span>
                                </div>
                                <span class="rating-total ps-1">(${d.reviews.length} نظر)</span>
                                <span class="student-total ps-2">${d.students_count} دانشجو</span>
                            </div>
                        </div>
                        <!-- end d-flex -->

                    <div class="d-flex flex-wrap align-items-center">
                        <p class="pe-3 d-flex align-items-center">
                            <svg class="svg-icon-color-gray me-1" width="16px" viewBox="0 0 24 24">
                                <path
                                    d="M23 12l-2.44-2.78.34-3.68-3.61-.82-1.89-3.18L12 3 8.6 1.54 6.71 4.72l-3.61.81.34 3.68L1 12l2.44 2.78-.34 3.69 3.61.82 1.89 3.18L12 21l3.4 1.46 1.89-3.18 3.61-.82-.34-3.68L23 12zm-10 5h-2v-2h2v2zm0-4h-2V7h2v6z">
                                </path>
                            </svg>
                            آخرین بروزرسانی ${d.updated_at} 
                        </p>
                        <p class="pe-3 d-flex align-items-center">
                            <svg class="svg-icon-color-gray me-1" width="16px" viewBox="0 0 24 24">
                                <path
                                    d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95a15.65 15.65 0 00-1.38-3.56A8.03 8.03 0 0118.92 8zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56A7.987 7.987 0 015.08 16zm2.95-8H5.08a7.987 7.987 0 014.33-3.56A15.65 15.65 0 008.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95a8.03 8.03 0 01-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z">
                                </path>
                            </svg>
                            فارسی
                        </p>
                    </div>
                    <!-- end d-flex -->
                    <div class="bread-btn-box pt-3">
                        <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 me-2 mb-2">
                            <i class="la la-heart-o me-1"></i>
                            <span class="swapping-btn" data-text-swap="Wishlisted" data-text-original="Wishlist">علاقه مندی</span>
                        </button>
                        <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 me-2 mb-2"
                            data-bs-toggle="modal" data-bs-target="#shareModal">
                            <i class="la la-share me-1"></i>اشتراک گذاری
                        </button>
                    </div>
                `;

                document.getElementById("thumbanailContainer").innerHTML = `<img src="${d.thumbnail_url}" alt="${d.title}" class="img-fluid rounded-4"/>`

                let episode_count = 0;
                d.seasons.forEach((season, index) => {
                    let seasonEpisodes = '';
                    season.episodes.forEach(episode => {
                        // video file link quiz text
                        episodeTypesIcons = {
                            video: "play-circle",
                            file: "file",
                            link: "link",
                            quiz: "tasks",
                            text: "align-right",


                        }
                        episode_count++;
                        seasonEpisodes += `<li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>  
                                                <i class="la la-${episodeTypesIcons[episode.type]} me-1"></i>
                                                ${episode.title}
                                            </span>
                                            <span>
                                                ${episode.body}    
                                            </span>
                                        </div>
                                    </li>`;

                    })
                    curriculum.innerHTML += `
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button
                                class="btn btn-link collapsed d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" data-bs-target="#collapse${index}"
                                aria-expanded="false" aria-controls="collapse${index}">
                                <i class="la la-plus"></i>
                                <i class="la la-minus"></i>
                                ${season.title}
                                <span class="fs-15 text-gray font-weight-medium">${season.episodes.length} قسمت</span>
                            </button>
                        </div>
                        <div id="collapse${index}" class="collapse" aria-labelledby="heading${index}"
                            data-bs-parent="#accordion">
                            <div class="card-body">
                                <ul class="generic-list-item">
                                    ${seasonEpisodes}
                                </ul>
                            </div>
                            <!-- end card-body -->
                        </div>
                    </div>
                    <!-- end card -->
                    `;
                });

                if (d.seasons.length == 0){
                    curriculum.innerHTML = "سرفصلای این بوت کمپ در حال آماده سازیه"
                }

                totalDuration.innerHTML = d.duration;
                totalEpisodes.innerHTML = episode_count;

                d.reviews.forEach(review => {
                    reviews.innerHTML += `
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <div class="media-img me-4 rounded-full">
                                <img class="rounded-full lazy" src="${review.user.avatar_url}"
                                    data-src="${review.user.avatar_url}" alt="User image" />
                            </div>
                            <div class="media-body">
                                <div class="d-flex flex-wrap align-items-center justify-content-between pb-1">
                                    <h5>${review.user.full_name}</h5>
                                    <div class="review-stars">
                                        <span class="la la-star${review.rating < 1 ? '-o': ''}"></span>
                                        <span class="la la-star${review.rating < 2 ? '-o': ''}"></span>
                                        <span class="la la-star${review.rating < 3 ? '-o': ''}"></span>
                                        <span class="la la-star${review.rating < 4 ? '-o': ''}"></span> 
                                        <span class="la la-star${review.rating < 5 ? '-o': ''}"></span>
                                    </div>
                                </div>
                                <span class="d-block lh-18 pb-2">${review.created_at}</span>
                                <p class="pb-2">
                                   ${review.comment}
                                </p>
                            </div>
                        </div>
                    `;
                });

                d.teachers.forEach(teacher=>{
                    teachers.innerHTML+=`
                    <div class="col-lg-6 responsive-column-half">
                        <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img
                            class="card-img-top"
                            src="${teacher.avatar_url}"
                            alt="${teacher.full_name}"
                            />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                            <a href="#">${teacher.full_name}</a>
                            </h5>
                            <p class="card-text">${teacher.role}</p>
                            <!--
                            <a
                            href="#"
                            class="btn theme-btn theme-btn-sm theme-btn-transparent mt-3"
                            >پروفایل استاد <i class="la la-arrow-right icon ms-1"></i
                            ></a>
                            -->
                        </div>
                        </div>
                        <!-- end card -->
                    </div>
                    `;
                })

                if (d.is_student)
                    document.getElementById('reviewSubmitContainer').classList.remove('d-none')

                reviewSubmitter.addEventListener('click', () => {
                    let rate = 5;
                    let is_checked = false;
                    let comment = document.getElementById("reviewMessage").value;
                    document.querySelectorAll('input[name=rate]').forEach(el => {
                        console.log(el , el.checked );
                        if (!el.checked && !is_checked) rate--;
                        else is_checked = true;

                        // console.log(el.checked)
                    })
                    console.log("ddddddddd" , rate);
                    customAlert(`${rate}`);
                    /*
                    axios.put(`/student/review/${d.id}`, {
                            comment,
                            rate
                        })
                        .then(function(response) {
                            let d = response.data;
                            customAlert(d.message);
                        }).catch(function(error) {
                            let e = error.response.data.errors;
                            e.forEach(err => {
                                customAlert(err,'error',4000)
                            })
                        }).finally(() => {
                            document.querySelectorAll('input[name=rate]').forEach(el => {
                                el.checked = false;
                            })
                            document.getElementById("reviewMessage").value = '';
                        });

                        */
                })


                // Add Modals
                modalsContainer.innerHTML += `
                    <!-- Modal -->
                    <div
                    class="modal fade modal-container"
                    id="previewModal"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="previewModalTitle"
                    aria-hidden="true"
                    >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header align-items-start border-bottom-gray">
                            <div class="pe-2">
                            <p class="pb-2 font-weight-semi-bold">ویدیو معرفی</p>
                            <h5
                                class="modal-title fs-19 font-weight-semi-bold lh-24"
                                id="previewModalTitle"
                            >
                                ${d.title}
                            </h5>
                            </div>
                            <button
                            type="button"
                            class="btn-close close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                            >
                            <span aria-hidden="true" class="la la-times"></span>
                            </button>
                        </div>
                        <!-- end modal-header -->
                        <div class="modal-body" id="modal-body">
                            ${d.intro_video}
                        </div>
                        <!-- end modal-body -->
                        </div>
                        <!-- end modal-content -->
                    </div>
                    <!-- end modal-dialog -->
                    </div>
                    <!-- end modal -->
                `;

                setTimeout(() => {
                const modalEl = document.getElementById("previewModal");

                // Initialize the modal (required for dynamic content)
                const bootstrapModal = new bootstrap.Modal(modalEl);

                // Attach the close event
                modalEl.addEventListener("hidden.bs.modal", () => {
                    // alert("test");
                    const iframe = modalEl.querySelector("iframe");
                    if (iframe) {
                        // Stop the video by resetting the src
                        const src = iframe.src;
                        iframe.src = "";      // Clear it first
                        iframe.src = src;     // Reset it
                    }
                });

                // Show the modal
                // bootstrapModal.show();
            }, 0);
            })
            .catch(function(error) {
                console.log(error);
            })
    


        const addToBasketButton = document.getElementById("addToBas")
        function buyNow(el, slug)
        {
            el.innerHTML = `
                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                <span role="status">در حال انتقال...</span>
            `;

            axios.post('/student/payment/send', {
                slugs: slug,
            })
            .then(response=>{
                let payment_url = response.data.data;
                window.location.assign(payment_url);
            });
        }
        function addToBasketF(el, slug)
        {
            addToBasket(slug);
            el.innerHTML = `
                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                <span role="status">در حال انتقال...</span>
            `;
            window.location.assign("{{route('basket')}}")
        }
        function removeFromBasketF(el, slug)
        {
            removeFromBasket(slug);
            el.setAttribute('onclick', `addToBasketF(this, '${slug}')`);
            el.innerHTML = `
                <i class="la la-shopping-cart fs-18 me-1"></i>
                <span>افزودن به سبد خرید</span>
            `;
            customAlert('از سبد خریدت حذف شد');
        }
        function addSidebar(data)
        {


            let buyingButtons = `
                <button type="button" class="btn theme-btn w-100 mb-2" onclick="removeFromBasketF(this, '${data.slug}')">
                    <i class="la la-shopping-cart fs-18 me-1"></i>
                    <spanحذف از سبد خرید</span>
                </button>
                <button type="button" class="btn theme-btn w-100 theme-btn-white mb-2" onclick="buyNow(this,'${data.slug}')">
                    <i class="la la-shopping-bag me-1"></i>
                    <span>همین الان می‌خرم</span>
                </button>
            `;
            if(data.is_student)
            {
                buyingButtons = `
                <p>شما دانشجوی این دوره هستید❤️ </p>
                <p class="my-3"> برای دریافت لایسنس دوره و گذرواژه ورود به کلاس، به اکانت <a href="https://t.me/amacodecamp_support">@amacodecamp_support </a> در تلگرام و یا شماره 
                <a href="https://wa.me/+989938383698">09938383698</a> در واتساپ پیام دهید </p>`;
            }else if(isInBasket(data.slug)){
                buyingButtons = `
                    <button type="button" class="btn theme-btn w-100 mb-2" onclick="removeFromBasketF(this, '${data.slug}')">
                        <i class="la la-trash fs-18 me-1"></i>
                        <span>حذف از سبد خرید</span>
                    </button>
                    <button type="button" class="btn theme-btn w-100 theme-btn-white mb-2" onclick="buyNow(this, '${data.slug}')">
                        <i class="la la-shopping-bag me-1"></i>
                        <span>همین الان می‌خرم</span>
                    </button>
                `;

                document.getElementById("buyNowBtn").innerHTML = `
                    <button type="button" class="btn theme-btn col-10 mx-auto theme-btn mb-2" onclick="buyNow(this, '${data.slug}')">
                        <i class="la la-shopping-bag me-1"></i>
                        <span>همین الان می‌خرم</span>
                    </button>
                `;
            }else{//not student, not in basket
                buyingButtons = `
                    <button type="button" class="btn theme-btn w-100 mb-2" onclick="addToBasketF(this, '${data.slug}')">
                        <i class="la la-shopping-cart fs-18 me-1"></i>
                        <span>افزودن به سبد خرید</span>
                    </button>
                    <button type="button" class="btn theme-btn w-100 theme-btn-white mb-2" onclick="buyNow(this, '${data.slug}')">
                        <i class="la la-shopping-bag me-1"></i>
                        <span>همین الان می‌خرم</span>
                    </button>
                `;

                document.getElementById("buyNowBtn").innerHTML = `
                    <button type="button" class="btn theme-btn col-10 mx-auto theme-btn mb-2" onclick="buyNow(this, '${data.slug}')">
                        <i class="la la-shopping-bag me-1"></i>
                        <span>همین الان می‌خرم</span>
                    </button>
                `;

                
            }

            let tagsHTML = '';
            data.tags.forEach(tag=>{
                let url = `{{route('bootcamps.index')}}?tags=${tag.name}`;
                tagsHTML += `
                <li class="me-2"><a href="${url}">${tag.name}</a></li>
                `;
            })
            sidebar.innerHTML = `
            <div class="card card-item">
                        <div class="card-body">
                            <div class="preview-course-video">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#previewModal">
                                    <img src="${data.thumbnail_url}" data-src="${data.thumbnail_url}"
                                        alt="course-img" class="w-100 rounded lazy" />
                                    <div class="preview-course-video-content">
                                        <div class="overlay"></div>
                                        <div class="play-button">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                viewBox="-307.4 338.8 91.8 91.8"
                                                style="
                        enable-background: new -307.4 338.8 91.8 91.8;
                        "
                                                xml:space="preserve">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: #ffffff;
                                                        border-radius: 100px;
                                                    }

                                                    .st1 {
                                                        fill: #000000;
                                                    }
                                                </style>
                                                <g>
                                                    <circle class="st0" cx="-261.5" cy="384.7" r="45.9">
                                                    </circle>
                                                    <path class="st1"
                                                        d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                        <p class="fs-15 font-weight-bold text-white pt-3">
                                            مشاهده ویدیوی معرفی
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- end preview-course-video -->
                            <div class="preview-course-feature-content pt-40px">
                                <p class="d-flex align-items-center pb-2">
                                    <span class="fs-35 font-weight-semi-bold text-black" id="price_final">${data.price_off.toLocaleString('en-US')}</span>
                                    <span class="before-price mx-1" id="price_real">${data.off ? data.price.toLocaleString('en-US') : ""}</span>
                                    <span class="price-discount" id="price_off">${data.off ? (data.off.percent ? data.off.percent + "%" : "") : ""}</span>
                                </p>
                                <p class="preview-price-discount-text pb-35px">
                                    <span class="text-color-3">${data.capacity} نفر</span>
                                    <span>ظرفیت مونده</span>
                                </p>
                                <div class="buy-course-btn-box">
                                    ${buyingButtons}
                                </div>
                                <p class="fs-14 text-center pb-4">
                                    ضمانت بازگشت وجه درصورت عدم رضایت
                                </p>
                                <!-- end preview-course-incentives -->
                            </div>
                            <!-- end preview-course-content -->
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">اطلاعات دوره</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item generic-list-item-flash">
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-clock me-2 text-color"></i>مدت دوره</span>
                                    ${data.duration}
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-play-circle-o me-2 text-color"></i>جلسات</span>
                                    ${data.lessons}
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-file-text-o me-2 text-color"></i>آزمونک</span>
                                    ${data.quizes}
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-bolt me-2 text-color"></i>سطح</span>
                                    ${data.level}
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-eye me-2 text-color"></i>پشتیبان</span>
                                    دارد
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-language me-2 text-color"></i>زبان</span>
                                    فارسی
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-lightbulb me-2 text-color"></i>دسته بندی</span>
                                    ${data.category}
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-users me-2 text-color"></i>دانشجو</span>
                                    ${100-data.capacity}
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <span><i class="la la-certificate me-2 text-color"></i>مدرک</span>${data.certification ? 'دارد' : 'ندارد'}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">بوتکمپ های مرتبط</h3>
                            <div class="divider"><span></span></div>
                            {{-- <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                <a href="course-details.html" class="media-img">
                                    <img class="me-3 lazy" src="images/img-loading.png"
                                        data-src="images/small-img-4.jpg" alt="Related course image" />
                                </a>
                                <div class="media-body">
                                    <h5 class="fs-15">
                                        <a href="course-details.html">مقدمة LearnPress - LMS plugin</a>
                                    </h5>
                                    <span class="d-block lh-18 py-1 fs-14">قمران أحمد</span>
                                    <p class="text-black font-weight-semi-bold lh-18 fs-15">
                                        حر
                                    </p>
                                </div>
                            </div> --}}
                            <div class="view-all-course-btn-box">
                                <a href="{{ route('bootcamps.index') }}" class="btn theme-btn w-100">
                                    <span>مشاهده همه بوتکمپ ها</span><i class="la la-arrow-right icon ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">برچسب ها</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item generic-list-item-boxed d-flex flex-wrap fs-15">
                                ${tagsHTML}
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->

                    
            `;
        }
    </script>
@endsection
