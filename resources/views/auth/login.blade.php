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
                    <h2 class="section__title text-white">وارد شو<h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">خانه</a></li>
                    <li>پیجامون</li>
                    <li>ورود</li>
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
                                 START CONTACT AREA
                            ================================= -->
    <section class="contact-area section--padding position-relative">
        <span class="ring-shape ring-shape-1"></span>
        <span class="ring-shape ring-shape-2"></span>
        <span class="ring-shape ring-shape-3"></span>
        <span class="ring-shape ring-shape-4"></span>
        <span class="ring-shape ring-shape-5"></span>
        <span class="ring-shape ring-shape-6"></span>
        <span class="ring-shape ring-shape-7"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title text-center fs-24 lh-35 pb-4 theme-font-2">
                                خوش اومدی رفیق!
                            </h3>
                            <div class="section-block"></div>
                            <form method="post" class="pt-4">
                                <div class="input-box">
                                    <label class="label-text">شمارت</label>
                                    <div class="form-group">
                                        <input class="form-control form--control text-end" type="text" pattern="[0-9]"
                                            name="name" placeholder="مثلا  :  09123456789" id="phone" />
                                        <span class="la la-phone input-icon"></span>
                                    </div>
                                </div>
                                <!-- end input-box -->
                                <div class="btn-box">
                                    <div class="d-sm-flex align-items-center justify-content-between pb-4">

                                        <button class="btn theme-btn " type="button" id="getOTP">
                                            دریافت کد <i class="la la-arrow-right icon ms-1"></i>
                                        </button>
                                        <p class="fs-14 pt-2">
                                            اگه از قبل حساب نداری هم فرقی نداره
                                        </p>
                                    </div>
                                    <!-- end btn-box -->
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact-area -->
    <!-- ================================
                                 END CONTACT AREA
                            ================================= -->
@endsection


@section('customScripts')
    {{-- @dd(request()) --}}
    <script>
        console.log("{{ session()->token() }}")
        console.log("{{ request()->cookie('XSRF-TOKEN') }}")
        axios.defaults.baseURL = "http://api.amacodecamp.test";
        // axios.defaults.withCredentials = true; // ✅ Allow cookies to be sent
        // axios.defaults.withXSRFToken = true;
        // axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        // axios.defaults.headers.common['X-XSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


        $("#getOTP").click(function() {
            const phone = $("#phone").val();


            axios.post('/login/send', {
                    phone: phone
                })
                .then(response => console.log(response.data))
                .catch(error => console.error(error.response.data));


        });
    </script>
@endsection
