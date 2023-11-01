<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully". "<br>"; 
echo "-------------------------"."<br>";
//نمایش لیست پیام ها
$sql = "SELECT * FROM `messages`;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
 $table = $result->fetch_all(MYSQLI_ASSOC);
} else {
  echo "0 results";
}
echo json_encode($table);
echo "<br>". "-------------------------"."<br>";

//نمایش جزئیات پیام 
$sql = "SELECT `Subject`, `Text` FROM `messages` WHERE 1;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Subject: " . $row["Subject"]. " | Text: " . $row["Text"]. "<br>";
  }
} else {
  echo "0 results";
}
echo "-------------------------"."<br>";

CloseCon($conn);

?>