<?php

namespace App\Constants;

class ResponseMessages
{
    // Success Messages
    const OTP_SENT_SUCCESS = 'کد تأیید با موفقیت ارسال شد. لطفاً شماره خود را بررسی کنید.';
    const OTP_VALIDATION_SUCCESS = 'با موفقیت وارد شدید.';
    const CUPON_VALID = "کد تخفیف صحیح می‌باشد.";
    const CAMPAIGN_SUBMITED = "شماره شما با موفقیت ثبت شد";
    const REVIEW_SUCCESS = "نظر شما با موفقیت ثبت شد";

    // Error Messages
    const WAIT_BEFORE_REQUEST = 'لطفاً قبل از درخواست مجدد، کمی صبر کنید.';
    const INVALID_OTP = 'کد تأیید وارد شده معتبر نیست.';
    const REGISTER_BOOTCAMP_NOT_FOUND = 'شما در این دوره ثبت نام نکرده اید';
    const LOCK_OTP_ACCOUNT = 'حساب شما به دلیل تلاش های ناموفق مسدود شده. چند دقیقه دیگه دوباره درخواست کد بکن.';
    const PAYMENT_NOT_FOUND = 'اطلاعات پرداخت یافت نشد.';
    const PAYMENT_FAILED = 'پرداخت با موفقیت انجام نشد';
    const CUPON_NOT_VALID = "کد تخفیف صحیح نمی‌باشد.";
    const BOOTCAMP_NOT_SIGN = "شما دانشجوی این دوره نیستید";
    const CAMPAIGN_EXISTED = "شماره تلفن شما قبلا ثبت شده است";
    const BOOTCAMP_CAPACITY_FULL = "ظرفیت بوت کمپ تکمیل می‌باشد";


    // General Messages
    const SERVER_ERROR = 'خطای سرور رخ داده است. لطفاً دوباره تلاش کنید.';
    const NOT_FOUND = 'پیدا نشد';
    const GENERAT_ERROR = 'مشکلی پیش آمد. دوباره امتحان کنید';
    const SUCCESS = 'با موفقیت انجام شد';
    const VALIDATION_ERROR = 'داده های ورودی معتبر نیست.';
    const WISHLIST_ADDED = "با موفقیت به علاقه مندی ها اضافه شد";
    const WISHLIST_DELETED = "با موفقیت از علاقه مندی ها حذف شد";


    // Validation Errors
    const V_PHONE_REQUIRED = 'شماره تلفن همراه الزامیه';
    const V_PHONE_NUMERIC = 'شماره تلفن همراه باید عدد باشه';
    const V_PHONE_SIZE = 'تعداد کارکتر های شماره تلفن همراه اشتباهه';
    const V_OTP_EQUIRED = 'کد صحت سنجی الزامیه';
    const V_OTP_NUMERIC = 'کد سحت سنجی باید عدد باشه';
    const V_OTP_SIZE = 'تعداد کارکتر های کد سحت سنجی اشتباهه';
    const V_BOOTCAMP_PRICE_NUMERIC = 'قیمت وارد شده باید عدد باشه';
    const V_BOOTCAMP_PERPAGE = 'تعداد آیتم ها در صفحه نا معتبره';
    const V_STUDENT_EMAIL = 'ایمیل وارد شده نامعتبره';
    const V_STUDENT_NAME = 'حداکثر کارکتر برای اسم و فامیل 355 است';
    const V_STUDENT_PROFILE_SIZE = 'حداکثر حجم تصویر باید 500 کیلوباید باشد';
    const V_STUDENT_PROFILE_TYPE= 'فرمت فایل تصویر صحیح نیست';
    const V_SLUGS_REQUIRED = "لطفا بوت‌‌کمپ های مورد نظر را انتخاب کنید.";
    const V_RATE_INVALID = "تعداد ستاره های ثبت شده مجاز نیست";
    const V_COMMENT_INVALID = "متن نظر ثبت شده مجاز نیست";


    public function ERR_MIN_PAY_CUPON($min){
        return "حداقل خرید برای استفاده از کد تخفیف {$min} است.";
    }
}
