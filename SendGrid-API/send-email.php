<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

/*Content*/
$from = new SendGrid\Email("$name", "$email");
$subject = "Contact from website";
$to = new SendGrid\Email("Osmek Meghai", "osmek_adams@yahoo.com");
$content = new SendGrid\Content("text/html", "
Email : {$email}<br>
Name  : {$name}<br>
Message : {$message}

	");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = "Thanks for contacting me! I get back to you soon."
?>

<!--Print the response-->
<pre>
    <?php
    var_dump($response);
    ?>
</pre>
