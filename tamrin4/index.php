<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully \n"; 

$sql = "INSERT INTO `products`(`Account Name`, `User`, `Password`, `Price`) VALUES ('Spotify','user2_test','pass2_test', 240000);";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully \n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE `products` SET `Account Name`='Ubisoft',`User`='user12_test',`Password`='pass12_test', `Price`=150000 WHERE id=2;";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully \n";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $sql = "UPDATE `products` SET `isDeleted`=TRUE WHERE id=1;";

if ($conn->query($sql) === TRUE) {
    echo "record Deleted successfully \n";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

CloseCon($conn);

?>