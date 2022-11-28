<?php
include 'conn.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

if(isset($_POST['submit'])){
$name = $_POST['name'];
$address = $_POST['address'];

$sql = "INSERT INTO table1 (name, address)
VALUES ('$name', '$address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
  // select or read data start
header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end



}
$conn->close();
}
?>