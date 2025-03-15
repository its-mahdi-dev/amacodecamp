@extends('layouts.app')

@section('content')
    <section class="breadcrumb-area section-padding img-bg-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="section-heading">
                    <h2 class="section__title text-white">وارد شو</h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">خانه</a></li>
                    <li>پیجامون</li>
                    <li>ورود</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-area section--padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title text-center fs-24 lh-35 pb-4 theme-font-2">خوش اومدی رفیق!</h3>
                            <div class="section-block"></div>
                            <p id="errors" class="text-danger"></p>



                            <form id="loginForm" class="pt-4">

                                <!-- PHONE Container -->
                                <div class="input-box" id="phoneContainer">
                                    <label class="label-text">شمارت</label>
                                    <div class="form-group">
                                        <input class="form-control form--control text-end dir-ltr" type="text"
                                            name="phone" placeholder="مثلا  :  09123456789" id="phone"
                                            maxlength="11" />
                                        <span class="la la-phone input-icon"></span>
                                    </div>
                                    <button class="btn theme-btn w-100 mt-3" type="button" id="sendPhone" disabled>
                                        <span>دریافت کد</span>
                                        <i class="la la-arrow-right icon ms-1"></i>
                                    </button>
                                </div>

                                <!-- OTP Container -->
                                <div class="input-box d-none" id="otpContainer">
                                    <label class="label-text">کد دریافت شده</label>
                                    <div class="form-group">
                                        <input class="form-control form--control text-center dir-ltr" type="text"
                                            name="otp" placeholder="____" id="otp" minlength="4"
                                            maxlength="4" />
                                        <span class="la la-sms input-icon"></span>
                                    </div>
                                    <button class="btn theme-btn w-100 mt-3" type="button" id="sendOtp" disabled>
                                        <span>بررسی کد</span>
                                        <i class="la la-arrow-right icon ms-1"></i>
                                    </button>
                                    <p class="fs-14 pt-2 text-center"><a href="#" onclick="location.reload()">شماره
                                            اشتباهه؟</a></p>
                                    <p class="fs-14 pt-2 text-mute">
                                        <span id="reloadSpan">دریافت مجدد کد </span><span id="otpTimer"></span>
                                    </p>
                                </div>

                                <p class="fs-14 pt-2 text-center">اگه از قبل حساب نداری هم فرقی نداره</p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="toastContainer" class="toast-container"></div>
    </div>
@endsection

@section('customScripts')
    <script>
        axios.defaults.baseURL = "{{env('API_URL' , 'localhost/api')}}";



        // input containers
        const phoneContainer = document.getElementById("phoneContainer");
        const otpContainer = document.getElementById("otpContainer");

        // inputs + submit buttons
        const phoneInput = document.getElementById("phone");
        const otpInput = document.getElementById("otp");
        const sendPhoneBtn = document.getElementById("sendPhone");
        const sendOtpBtn = document.getElementById("sendOtp");

        const errorText = document.getElementById("errors");



        phoneInput.addEventListener("input", () => {
            sendPhoneBtn.disabled = !/^09\d{9}$/.test(phoneInput.value.trim());
        });
        otpInput.addEventListener("input", () => {
            sendOtpBtn.disabled = !/\d{4}$/.test(otpInput.value.trim());
        });
        phoneInput.addEventListener("keydown", e => {
            if (e.keyCode == 13 && !sendPhoneBtn.disabled) sendPhoneBtn.click();
        });
        otpInput.addEventListener("keydown", e => {
            if (e.keyCode == 13 && !sendOtpBtn.disabled) sendOtpBtn.click();
        });


        phoneInput.focus();


        sendPhoneBtn.addEventListener("click", function() {
            const phone = phoneInput.value.trim();
            sendPhoneBtn.disabled = true;
            phoneInput.disabled = true;
            sendPhoneBtn.innerHTML = `
            <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
            <span role="status">درحال ارسال</span>
            `;

            errorText.innerHTML = '';
            axios.post('/login/send', {
                    phone
                })
                .then(response => {
                    document.getElementById("phoneContainer").classList.add("d-none");
                    document.getElementById("otpContainer").classList.remove("d-none");
                    otpInput.focus();
                    startTimer();
                })
                .catch(error => {
                    // it should change to error.response.data.errors
                    error.response.data.data.forEach(err => {
                        errorText.innerHTML += `${err}<br>`;
                    });
                    
                })
                .finally(() => {
                    phoneInput.disabled = false
                    sendPhoneBtn.disabled = !/^09\d{9}$/.test(phoneInput.value.trim());
                    sendPhoneBtn.innerHTML = `
                        <span>دریافت کد</span>
                        <i class="la la-arrow-right icon ms-1"></i>
                    `;
                });
        });

        sendOtpBtn.addEventListener("click", function() {
            const phone = phoneInput.value.trim();
            const otp = otpInput.value.trim();
            sendOtpBtn.disabled = true;
            otpInput.disabled = true;
            sendOtpBtn.innerHTML = `
            <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
            <span role="status">درحال بررسی</span>
            `;

            errorText.innerHTML = '';
            axios.post('/login/validate', {
                    phone,
                    otp_code:otp
                })
                .then(response => {
                    const d = response.data.data;
                    const token = d.token;
                    localStorage.setItem("auth_token", token);
                    if(d.is_new) location.assign("https://google.com");
                    // location.assign("{{ env('DASHBOARD_URL') }}");
                    location.assign("/dashboard");
                })
                .catch(error => {
                    // it should change to error.response.data.errors
                    error.response.data.data.forEach(err => {
                        errorText.innerHTML += `${err}<br>`;
                    });
                    
                })
                .finally(() => {
                    otpInput.disabled = false
                    sendOtpBtn.disabled = !/^09\d{9}$/.test(otpInput.value.trim());
                    sendOtpBtn.innerHTML = `
                        <span>بررسی کد</span>
                        <i class="la la-arrow-right icon ms-1"></i>
                    `;
                });
        });


        function startTimer() {

            // !!! CHANGE THIS TO 120
            let timeLeft = 12;

            const timerElement = document.getElementById("otpTimer");
            const timer = setInterval(() => {
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    timerElement.innerText = '';
                    const reloadSpan = document.getElementById("reloadSpan");
                    reloadSpan.classList.add("text-info");
                    reloadSpan.classList.add("cursor-pointer");
                    reloadSpan.addEventListener("click" , ()=>{
                        location.reload();
                    });
                } else {
                    timerElement.innerText =
                        `تا : ${Math.floor(timeLeft / 60)}:${(timeLeft % 60).toString().padStart(2, '0')}`;
                }
                timeLeft--;
            }, 1000);
        }

        function showToast(message, type) {
            const toastEl = document.createElement("div");
            toastEl.classList.add("toast", "show", `bg-${type}`, "text-white");
            toastEl.innerHTML = `<div class="toast-body">${message}</div>`;
            document.getElementById("toastContainer").appendChild(toastEl);
            setTimeout(() => toastEl.remove(), 3000);
        }
    </script>
@endsection
