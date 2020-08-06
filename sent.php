<?php
$email = $_REQUEST['Email'];
$subject="confirmation mail";
$header = "From:AURA.port4@gmail.com";
$body="Subscribed successfully. Thank you";
if(mail($email, $subject, $body, $header))
{
    header("location:aura_up.php?success");
} 
else {
    echo "Email sending failed...";
}
?>