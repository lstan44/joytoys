<?php
require_once('db.php');
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$story = $_POST["story"];
$address = $_POST["address"];
$listid = $_POST["list_id"];

$sql = "INSERT into receiver(receiverfullname,receiveremail,receiverphone,receiveraddress,receiverstory,receiveramazonid) VALUES('$fullname','$email','$phone','$address','$story','$listid')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
