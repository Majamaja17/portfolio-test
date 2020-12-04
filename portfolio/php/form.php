<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Maja Jelenik</title>
        <link rel="Shortcut icon" href="./images/m.png" />
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body style="padding: 50px 0;">
    	<header>
		</header>
		<section style="padding-left: 10px; padding-right: 10px; font-size: 24px;" id="first">
			<div class="container">
				<?php
				$to      = 'maja.jelenik@vp.pl';
				$name    = $_POST['name'];
				$email   = $_POST['email'];
				$number   = $_POST['number'];
				$company  = $_POST['company'];
				$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
				$message = $_POST['message'];
				$headers = 'From: ' . $name . ' (' . $email . ')';
				mail($to, $subject, $message, $headers);
				?>
				<h1>Thank you for sending a message, I will reply as soon as posible :)</h1>
				<div>
					<a class="btn" target="_blank" href="https://github.com/Majamaja17?tab=repositories">
						<p>github</p>
					</a>
				</div>
				<div>
					<a class="btn_link" target="_blank" href="cv_MajaJelenik.pdf">
						<p>cv</p>
					</a>
				</div>
			</div>
		</section>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>