<?php
$to      = 'toorinter@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'toorhusnain@gmail.com',
    'Reply-To' => 'toorinter@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
?>