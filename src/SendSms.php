<?php
namespace Techunico\SmsSender;

use Curl\Curl;

class SendSms{
    public function __construct() {

    }

    public function sendSingleSms($message,$contact,$smsType='normal', $priority='ndnd'){
        $curl = new Curl();
        $curl->get(config('tunico.sms_gateway'), [
            'user' => config('tunico.sms_gateway_user_name'),
            'pass' => config('tunico.sms_gateway_password'),
            'sender' => config('tunico.sms_sender_id'),
            'phone' => $contact,
            'text' => url_encode($message),
            'priority' => $priority ? $priority : 'ndnd',
            'stype' => $smsType ? $smsType : 'normal',
        ]);
    }
}
