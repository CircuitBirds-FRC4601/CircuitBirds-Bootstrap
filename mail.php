<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'team4601@gmail.com';
$subject = 'Emailed from circuitbirds.com '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

if(trim($field_name) == "" || trim($field_email) == "" || trim($field_message) == "")
{
	?>
	<script language="javascript" type="text/javascript">
		window.location = 'http://circuitbirds.com/contact.php';
		alert('You did not enter information in all of the fields. Please do that.');
	</script>
	<?php
	$end;
}

else
{
	$mail_status = mail($mail_to, $subject, $body_message, $headers);
	if ($mail_status)
	{
		?>
		<script language="javascript" type="text/javascript">
			alert('Thank you for the message. We should be in contact with you shortly and you will now be redirected to our main page');
			window.location = 'http://circuitbirds.com/';
		</script>
		<?php
	}
	else
	{
		?>
		<script language="javascript" type="text/javascript">
			alert('Message failed. Please, email team4601@gmail.com');
			window.location = 'http://circuitbirds.com/contact.php';
		</script>
		<?php
	}
$end;
}
?>
