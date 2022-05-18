<?php
$to = 'cecilia.k.mulandi@gmail.com';
$subject = 'Test Mail';
$message = 'Thank you for donating';
$headers = "From: mulandicecilia4@gmail.com\r\nReply-To: cecilia.k.mulandi@gmail.com";
$mail_sent = mail($to,$subject,$message,$headers );
if($mail_sent== true){
    echo "mail sent";
}
else{
    echo "mail failed";
}
?>