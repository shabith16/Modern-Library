<?php
	$servername = "localhost";
	$username   = "admin";
	$password   = "123";
	$database="modernclassics";
    $name = $_GET["name"];
    $mail= $_GET["email"];
    $otp= $_GET["otp"];
    $prd=$_GET["pass"];
    $uid="hola";
	$prd="111";
	$name="bot";
	$gmail="gmail@";
	$address="whatever";
	$phno="787132134";
	 // Create connection
$conn = new mysqli($servername, $username, $password,$database);
$sql ="insert into deta values('$name','$mail','$prd')";
if ( $conn->query($sql)=== TRUE) 
	{ echo "<h2>New record Inserted successfully</h2>";}
else
    	{ echo "Error: " . $sql . "<br>" . $conn->error;}
    	$conn->close();
?>