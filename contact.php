<?php

if($_POST){
	$field_name = $_POST['name'];
	$field_email = $_POST['email'];
	$field_message = $_POST['message'];

	$mail_to = 'dkuehnertd@gmail.com';
	$subject = 'Portfolio - Message from a site visitor '.$field_name;

	$body_message = 'From: '.$field_name."\n";
	$body_message .= 'E-mail: '.$field_email."\n";
	$body_message .= 'Message: '.$field_message;

	$headers = 'From: '.$field_email."\r\n";
	$headers .= 'Reply-To: '.$field_email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_status) { ?>
		<script language="javascript" type="text/javascript">
			alert('Thank you for the message. I will be in contact with you shortly.');
			window.location = 'contact_page.html';
		</script>
	<?php
	}
	else { ?>
		<script language="javascript" type="text/javascript">
			alert('Message failed. Please, send try again later');
			window.location = 'contact_page.html';
		</script>
	<?php
	}
}
else{
	echo "<p>Something went wrong, please try again later</p>";
}

?>