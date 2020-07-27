<?php
     $to      = 'zeineb.hlou@yahoo.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: samiarfaoui0@gmail.com' . "\r\n" .
     'Reply-To: amiarfaoui0@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>
?>