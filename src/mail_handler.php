<?php
	if(isset($_POST['submit'])){
		ini_set('SMTP', "smtp.gmail.com");
		ini_set('smtp_port', "25");
		ini_set('sendmail_from', "fakevbp11@gmail.com");

		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		// Multiple recipients
		$to = 'fakevbp11@gmail.com'; // note the comma
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n";
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!eddddd";
		}
	}
?>