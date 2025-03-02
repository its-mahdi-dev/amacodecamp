<?php

namespace App\Constants;

class ResponseMessages
{
    // Success Messages
    const OTP_SENT_SUCCESS = 'کد تأیید با موفقیت ارسال شد. لطفاً شماره خود را بررسی کنید.';
    const OTP_VALIDATION_SUCCESS = 'با موفقیت وارد شدید.';

    // Error Messages
    const WAIT_BEFORE_REQUEST = 'لطفاً قبل از درخواست مجدد، کمی صبر کنید.';
    const INVALID_OTP = 'کد تأیید وارد شده معتبر نیست.';
    const REGISTER_BOOTCAMP_NOT_FOUND = 'شما در این دوره ثبت نام نکرده اید';

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
}
