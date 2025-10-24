<?php include "conn.php"; ?>
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];


// prepare and bind
$stmt = $conn->prepare("INSERT INTO Contact_us(name,  email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);

if($stmt->execute())
{
	echo "New records created successfully";
}
else
{
		echo "error";
}

?>