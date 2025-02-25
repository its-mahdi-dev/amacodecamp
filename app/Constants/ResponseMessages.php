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
}
