<?php

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Send the email, save the message to a database, or do whatever you need to do with the form data here.

// Generate the confirmation page HTML.
$confirmation_html = "
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submitted</title>
    <meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' href='Style sheet/styles.css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link rel='stylesheet' type='text/css' href='Style sheet/slicknav.css'>
</head>
<body>
    <div class='container'>
        <h1>SecDawgs</h1>
        <nav>
            <ul>
                <li><a href='index.html'>Home</a></li>
                <li><a href='aboutus.html'>About</a></li>
                <li><a href='News.html'>Blog</a></li>
                <li><a href='contact.html'>Contact</a></li>
            </ul>
        </nav>
    </div>
    <h1>Contact Form Submitted</h1>
    <p>Thank you for contacting us. We have received your message and will get back to you as soon as possible.</p>
    <p>Here is the information you provided:</p>
    <ul>
        <li><strong>Name:</strong> $name </li>
        <li><strong>Username:</strong> $username </li>
        <li><strong>Email:</strong> $email </li>
        <li><strong>Phone Number:</strong> $phone </li>
        <li><strong>Message:</strong> $message </li>
    </ul>
</body>
</html>
";

// Output the confirmation page HTML.
echo $confirmation_html;

?>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="Style sheet/jquery.slicknav.js">
	</script>
	<script>
		$(function(){
			$('#menu').slicknav();
		});
	</script>