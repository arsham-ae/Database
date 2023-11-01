<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully". "<br>"; 
echo "-------------------------"."<br>";
//نمایش محصولات به کاربر
$sql = "SELECT `Account Name`,`Price` FROM `products`;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Account Name: " . $row["Account Name"]. " | Price: " . $row["Price"]. "<br>";
  }
} else {
  echo "0 results";
}
echo "-------------------------"."<br>";
//نمایش محصولات به ادمین
$sql = "SELECT * FROM `products`;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $table = $result->fetch_all(MYSQLI_ASSOC);
} else {
  echo "0 results";
}
echo json_encode($table);
echo "<br>"."-------------------------"."<br>";

//نمایش جزئیات محصولات
  $sql = "SELECT `Account Name`,`Description` FROM `products`;";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo " - Account Name: " . $row["Account Name"]. " | Description: " . $row["Description"]. "<br>";
    }
  } else {
    echo "0 results";
  }

CloseCon($conn);

?>