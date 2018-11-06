<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$errorEmpty = false;
	$errorEmail = false;

	if (empty($name) || empty($email) || empty($message)) {
		echo "<span class='form-error'>fill in all fields!</span>";
		echo ""
		$errorEmpty = true;
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<span class='form-error'>Write a valid email address</span>";

		$errorEmail= true;
	}
	else {
		echo "<span class='form-success'>Message sent!</span>";
	}
}
else {
	echo "There was an error!";
}

	  $to = 'osmek_adams@yahoo.com';
    $subject = 'Contact Form Submit';
    $message = $_POST['message'] . "\n" . $name . "\n" . $email;
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: osmekmeghai@gmail.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      if (mail($to, $subject, $message)){
          $name = $email = $message = '';
      }

?>

<script>

	var errorEmpty = " <?php echo $errorEmpty; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";

	if (errorEmpty == true) {
		$(".form-message").addClass("form-error");
	}

	if (errorEmpty == false && errorEmail == false) {
		$("#name, #email, #message").val("");
	}

</script>