<?php

return [
    'sms_gateway' => env('SMS_GATEWAY','http://bulksms.techunico.com'),
    'sms_gateway_api_key' => env('SMS_API_KEY'),
    'sms_gateway_user_name' => env('SMS_GATEWAY_USER_NAME'),
    'sms_gateway_password' => env('SMS_GATEWAY_PASSWORD'),
    'sms_sender_id' => env('SMS_SENDER_ID'),
];