
<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uid = $_POST["uid"];
  $name =$_POST["uname"];
   $address =$_POST["address"];
// sql to update a record
$sql = "UPDATE table1 SET name='$name', address = '$address' WHERE id= $uid";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: index.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

?>