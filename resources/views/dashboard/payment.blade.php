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
            return;
        }

        axios.get(`/student/payment/verify?Authority=${authority}&Status=${status}`)
        .then(function(response){
            paymentIcon.innerHTML = '✅';
            paymentStatus = 'پرداخت با موفقیت انجام شد';
            paymentDesctiption.innerHTML = `کد رهگیری پرداخت: ${response.data.data}`;
        })
        .catch(function(error){
            paymentIcon.innerHTML = '❌';
            paymentStatus.innerHTML = 'مشکلی در پرداخت پیش آمد';
            error.response.data.errors.forEach(err => {
                paymentDesctiption.innerHTML += err + " <br>"
            });
        })

    </script>
@endsection