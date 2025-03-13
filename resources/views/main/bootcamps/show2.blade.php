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
                        <div class="section-heading placeholder-glow d-block">
                            <h2 class="section__title placeholder d-block">
                            </h2>
                            <p class="section__desc pt-2 lh-30 placeholder d-block" >
                            </p>
                        </div>
                        <!-- end section-heading -->
                        <div class="d-flex flex-wrap align-items-center pt-3 placeholder-glow">
                            <h6 class="ribbon ribbon-lg me-2 bg-3 text-white">
                                کیر
                            </h6>
                            <div class="rating-wrap d-flex flex-wrap align-items-center">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <span class="rating-total ps-1">(20,230 التقييمات)</span>
                                <span class="student-total ps-2 placeholder">تعداد دانشجو</span>
                            </div>
                        </div>
                        <!-- end d-flex -->



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
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pb-5">
                    <div class="course-details-content-wrap pt-90px">
                  
                        <!-- end course-overview-card -->
                        <div class="course-overview-card">
                            <h3 class="fs-24 font-weight-semi-bold pb-3">آشنایی با این بوت کمپ</h3>

                            <div id="bootcampBody">

                            </div>
            
                        </div>
                        <!-- end course-overview-card -->
                      
                        <!-- end course-overview-card -->
                        <div class="course-overview-card pt-4">
                            <h3 class="fs-24 font-weight-semi-bold pb-4">
                                اشترى الطلاب أيضًا
                            </h3>
                            <div class="view-more-carousel owl-action-styled">
                                <div class="card card-item card-item-list-layout border border-gray shadow-none">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top" src="images/img8.jpg" alt="Card image cap" />
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
                                <div class="card card-item card-item-list-layout border border-gray shadow-none">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top" src="images/img9.jpg" alt="Card image cap" />
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
                                <div class="card card-item card-item-list-layout border border-gray shadow-none">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top" src="images/img8.jpg" alt="Card image cap" />
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
                                <div class="card card-item card-item-list-layout border border-gray shadow-none">
                                    <div class="card-image">
                                        <a href="course-details.html" class="d-block">
                                            <img class="card-img-top" src="images/img9.jpg" alt="Card image cap" />
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
                            <!-- end view-more-carousel -->
                        </div>
                        <!-- end course-overview-card -->
                        <div class="course-overview-card pt-4">
                            <h3 class="fs-24 font-weight-semi-bold pb-4">عن المدرب</h3>
                            <div class="instructor-wrap">
                                <div class="media media-card">
                                    <div class="instructor-img">
                                        <a href="teacher-detail.html" class="media-img d-block">
                                            <img class="lazy" src="images/img-loading.png"
                                                data-src="images/small-avatar-1.jpg" alt="Avatar image" />
                                        </a>
                                        <ul class="generic-list-item pt-3">
                                            <li>
                                                <i class="la la-star me-2 text-color-3"></i> 4.6 تقييم
                                                المدرب
                                            </li>
                                            <li>
                                                <i class="la la-user me-2 text-color-3"></i> 45,786
                                                الطلاب
                                            </li>
                                            <li>
                                                <i class="la la-comment-o me-2 text-color-3"></i>
                                                2,533 المراجعات
                                            </li>
                                            <li>
                                                <i class="la la-play-circle-o me-2 text-color-3"></i>
                                                24 الدورات
                                            </li>
                                            <li>
                                                <a href="teacher-detail.html">عرض جميع الدورات</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end instructor-img -->
                                    <div class="media-body">
                                        <h5><a href="teacher-detail.html">تيم بوشالكا</a></h5>
                                        <span class="d-block lh-18 pt-2 pb-3">انضم منذ ٤ سنوات</span>
                                        <p class="text-black lh-18 pb-3">
                                            Java Python Android and C# Expert Developer - 878K+
                                            students
                                        </p>
                                        <p class="pb-3">
                                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء
                                            لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص
                                            أو شكل توضع الفقرات في الصفحة التي يقرأها. الهدف من
                                            استخدام لوريم إيبسوم هو أنه يحتوي على توزيع طبيعي -إلى
                                            حد ما- للأحرف ، بدلاً من استخدام "يوجد محتوى هنا
                                        </p>
                                        <div class="collapse" id="collapseMoreTwo">
                                            <p class="pb-3">
                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء
                                                لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
                                                للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. الهدف
                                                من الاستخدام هو أنه يحتوي على نسبة طبيعية إلى حد ما
                                            </p>
                                            <p class="pb-3">
                                                إذا كنت تريد أن تصبح محللًا ماليًا أو مديرًا ماليًا أو
                                                محلل FP & A أو مصرفيًا استثماريًا أو مدير أعمال أو
                                                رائد أعمال أو محلل استخبارات أعمال أو محلل بيانات أو
                                                عالم بيانات ،
                                                <strong class="text-black font-weight-semi-bold">دورات Tim Buchalka هي
                                                    الدورة المثالية للبدء</strong>.
                                            </p>
                                        </div>
                                        <a class="collapse-btn collapse--btn fs-15" data-bs-toggle="collapse"
                                            href="#collapseMoreTwo" role="button" aria-expanded="false"
                                            aria-controls="collapseMoreTwo">
                                            <span class="collapse-btn-hide">أظهر المزيد<i
                                                    class="la la-angle-down ms-1 fs-14"></i></span>
                                            <span class="collapse-btn-show">عرض أقل<i
                                                    class="la la-angle-up ms-1 fs-14"></i></span>
                                        </a>
                                    </div>  
                                </div>
                            </div>
                            <!-- end instructor-wrap -->
                        </div>
                        <!-- end course-overview-card -->
                        <div class="course-overview-card pt-4">
                            <h3 class="fs-24 font-weight-semi-bold pb-4">دانشجوها چی میگن</h3>
                            <div class="review-wrap" id="reviews">
                                
                               
                            </div>
                            <!-- end review-wrap -->
                        </div>
                        <!-- end course-overview-card -->
                        <div class="course-overview-card pt-4">
                            <h3 class="fs-24 font-weight-semi-bold pb-4">
                                إضافة إلى استعراض
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
                                <div class="input-box col-lg-6">
                                    <label class="label-text">اسم</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="text" name="name"
                                            placeholder="اسم" />
                                        <span class="la la-user input-icon"></span>
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box col-lg-6">
                                    <label class="label-text">بريد إلكتروني</label>
                                    <div class="form-group">
                                        <input class="form-control form--control" type="email" name="email"
                                            placeholder="بريد إلكتروني" />
                                        <span class="la la-envelope input-icon"></span>
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="input-box col-lg-12">
                                    <label class="label-text">رسالة</label>
                                    <div class="form-group">
                                        <textarea class="form-control form--control ps-3" name="message" placeholder="رسالة" rows="5"></textarea>
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box col-lg-12">
                                    <div class="custom-control custom-checkbox mb-3 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="saveCheckbox" required />
                                        <label class="custom-control-label custom--control-label" for="saveCheckbox">
                                            احفظ اسمي ، والبريد الإلكتروني في هذا المتصفح لاستخدامها
                                            في المرة القادمة في تعليقي.
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <button class="btn theme-btn" type="submit">
                                        إرسال المراجعة
                                    </button>
                                </div>
                                <!-- end btn-box -->
                            </form>
                        </div>
                        <!-- end course-overview-card -->
                    </div>
                    <!-- end course-details-content-wrap -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar sidebar-negative">
                        <div class="card card-item">
                            <div class="card-body">
                                <div class="preview-course-video">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#previewModal">
                                        <img src="images/img-loading.png" data-src="images/preview-img.jpg"
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
                                                معاينة هذه الدورة
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- end preview-course-video -->
                                <div class="preview-course-feature-content pt-40px">
                                    <p class="d-flex align-items-center pb-2">
                                        <span class="fs-35 font-weight-semi-bold text-black">$76.99</span>
                                        <span class="before-price mx-1">$104.99</span>
                                        <span class="price-discount">24% off</span>
                                    </p>
                                    <p class="preview-price-discount-text pb-35px">
                                        <span class="text-color-3">4 أيام</span>غادر عند هذا
                                        السعر!
                                    </p>
                                    <div class="buy-course-btn-box">
                                        <button type="button" class="btn theme-btn w-100 mb-2">
                                            <i class="la la-shopping-cart fs-18 me-1"></i>أضف إلى
                                            السلة
                                        </button>
                                        <button type="button" class="btn theme-btn w-100 theme-btn-white mb-2">
                                            <i class="la la-shopping-bag me-1"></i>شراء هذه الدورة
                                        </button>
                                    </div>
                                    <p class="fs-14 text-center pb-4">
                                        ضمان استرداد الأموال لمدة 30 يومًا
                                    </p>
                                    <div class="preview-course-incentives">
                                        <h3 class="card-title fs-18 pb-2">تشمل هذه الدورة</h3>
                                        <ul class="generic-list-item pb-3">
                                            <li>
                                                <i class="la la-play-circle-o me-2 text-color"></i>2.5
                                                ساعات الفيديو عند الطلب
                                            </li>
                                            <li>
                                                <i class="la la-file me-2 text-color"></i>34 مقالات
                                            </li>
                                            <li>
                                                <i class="la la-file-text me-2 text-color"></i>12
                                                الموارد القابلة للتنزيل
                                            </li>
                                            <li>
                                                <i class="la la-code me-2 text-color"></i>51 تمارين
                                                الترميز
                                            </li>
                                            <li>
                                                <i class="la la-key me-2 text-color"></i>وصول كامل مدى
                                                الحياة
                                            </li>
                                            <li>
                                                <i class="la la-television me-2 text-color"></i>الوصول
                                                على الهاتف المحمول والتلفزيون
                                            </li>
                                            <li>
                                                <i class="la la-certificate me-2 text-color"></i>شهادة
                                                إتمام
                                            </li>
                                        </ul>
                                        <div class="section-block"></div>
                                        <div class="buy-for-team-container pt-4">
                                            <h3 class="fs-18 font-weight-semi-bold pb-2">
                                                تدريب 5 أشخاص أو أكثر؟
                                            </h3>
                                            <p class="lh-24 pb-3">
                                                احصل على وصول فريقك إلى أكثر من 3000 دورة تدريبية من
                                                أفضل دورات Aduca في أي وقت وفي أي مكان.
                                            </p>
                                            <a href="for-business.html"
                                                class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30 w-100">جرب
                                                Aduca للأعمال</a>
                                        </div>
                                    </div>
                                    <!-- end preview-course-incentives -->
                                </div>
                                <!-- end preview-course-content -->
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">ميزات الدورة</h3>
                                <div class="divider"><span></span></div>
                                <ul class="generic-list-item generic-list-item-flash">
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-clock me-2 text-color"></i>مدة</span>
                                        2.5 ساعات
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-play-circle-o me-2 text-color"></i>محاضرات</span>
                                        17
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-file-text-o me-2 text-color"></i>موارد</span>
                                        12
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-bolt me-2 text-color"></i>الإختبارات</span>
                                        26
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-eye me-2 text-color"></i>معاينة
                                            الدروس</span>
                                        4
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-language me-2 text-color"></i>لغة</span>
                                        English
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-lightbulb me-2 text-color"></i>مستوى
                                            المهارة</span>كل المستويات
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-users me-2 text-color"></i>الطلاب</span>
                                        30,506
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span><i class="la la-certificate me-2 text-color"></i>شهادة</span>نعم
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">فئات الدورة</h3>
                                <div class="divider"><span></span></div>
                                <ul class="generic-list-item">
                                    <li><a href="#">تطوير</a></li>
                                    <li><a href="#">تصميم المواقع</a></li>
                                    <li><a href="#">تقنية</a></li>
                                    <li><a href="#">برمجة</a></li>
                                    <li><a href="#">الخلفية</a></li>
                                    <li><a href="#">تسويق</a></li>
                                    <li><a href="#">التصوير</a></li>
                                    <li><a href="#">نهاية المقدمة</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">الدورات ذات الصلة</h3>
                                <div class="divider"><span></span></div>
                                <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                    <a href="course-details.html" class="media-img">
                                        <img class="me-3 lazy" src="images/img-loading.png"
                                            data-src="images/small-img-2.jpg" alt="Related course image" />
                                    </a>
                                    <div class="media-body">
                                        <h5 class="fs-15">
                                            <a href="course-details.html">دورة JavaScript الكاملة 2021</a>
                                        </h5>
                                        <span class="d-block lh-18 py-1 fs-14">قمران أحمد</span>
                                        <p class="text-black font-weight-semi-bold lh-18 fs-15">
                                            $12.99 <span class="before-price fs-14">$129.99</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end media -->
                                <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                                    <a href="course-details.html" class="media-img">
                                        <img class="me-3 lazy" src="images/img-loading.png"
                                            data-src="images/small-img-3.jpg" alt="Related course image" />
                                    </a>
                                    <div class="media-body">
                                        <h5 class="fs-15">
                                            <a href="course-details.html">تعلم jQuery Mobile للمبتدئين</a>
                                        </h5>
                                        <span class="d-block lh-18 py-1 fs-14">قمران أحمد</span>
                                        <p class="text-black font-weight-semi-bold lh-18 fs-15">
                                            $129.99
                                        </p>
                                    </div>
                                </div>
                                <!-- end media -->
                                <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
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
                                </div>
                                <!-- end media -->
                                <div class="view-all-course-btn-box">
                                    <a href="course-grid.html" class="btn theme-btn w-100">
                                        عرض جميع الدورات<i class="la la-arrow-right icon ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">علامات الدورة</h3>
                                <div class="divider"><span></span></div>
                                <ul class="generic-list-item generic-list-item-boxed d-flex flex-wrap fs-15">
                                    <li class="me-2"><a href="#">مبتدئ</a></li>
                                    <li class="me-2"><a href="#">متقدم</a></li>
                                    <li class="me-2"><a href="#">نصائح</a></li>
                                    <li class="me-2"><a href="#">محل تصوير</a></li>
                                    <li class="me-2"><a href="#">برمجة</a></li>
                                    <li class="me-2"><a href="#">الخلفية</a></li>
                                    <li class="me-2"><a href="#">حسابهم الخاص</a></li>
                                    <li class="me-2"><a href="#">نهاية المقدمة</a></li>
                                    <li class="me-2"><a href="#">تقنية</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end card -->
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

    <!--======================================
          START RELATED COURSE AREA
    ======================================-->
    <section class="related-course-area bg-gray pt-60px pb-60px">
        <div class="container">
            <div class="related-course-wrap">
                <h3 class="fs-28 font-weight-semi-bold pb-35px text-start">
                    المزيد من الدورات عن طريق<a href="teacher-detail.html" class="text-color hover-underline">
                        تيم بوشالكا</a>
                </h3>
                <div class="view-more-carousel-2 owl-action-styled">
                    <div class="card card-item">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top" src="images/img8.jpg" alt="Card image cap" />
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">الأكثر مبيعا</div>
                                <div class="course-badge blue">-39%</div>
                            </div>
                        </div>
                        <!-- end card-image -->
                        <div class="card-body">
                            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">جميع المستويات</h6>
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
                    <div class="card card-item">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top" src="images/img9.jpg" alt="Card image cap" />
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge red">متميز</div>
                            </div>
                        </div>
                        <!-- end card-image -->
                        <div class="card-body">
                            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">جميع المستويات</h6>
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
                                <p class="card-price text-black font-weight-bold">129.99</p>
                                <div class="icon-element icon-element-sm shadow-sm cursor-pointer"
                                    title="Add to Wishlist">
                                    <i class="la la-heart-o"></i>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div class="card card-item">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top" src="images/img8.jpg" alt="Card image cap" />
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">الأكثر مبيعا</div>
                                <div class="course-badge blue">-39%</div>
                            </div>
                        </div>
                        <!-- end card-image -->
                        <div class="card-body">
                            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">جميع المستويات</h6>
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
                    <div class="card card-item">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top" src="images/img9.jpg" alt="Card image cap" />
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge red">متميز</div>
                            </div>
                        </div>
                        <!-- end card-image -->
                        <div class="card-body">
                            <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">جميع المستويات</h6>
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
                                <p class="card-price text-black font-weight-bold">129.99</p>
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
                <!-- end view-more-carousel -->
            </div>
            <!-- end related-course-wrap -->
        </div>
        <!-- end container -->
    </section>
    <!-- end related-course-area -->
    <!--======================================
          END RELATED COURSE AREA
    ======================================-->

    <!--======================================
          START CTA AREA
    ======================================-->
    <section class="cta-area pt-60px pb-60px position-relative overflow-hidden">
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="cta-content-wrap py-4 d-flex flex-wrap align-items-center">
                        <svg class="flex-shrink-0 me-4" width="70" viewBox="0 -48 496 496"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0">
                            </path>
                            <path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"></path>
                            <path
                                d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0">
                            </path>
                            <path
                                d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0">
                            </path>
                            <path d="m152 288h16v80h-16zm0 0"></path>
                            <path d="m120 288h16v80h-16zm0 0"></path>
                            <path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0"></path>
                        </svg>
                        <div class="section-heading text-start">
                            <h2 class="section__title mb-1 fs-22">
                                كن مدرسًا ، شارك معرفتك
                            </h2>
                            <p class="section__desc">
                                أنشئ دورة فيديو عبر الإنترنت ، وقم بالوصول إلى الطلاب في جميع
                                أنحاء العالم ، واكسب المال
                            </p>
                        </div>
                        <!-- end section-heading -->
                    </div>
                </div>
                <!-- end col-lg-9 -->
                <div class="col-lg-3">
                    <div class="cta-btn-box text-end">
                        <a href="become-a-teacher.html" class="btn theme-btn">التكنولوجيا في Aduca
                            <i class="la la-arrow-right icon ms-1"></i>
                        </a>
                    </div>
                </div>
                <!-- end col-lg-3 -->
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
@endsection

@section('customScripts')
    <script>
        axios.defaults.baseURL = "http://api.amacodecamp.test";

        const bootcampHeader = document.getElementById("bootcampHeader");
        const bootcampBody = document.getElementById("bootcampBody");
        const curriculum = document.getElementById("curriculum");
        const reviews = document.getElementById("reviews");
        axios.get('/bootcamps/{{ $slug }}')
            .then(function(response) {
                let d = response.data.data;
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
                        <p class="pt-2 pb-1">
                        انشأ من قبل
                        <a href="teacher-detail.html" class="text-color hover-underline">تيم بوشالكا</a>
                    </p>
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
                            English
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
                

                d.seasons.forEach((season, index) => {
                    let seasonEpisodes = '';
                    season.episodes.forEach(episode=>{
                        // video file link quiz text
                        episodeTypesIcons = {
                            video: "play-circle",
                            file: "file",
                            link: "link",
                            quiz: "tasks",
                            text: "align-right",


                        }
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
                                <span class="fs-15 text-gray font-weight-medium">6 محاضرات</span>
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


                d.reviews.forEach(review=>{
                    reviews.innerHTML += `
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <div class="media-img me-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png"
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
                })

            })
            .catch(function(error) {
                console.log(error);
            })
    </script>
@endsection
