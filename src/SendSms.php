<?php
namespace Techunico\SmsSender;

use Curl\Curl;

class SendSms{
    public function __construct() {

    }

    public function sendSingleSms($message,$contact,$smsType='normal', $priority='ndnd'){
        $curl = new Curl();
        $curl->get(env('SMS_GATEWAY'), [
            'user' => env('SMS_GATEWAY_USER_NAME'),
            'pass' => env('SMS_GATEWAY_PASSWORD'),
            'sender' => env('SMS_SENDER_ID'),
            'phone' => $contact,
            'text' => $message,
            'priority' => $priority ? $priority : 'ndnd',
            'stype' => $smsType ? $smsType : 'normal',
        ]);
    }
}
