<? php
<html>
<head><title>Insert data into Database-PHP</title></head>
<body><form action="retreivedb.php" method="get">
Roll Number  <input type="text" name="n1"/><br>
<input type="submit">
</form></body></html>

retreivedb.php
<? php
    $servername = "localhost";
    $username = "root";
    $passwo = "123";
    $dbname = "modernclassics";
    $username =$_GET["user"];
    $prd=$_GET["prd"];
    // $roll=$_GET["n1"];
    $conn = new mysqli($servername, $username, $passwo, $dbname);
    $sql = "SELECT password from userdetails where name='$user'";
//  $sql = "SELECT * from stu ORDER BY name";	
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
//    while($row = $result->fetch_assoc()) 
//     {
// echo "<center>";
// echo "<table border='5'><tr><td>ROLL NO</td><td>NAME</td><td>MARK</td></tr><tr>";
// echo "<td>" .$row['roll']. "</td><td>" .$row['name']. "</td><td>" .$row['m1']. "</td></tr>";
// echo "</table>";  
// echo "</center>";
//      }
   $conn->close();
?>