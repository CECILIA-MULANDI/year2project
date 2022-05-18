 <?  
 
 $receiver = "ceciliamulandi@students.uonbi.ac.ke";
 $subject = "Receipt of donation";
 $body = "hi";
 $sender =" From: mulandicecilia4@gmail.com";
 if(mail( $receiver , $subject,$body,$sender)){
     echo "Email sent succesfully to $receiver";
 }
 else{
     echo " there is an error";
 }
 
?>



    
    
