<?php

 require_once('class.phpmailer.php');

 class FreakMailer extends PHPMailer
 {
   var $priority = 3;
   var $to_name;
   var $to_email;
   var $From = null;
   var $FromName = null;
   var $Sender = null;
   var $CharSet = null;
  
   function FreakMailer()
   {
     global $Site;
     
     if($Site['smtp_mode'] == 'enabled')
     {
       $this->Host = $Site['smtp_host'];
       $this->Port = $Site['smtp_port'];

       if($Site['smtp_username'] != '')
       {
         $this->SMTPAuth  = true;
         $this->Username  = $Site['smtp_username'];
         $this->Password  =  $Site['smtp_password'];
       }

       $this->Mailer = "smtp";
     }

     if(!$this->From)
     {
       $this->From = $Site['from_email'];
     }

     if(!$this->FromName)
     {
       $this-> FromName = $Site['from_name'];
     }

     if(!$this->Sender)
     {
       $this->Sender = $Site['from_email'];
     }

     if(!$this->CharSet)
     {
       $this->CharSet = $Site['char_set'];
     }


     $this->Priority = $this->priority;
   }
 }

?>