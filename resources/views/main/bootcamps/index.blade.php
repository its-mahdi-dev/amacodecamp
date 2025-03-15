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
                        بالطبع الشريط الجانبي الأيمن
                    </h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">منزل، بيت</a></li>
                    <li>الدورات</li>
                    <li>بالطبع الشريط الجانبي الأيمن</li>
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
                        وجدنا <span class="text-black"> 56 </span> دورة تدريبية متاحة لك
                    </p>
                    <div class="d-flex flex-wrap align-items-center">
                        <ul class="filter-nav me-3">
                            <li>
                                <a href="course-grid.html" data-toggle="tooltip" data-placement="top" title="Grid View"
                                    class="active"><span class="la la-th-large"></span></a>
                            </li>
                            <li>
                                <a href="course-list.html" data-toggle="tooltip" data-placement="top"
                                    title="List View"><span class="la la-list"></span></a>
                            </li>
                        </ul>
                        <div class="select-container select--container">
                            <select class="select-container-select">
                                <option value="all-category">كل الفئات</option>
                                <option value="newest">أحدث الدورات</option>
                                <option value="oldest">أقدم الدورات</option>
                                <option value="high-rated">أعلى تصنيف</option>
                                <option value="popular-courses">الدورات الشعبية</option>
                                <option value="high-to-low">السعر الاعلى الى الادنى</option>
                                <option value="low-to-high">السعر من الارخص للاعلى</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- end filter-bar-inner -->
            </div>
            <!-- end filter-bar -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">مجال البحث</h3>
                                <div class="divider"><span></span></div>
                                <form method="post">
                                    <div class="form-group mb-0">
                                        <input class="form-control form--control ps-3" type="text" name="search"
                                            placeholder="البحث في الدورات" />
                                        <span class="la la-search search-icon"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">التقييمات</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-radio mb-1 fs-15">
                                    <input type="radio" class="custom-control-input" id="fiveStarRating"
                                        name="radio-stacked" required />
                                    <label class="custom-control-label custom--control-label" for="fiveStarRating">
                                        <span class="rating-wrap d-flex align-items-center">
                                            <span class="review-stars">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </span>
                                            <span class="rating-total ps-1"><span
                                                    class="me-1 text-black">5.0</span>(20,230)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio mb-1 fs-15">
                                    <input type="radio" class="custom-control-input" id="fourStarRating"
                                        name="radio-stacked" required />
                                    <label class="custom-control-label custom--control-label" for="fourStarRating">
                                        <span class="rating-wrap d-flex align-items-center">
                                            <span class="review-stars">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </span>
                                            <span class="rating-total ps-1"><span class="me-1 text-black">4.5 &
                                                    فوق</span>(10,230)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio mb-1 fs-15">
                                    <input type="radio" class="custom-control-input" id="threeStarRating"
                                        name="radio-stacked" required />
                                    <label class="custom-control-label custom--control-label" for="threeStarRating">
                                        <span class="rating-wrap d-flex align-items-center">
                                            <span class="review-stars">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </span>
                                            <span class="rating-total ps-1"><span class="me-1 text-black">3.0 &
                                                    فوق</span>(7,230)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio mb-1 fs-15">
                                    <input type="radio" class="custom-control-input" id="twoStarRating"
                                        name="radio-stacked" required />
                                    <label class="custom-control-label custom--control-label" for="twoStarRating">
                                        <span class="rating-wrap d-flex align-items-center">
                                            <span class="review-stars">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </span>
                                            <span class="rating-total ps-1"><span class="me-1 text-black">2.0 &
                                                    فوق</span>(5,230)</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio mb-1 fs-15">
                                    <input type="radio" class="custom-control-input" id="oneStarRating"
                                        name="radio-stacked" required />
                                    <label class="custom-control-label custom--control-label" for="oneStarRating">
                                        <span class="rating-wrap d-flex align-items-center">
                                            <span class="review-stars">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </span>
                                            <span class="rating-total ps-1"><span class="me-1 text-black">1.0 &
                                                    فوق</span>(3,230)</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">فئات</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="catCheckbox">
                                        اعمال<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox2" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="catCheckbox2">
                                        التصميم <span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox3" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="catCheckbox3">
                                        الرسوم المتحركة<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox4" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="catCheckbox4">
                                        تصميم اللعبة<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="collapse" id="collapseMore">
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="catCheckbox5" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="catCheckbox5">
                                            التصميم الجرافيكي
                                            <span class="ms-1 text-gray">(12,300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="catCheckbox6" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="catCheckbox6">
                                            الطباعة<span class="ms-1 text-gray">(12,300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="catCheckbox7" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="catCheckbox7">
                                            تطوير الشبكة
                                            <span class="ms-1 text-gray">(12,300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="catCheckbox8" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="catCheckbox8">
                                            التصوير<span class="ms-1 text-gray">(12,300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="catCheckbox9" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="catCheckbox9">
                                            تمويل<span class="ms-1 text-gray">(12,300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                </div>
                                <!-- end collapse -->
                                <a class="collapse-btn collapse--btn fs-15" data-bs-toggle="collapse"
                                    href="#collapseMore" role="button" aria-expanded="false"
                                    aria-controls="collapseMore">
                                    <span class="collapse-btn-hide">أظهر المزيد<i
                                            class="la la-angle-down ms-1 fs-14"></i></span>
                                    <span class="collapse-btn-show">عرض أقل<i
                                            class="la la-angle-up ms-1 fs-14"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">مدة الفيديو</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="videoDurationCheckbox"
                                        required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="videoDurationCheckbox">
                                        0-2 ساعات<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="videoDurationCheckbox2"
                                        required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="videoDurationCheckbox2">
                                        3-6 ساعات<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="videoDurationCheckbox3"
                                        required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="videoDurationCheckbox3">
                                        7-14 ساعات<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="videoDurationCheckbox4"
                                        required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="videoDurationCheckbox4">
                                        16+ ساعات<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">مستوى</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="levelCheckbox" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="levelCheckbox">
                                        جميع المستويات<span class="ms-1 text-gray">(20,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="levelCheckbox2" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="levelCheckbox2">
                                        مبتدئ<span class="ms-1 text-gray">(5,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="levelCheckbox3" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="levelCheckbox3">
                                        متوسط<span class="ms-1 text-gray">(3,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="levelCheckbox4" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="levelCheckbox4">
                                        خبير<span class="ms-1 text-gray">(1,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">لغة</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="lanCheckbox" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="lanCheckbox">
                                        English<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="laCheckbox2" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="laCheckbox2">
                                        Português<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="lanCheckbox3" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="lanCheckbox3">
                                        Español<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="lanCheckbox4" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="lanCheckbox4">
                                        Türkçe<span class="ms-1 text-gray">(12,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="collapse" id="collapseMoreTwo">
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="lanCheckbox5" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="lanCheckbox5">
                                            Français<span class="ms-1 text-gray">(12,300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="lanCheckbox6" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="lanCheckbox6">
                                            中文<span class="ms-1 text-gray">(12,300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="lanCheckbox7" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="lanCheckbox7">
                                            Deutsch<span class="ms-1 text-gray">(12,300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="lanCheckbox8" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="lanCheckbox8">
                                            日本語<span class="ms-1 text-gray">(300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="lanCheckbox9" required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="lanCheckbox9">
                                            Polski<span class="ms-1 text-gray">(300)</span>
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                </div>
                                <!-- end collapse -->
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
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">حسب التكلفة</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="priceCheckbox" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="priceCheckbox">
                                        مدفوع<span class="ms-1 text-gray">(19,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="priceCheckbox2" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="priceCheckbox2">
                                        حر<span class="ms-1 text-gray">(1,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="priceCheckbox3" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="priceCheckbox3">
                                        الجميع <span class="ms-1 text-gray">(20,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">المدربين</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="instructorCheckbox"
                                        required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="instructorCheckbox">
                                        كل مدرس
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="instructorCheckbox2"
                                        required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="instructorCheckbox2">
                                        عاطف جابر
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="instructorCheckbox3"
                                        required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="instructorCheckbox3">
                                        عاطف جابر
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="instructorCheckbox4"
                                        required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="instructorCheckbox4">
                                        عاطف جابر
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="collapse" id="collapseMoreThree">
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="instructorCheckbox5"
                                            required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="instructorCheckbox5">
                                            عاطف جابر
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="instructorCheckbox6"
                                            required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="instructorCheckbox6">
                                            عاطف جابر
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="instructorCheckbox7"
                                            required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="instructorCheckbox7">
                                            عاطف جابر
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="instructorCheckbox8"
                                            required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="instructorCheckbox8">
                                            عاطف جابر
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                    <div class="custom-control custom-checkbox mb-1 fs-15">
                                        <input type="checkbox" class="custom-control-input" id="instructorCheckbox9"
                                            required />
                                        <label class="custom-control-label custom--control-label text-black"
                                            for="instructorCheckbox9">
                                            عاطف جابر
                                        </label>
                                    </div>
                                    <!-- end custom-control -->
                                </div>
                                <!-- end collapse -->
                                <a class="collapse-btn collapse--btn fs-15" data-bs-toggle="collapse"
                                    href="#collapseMoreThree" role="button" aria-expanded="false"
                                    aria-controls="collapseMoreThree">
                                    <span class="collapse-btn-hide">أظهر المزيد<i
                                            class="la la-angle-down ms-1 fs-14"></i></span>
                                    <span class="collapse-btn-show">عرض أقل<i
                                            class="la la-angle-up ms-1 fs-14"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">سمات</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="featureCheckbox" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="featureCheckbox">
                                        التسميات التوضيحية
                                        <span class="ms-1 text-gray">(20,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="featureCheckbox2" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="featureCheckbox2">
                                        الإختبارات<span class="ms-1 text-gray">(5,300)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="featureCheckbox3" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="featureCheckbox3">
                                        تمارين الترميز<span class="ms-1 text-gray">(12)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="featureCheckbox4" required />
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="featureCheckbox4">
                                        تمرس على الاختبارات<span class="ms-1 text-gray">(200)</span>
                                    </label>
                                </div>
                                <!-- end custom-control -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-8 mb-5">
                    <div class="row" id="bootcampsContainer">
                        <div class="col-lg-6 responsive-column-half">
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
                        </div>
                        <!-- end col-lg-6 -->
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
                    </div>
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
                    console.log(url);
                    bootcampsContainer.innerHTML += `
                    <div class="col-lg-6 responsive-column-half">
                            <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                <div class="card-image">
                                    <a href="course-details.html" class="d-block">
                                        <img class="card-img-top lazy" src="/assets/images/img-loading.png"
                                            data-src="/assets/images/img8.jpg" alt="Card image cap" />
                                    </a>
                                </div>
                                <!-- end card-image -->
                                <div class="card-body">
                                    <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">
                                        جميع المستويات
                                    </h6>
                                    <h5 class="card-title">
                                        <a href="${url}">${bootcamp.title}</a>
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
                    `;
                });

            })
            .catch(function(error) {
                console.log(error);
            })
    </script>
@endsection
