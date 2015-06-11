<?php
require_once("Mail.php");
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
if(@isset($_POST["reply"]) === true) {
	$emailAddress = filter_var($_POST["reply"], FILTER_SANITIZE_EMAIL);
} else {
	$emailAddress = "nobody@anon.com";
}

if(@isset($_POST["name"]) === true) {
	$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
} else {
	$name = "Codewizard Corresponder";
}

if(@isset($_POST["message"]) === true) {
	$content = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
} else {
	$content = "Codewizard Correspondence";
}

try {
			// email the user with an activation message
			$to = "tyler.wiegand@me.com";
			$from = $emailAddress;

			// build headers
			$headers = array();
			$headers["To"] = $to;
			$headers["From"] = $from;
			$headers["Reply-To"] = $from;
			$headers["Subject"] = "Codewizard Correspondence";
			$headers["MIME-Version"] = "1.0";
			$headers["Content-Type"] = "text/html; charset=UTF-8";

			// build message
			$message = <<< EOF
<html>
	<body>
		<h3>From $name...</h3>
		<br />
		<p>$content</p>
		<p>End of message.</p>
	</body>
</html>
EOF;

			// send the email
			error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
			$mailer =& Mail::factory("sendmail");
			$status = $mailer->send($to, $headers, $message);
			if(PEAR::isError($status) === true) {
				echo "<strong>Oh snap!</strong> Unable to send mail message:" . $status->getMessage();
			} else {
				echo '<span class="alert alert-success"><strong>Wizard informed!</strong></span>';
			}
	} catch(Exception $exception) {
	echo "<strong>Oh snap!</strong> Unable to help you: " . $exception->getMessage();
}