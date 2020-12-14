<?php include "includes/header.php";?>
<div class="feedback">
    <p>Thanks for reaching out! I'll get back to you shortly :)</p>
</div>

<?php
	
	$userName 		= $_POST['myName'];
	$userEmail	 	= $_POST['myEmail'];
	$userMessage 		= $_POST['myMessage'];

	$to 			= "ebertshannah@gmail.com";
	$subject 		= "New message from katherinefox.photo";
	$body 			= "Message Recieved:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;

$headers 		= 'From: KatherineFox.photo <ebertshannah@gmail.com>' . "\r\n" .
    				'Reply-To: ebertshannah@gmail.com' . "\r\n" .
    				'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $body);
?>
<?php include "includes/footer.php";?>
