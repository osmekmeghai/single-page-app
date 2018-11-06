<?php

if (isset($_POST['#submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$errorEmpty = false;
	$errorEmail = false;

	if (empty($name) || empty($email) || empty($message)) {
		echo "<span class='form-error'>Enter all </span>";
		$errorEmpty = true;
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<span class='form-error'>Write a valid email address</span>";
		$errorEmail= true;
	}
	else {
		echo echo "<span class='form-success'>Message sent!</span>";
	}
}
else {
	echo "There was an error!"
}

?>

<script>
	$("#name, #email, #message").removeClass("input-error")

	var errorEmpty = " <?php echo $errorEmpty; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";

	if (errorEmpty == true) {
		$("#name, #email, #message").addClass(".input-error");
	}
	if (errorEmail == true) {
		$("#email").addClass(".input-error");
	}

	if (errorEmpty == false && errorEmail == false) {
		$("#name, #email, #message").val("");
	}

</script>