<?php
namespace Techunico\SmsSender;

class sms_sender{
    public function __construct() {
        
    }
    
    public function sender($message,$contact,$smsType, $priority){
        
    }
}



// Note : smstype - normal/flash/unicode , Priority - ndnd/dnd , Mobile Number without 914
// sender=Sender ID&phone=Mobile No&text=Test SMS&priority=Priority&stype=smstype

// http://alerts.techunico.com/api/sendmsg.php?user=techunico_alerts&pass=********&sender=Sender ID&phone=Mobile No&text=Test SMS&priority=Priority&stype=smstype