<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully". "<br>"; 
echo "-------------------------"."<br>";
//نمایش لیست کاربران
$sql = "SELECT * FROM `users`;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
 $table = $result->fetch_all(MYSQLI_ASSOC);
} else {
  echo "0 results";
}
echo json_encode($table);
echo "<br>". "-------------------------"."<br>";

//نمایش پروفایل کاربر
$sql = "SELECT  `First Name`, `Last Name`, `Email`, `Phone Number`, `Address` FROM `users` WHERE 1;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "First Name: " . $row["First Name"]. " | Last Name: " . $row["Last Name"]. " | Email: " . $row["Email"]. " | Phone Number: " . $row["Phone Number"]. " | Address: " . $row["Address"] . "<br>";
  }
} else {
  echo "0 results";
}
echo "-------------------------"."<br>";

CloseCon($conn);

?>