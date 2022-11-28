<html>
<head>
 
  <title></title>
  <style>
table, th, td {
  border: 1px solid;
  text-align: center;
}

table {
  width: 100%;
}
</style>
</head>
<body>
<a href="insertForm.php">Add Data</a> </br></br>
<a href="updateForm.php">Update Data</a> </br></br>

<form name = "delete" method="post" action="">
  Id: <input type="number" name="uid">
  <input type="submit" name="submitDelete" value="Delete">
</form><br><br>

<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uid = $_POST["uid"];
// sql to delete a record
$sql = "DELETE FROM table1 WHERE id= $uid";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  //header("Location: data.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

?>


<?php
include 'conn.php';
 // select or read data start
$sql = "SELECT id, name, address FROM table1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>ID</th> <th>Name</th> <th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["id"]. "</td> 
         <td>" . $row["name"]. "</td>
         <td>" . $row["address"]. "</td>


        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
</body>
</html>