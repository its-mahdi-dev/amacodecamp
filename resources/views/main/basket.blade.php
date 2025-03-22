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
                    <h2 class="section__title text-white">سبد خریدت</h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">آما</a></li>
                    <li>سبد خرید</li>
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
    <section class="cart-area section-padding" id="bootcamps">
        <div class="container">
            <div class="table-responsive">
                <table class="table generic-table text-start">
                    <thead>
                        <tr>
                            <th scope="col">کاور بوتکمپ</th>
                            <th scope="col">دربارش</th>
                            <th scope="col">قیمتش</th>
                            <th scope="col">حذف</th>
                        </tr>
                    </thead>
                    <tbody id="bootcampsBody">
                        <tr>
                            <th scope="row">
                                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                            </th>
                            <td>
                                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>

                            </td>
                            <td>
                                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                            </td>

                            <td>
                                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex flex-wrap align-items-center justify-content-between pt-4">
                    <form method="post">
                        <div class="input-group mb-2">
                            <input class="form-control form--control ps-3" type="text" name="search"
                                placeholder="کد تخفیف داری؟" />
                            <div class="input-group-append">
                                <button class="btn theme-btn">اعمال کد تخفیف</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 ms-auto">
                <div class="bg-gray p-4 rounded-rounded mt-40px text-start">
                    <h3 class="fs-18 font-weight-bold pb-3"></h3>
                    <div class="divider"><span></span></div>
                    <ul class="generic-list-item pb-4">
                        <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                            <span class="text-black">قیمت کلی: </span>
                            <span id="price">

                            </span>
                        </li>
                        <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                            <span class="text-black">پولی که باید پرداخت کنی:</span>
                            <span id="shouldPay">

                            </span>
                        </li>
                    </ul>
                    <a href="checkout.html" class="btn theme-btn w-100">پرداخت <i
                            class="la la-arrow-right icon ms-1"></i></a>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- ================================
                           END CONTACT AREA
                    ================================= -->

@section('customScripts')
    <script>


        /*
            basket.addToBasket("fullstack-bootcamp");
            basket.removeFromBasket("data-science-bootcamp");
    */
        console.log(basket.getItems()); // Get all stored bootcamps

    </script>
    <script>
        axios.defaults.baseURL = "{{env('API_URL', '')}}";
        let price = 0;
        let should_pay = 0;
        emptyBasketHTML = `
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 class="text-center"><i class="las la-frown"></i> هیچی تو سبد خریدت نداری</h1>
          <a href="{{ route('bootcamps.index') }}" class="btn theme-btn mt-5">بریم ببینم چیا میخوام <i class="la la-arrow-right icon ms-1"></i></a>
        </div>  
        
        `;

        const bootcamps = document.getElementById("bootcamps");
        const bootcampsBody = document.getElementById("bootcampsBody");
        axios.get(`/bootcamps?slugs=${basket.getItems()}`)
            .then(function(response) {
                let d = response.data.data;
                if (!d.length || !basket.getItems().length) {
                    bootcamps.innerHTML = emptyBasketHTML;
                    return;
                }
                bootcampsBody.innerHTML = '';
                const keepSlugs = [];
                d.forEach(bootcamp => {
                    keepSlugs.push(bootcamp.slug);
                    price += Number(bootcamp.price);
                    const bootcampShowUrl = "{{ route('bootcamps.show', ['slug' => 'BOOTCAMP_SLUG']) }}";
                    const url = bootcampShowUrl.replace('BOOTCAMP_SLUG', bootcamp.slug);
                    bootcampsBody.innerHTML += `
                    <tr>
                        <th scope="row">
                            <div class="media media-card">
                                <a href="course-details.html" class="media-img me-0">
                                    <img src="images/small-img.jpg" alt="Cart image" />
                                </a>
                            </div>
                        </th>
                        <td>
                            <a href="${url}" class="text-black font-weight-semi-bold">${bootcamp.title}</a>
                            <p class="fs-14 text-gray lh-20">
                                ${bootcamp.overview}
                            </p>
                        </td>
                        <td>
                            <ul class="generic-list-item font-weight-semi-bold">
                                <li class="text-black lh-18">${bootcamp.price_final}</li>
                                <li class="before-price lh-18">${bootcamp.price}</li>
                            </ul>
                        </td>
                        <td>
                            <button type="button" class="icon-element icon-element-xs shadow-sm border-0" onclick="removeFromBasketF(this, '${bootcamp.slug}')" data-toggle="tooltip"
                                data-placement="top"   title="نمیخوامش">
                                <i class="la la-times"></i>
                            </button>
                        </td>
                    </tr>
                  `;
                });
                basket.resetBasket(keepSlugs);

            })
            .catch(function(error) {
                bootcamps.innerHTML = emptyBasketHTML;
                console.log(error);
            })



        function checkCupon(cupon) {
            axios.get(`/cupon/check/${cupon}`)
                .then(function(response) {
                    let d = response.data.data;
                        

                })
                .catch(function(error) {
                    console.log(error);
                })
        }

        function removeFromBasketF(el,slug)
        {
            removeFromBasket(slug);
            el.parentNode.parentNode.remove();
            customAlert('از سبد خریدت حذف شد');
            if (!basket.getItems().length) {
                bootcamps.innerHTML = emptyBasketHTML;
            }
        }
    </script>
@endsection
@endsection
