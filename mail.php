<?php /*This needs to accomodate the browser more.*/

$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'team4601@gmail.com';//team4601@gmail.com
$subject = 'Emailed from circuitbirds.com '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

if(trim($field_name) == "" || trim($field_email) == "" || trim($field_message) == "")
{
    $Message = "Please fill in all of the fields.";
    $Return_type = "warning";
}
else
{
    if($_POST['copy'])
    {
        $mail_to .=",".$field_email;
    }

$mail_status = mail($mail_to, $subject, $body_message, $headers);
if($mail_status)
{
    $Message = "Email sent to ".$mail_to.". <a href=\"//circuitbirds.com/contact.php\">Please return to home page.</a>";
    $Return_type = "success";
}
else
{
    $Message = "error. Please email <a href=\"mailto:team4601@gmail.com\">team4601[at]gmail.com</a>";
    $Return_type = "warning";
}
}
require_once("contact.php");


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
