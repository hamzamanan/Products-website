<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$sub=$_POST['subject'];
		$message=$_POST['message'];

		$to='Sheikh44@hotmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Subject :".$subject."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message)){
			echo '<script type="text/JavaScript">  
	 alert("Email Sent");
	 window.location = "https://sheikhfabrication.co.uk/contact.html";
     </script>' 
; 
		}
		else{
				echo '<script type="text/JavaScript">  
     alert("Email Not Sent");
     </script>' 
; 
		}
	}
?>