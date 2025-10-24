<?php include "conn.php"; ?>
<?php
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$dtime=$_POST["dtime"];
$p_address=$_POST["p_address"];
$s_address=$_POST["s_address"];
$vehicle=$_POST["vehicle"];

// prepare and bind
$stmt = $conn->prepare("INSERT INTO Registration_form(name, phone, email, dtime, p_address, s_address, vehicle) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $phone, $email, $dtime, $p_address, $s_address, $vehicle);

if($stmt->execute())
{
	echo "New records created successfully";
}
else
{
		echo "error";
}

?>
