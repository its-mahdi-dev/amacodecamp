@extends('layouts.dashboard')

@section('content')
    

<div class="">

    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 responsive-column-half">
            <div class="card card-item hover-y text-center">
            <div class="card-body">
            <h3 id="paymentIcon">
                
            </h3>
                <h5 class="card-title pt-4 pb-2 fs-18" id="paymentStatus">
                
                </h5>
                <p class="card-text" id="paymentDesctiption">
                    
                </p>
            </div>
            <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <div class="text-center">
              <a href="{{route('dashboard.home')}}#myBootcampsArea" class="btn theme-btn">بوت‌کمپ های من <i class="la la-arrow-right icon ms-1"></i></a>
            </div>
            <!-- end category-btn-box-->
          </div>
    </div>
</div>
@endsection


@section('customScripts')
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const authority = urlParams.get("Authority");
        const status = urlParams.get("Status");

        const paymentIcon = document.querySelector("#paymentIcon");
        const paymentStatus = document.querySelector("#paymentStatus");
        const paymentDesctiption = document.querySelector("#paymentDesctiption");
        if (!authority || !status) {
            alert("Invalid payment response");
        }

    axios.get(`/student/payment/verify?Authority=${authority}&Status=${status}`)
        .then(function(response){
            console.log('success response');
            paymentIcon.innerHTML = '✅';
            paymentStatus.innerHTML = 'پرداخت با موفقیت انجام شد';
            paymentDesctiption.innerHTML = `کد رهگیری پرداخت: ${response.data.data}
            
                <p class="mt-3"> برای دریافت لایسنس دوره و گذرواژه ورود به کلاس، به اکانت <a href="https://t.me/amacodecamp_support">@amacodecamp_support </a> در تلگرام و یا شماره 
                <a href="https://wa.me/+989938383698">0993 8383 698</a> در واتساپ پیام دهید </p>
                `;
        })
        .catch(function(error){
            console.log('error response');
            paymentIcon.innerHTML = '❌';
            paymentStatus.innerHTML = 'مشکلی در پرداخت پیش آمد';
            error.response.data.errors.forEach(err => {
                paymentDesctiption.innerHTML += err + " <br>";
            });
        });


    </script>
@endsection