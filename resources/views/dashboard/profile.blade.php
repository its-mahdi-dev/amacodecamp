@extends('layouts.dashboard')

@section('content')
<section>
    <div class="dashboard-content-wrap w-100">
        <div class="container-fluid">
          <div
            class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5 text-start"
          >
            <div class="media media-card align-items-center">
              <div class="media-img media--img media-img-md rounded-full">
                <img
                  class="rounded-full"
                  src="/assets/images/img-loading.png"
                  alt="Student thumbnail image"
                  id="userAvatar"
                />
              </div>
              <div class="media-body">
                <h2 class="section__title fs-30" id="userName"></h2>
                {{-- <div class="rating-wrap d-flex align-items-center pt-2">
                  <div class="review-stars">
                    <span class="rating-number">4.4</span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star"></span>
                    <span class="la la-star-o"></span>
                  </div>
                  <span class="rating-total ps-1">(20,230)</span>
                </div> --}}
                <!-- end rating-wrap -->
              </div>
              <!-- end media-body -->
            </div>
            <!-- end media -->
          </div>
          <!-- end breadcrumb-content -->
          <div class="section-block mb-5"></div>
          <div class="dashboard-heading mb-5">
            <h3 class="fs-22 font-weight-semi-bold">مشخصات</h3>
          </div>
          <ul
            class="nav nav-tabs generic-tab pb-30px"
            id="myTab"
            role="tablist"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                id="edit-profile-tab"
                data-bs-toggle="tab"
                href="#edit-profile"
                role="tab"
                aria-controls="edit-profile"
                aria-selected="false"
              >
                اطلاعات شخصی
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="education-tab"
                data-bs-toggle="tab"
                href="#education"
                role="tab"
                aria-controls="education"
                aria-selected="true"
              >
                اطلاعات تحصیلی
              </a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div
              class="tab-pane fade show active"
              id="edit-profile"
              role="tabpanel"
              aria-labelledby="edit-profile-tab"
            >
              <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">
                  ویرایش اطلاعات شخصی
                </h3>
                <div class="media media-card align-items-center">
                  <div class="media-img media-img-lg me-4 bg-gray">
                    <img
                      class="me-3"
                      src="/assets/images/img-loading.png"
                      alt="avatar image"
                      id="userAvatar2"
                    />
                  </div>
                  <div class="media-body">
                    <div class="file-upload-wrap file-upload-wrap-2">
                      <input
                        type="file"
                        name="files"
                        class="multi file-upload-input with-preview"
                        accept="image/jpeg, image/png, image/jpg, image/webp, images/svg"
                      />
                      <span class="file-upload-text"><i class="la la-photo me-2"></i>ویرایش پروفایل</span>
                    </div>
                    <!-- file-upload-wrap -->
                    <p class="fs-14">
                      حداکثر حجم آپلود 300 کیلوبایت. فرمت های مجاز png,jpeg,jpg,webp,svg
                    </p>
                  </div>
                </div>
                <!-- end media -->
                <div class="row pt-40px">
                  <div class="input-box col-lg-6">
                    <label class="label-text">اسمت چیه؟</label>
                    <div class="form-group">
                      <input
                        class="form-control form--control"
                        type="text"
                        name="text"
                        value=""
                        id="userFirstName"
                      />
                      <span class="la la-user input-icon"></span>
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box col-lg-6">
                    <label class="label-text">فامیلیت چیه؟</label>
                    <div class="form-group">
                      <input
                        class="form-control form--control"
                        type="text"
                        name="text"
                        value=""
                        id="userLastName"
                      />
                      <span class="la la-user input-icon"></span>
                    </div>
                  </div>
                  <!-- end input-box -->
                  <div class="input-box col-lg-6">
                    <label class="label-text">ایمیل</label>
                    <div class="form-group">
                      <input
                        class="form-control form--control"
                        type="email"
                        name="email"
                        value=""
                        id="userEmail"
                      />
                      <span class="la la-envelope input-icon"></span>
                    </div>
                  </div>
                  <!-- end input-box -->

                  <p class="text-danger" id="errorWrapper"></p>
                  <div class="input-box col-lg-12 py-2">
                    <button class="btn theme-btn" onclick="updateProfile()">ذخیره تغییرات</button>
                  </div>
                  <!-- end input-box -->
                </div>
              </div>
              <!-- end setting-body -->
            </div>
            <!-- end tab-pane -->
            <div
              class="tab-pane fade"
              id="education"
              role="tabpanel"
              aria-labelledby="education-tab"
            >
              <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">
                  اطلاعات تحصیلی
                </h3>
                این بخش هنوز در دسترس نیست
              </div>
              <!-- end setting-body -->
            </div>
            <!-- end tab-pane -->
            
          </div>
          <!-- end tab-content -->
          <div class="row align-items-center dashboard-copyright-content py-4">
            <div class="col-lg-6">
              <p class="copy-desc">
                &copy; 2025 Ama. All Rights Reserved. by
                <a href="https://amacodecamp.ir"
                  >Ama codecamp</a
                >
              </p>
            </div>
            <!-- end col-lg-6 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container-fluid -->
      </div>
</section>

@endsection


@section('customScripts')

<script>
     let firstName= document.querySelector("#userFirstName");
        let lastName= document.querySelector("#userLastName");
        let email= document.querySelector("#userEmail");
        let errorWraapper= document.querySelector("#errorWrapper");
    document.addEventListener('userDataLoaded', function(e) {
        let data = e.detail;    
        document.querySelector("#userAvatar").setAttribute('src' , data.avatar_url);
        document.querySelector("#userAvatar2").setAttribute('src' , data.avatar_url);
        document.querySelector("#userName").setAttribute('value' , data.full_name);
       
        firstName.setAttribute('value' , data.first_name);
        lastName.setAttribute('value' , data.last_name);
        email.setAttribute('value' , data.email ?? "");

        
    });

    const MAX_FILE_SIZE = 5 * 1024;
    const ALLOWED_FILE_TYPES = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg'];

    function updateProfile(){
        errorWraapper.innerHTML = '';
        const file = document.getElementsByName('files')[0].files[0];
        if(file){
          if (file.size > MAX_FILE_SIZE) {
            errorWraapper.innerHTML = 'حداکثر حجم مجاز برای آپلود 500 کیلوبایت می‌باشد';
              return;
          }
          if (!ALLOWED_FILE_TYPES.includes(file.type)) {
              errorWraapper.innerHTML = 'فقط فرمت های مجاز را میتوانید آپلود کنید';
              return;
          }
        }
        const formData = new FormData();
        formData.append('first_name', firstName.value);
        formData.append('last_name', lastName.value);
        formData.append('email', email.value);
        if(file) formData.append('avatar', file ?? null);
        axios.post('/student/update' , formData , {
          headers: {
              'Content-Type': 'multipart/form-data'
          }
        })
            .then(function(response){
            console.log(response);
        })
            .catch(function(error){
            let errors = error.response.data.errors;
                errors.forEach(err => {
                    errorWraapper.innerHTML += `
                        <span> ${err}</span> <br>
                    `;
                });
        })
    }
</script>

@endsection