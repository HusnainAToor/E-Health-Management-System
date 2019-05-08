<?php
$to = "toorhusnain@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: toorhusnain@gmail.com" . "\r\n" .
"CC: toorhusnain@gmail.com";

mail($to,$subject,$txt,$headers);
?>