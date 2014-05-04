<?php /*This needs to accomodate the browser more.*/

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'ugolinipaul@gmail.com';//team4601@gmail.com
$subject = 'Emailed from circuitbirds.com '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

//$headers = http_build_query($headers);
$mail_status = mail($mail_to, $subject, $body_message, $headers);
if($mail_status)
{
    echo "Email Sent. <a href=\"//circuitbirds.com/contact.php\">Please return to home page.</a>";
}
else
{
    echo "error. Please email <a href=\"mailto:team4601@gmail.com\">team4601[at]gmail.com</a>";
}




/*
//incomplete fields 1
<script language="javascript" type="text/javascript">
	alert('You did not enter information in all of the fields. Paul. Please do that.');
    window.location = 'localhost:8888/CircuitBirds/contact.php';
</script>

//success 0
<script language="javascript" type="text/javascript">
	alert('Thank you for the message. We should be in contact with you shortly and you will now be redirected to our main page');
    window.location = 'http://circuitbirds.com/';
</script>

//send failure 2
<script language="javascript" type="text/javascript">
    alert('Message failed. Please, email team4601@gmail.com');
    window.location = 'http://circuitbirds.com/contact.php';
</script>*/



?>
