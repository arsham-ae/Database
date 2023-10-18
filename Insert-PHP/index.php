<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";


$sql = "INSERT INTO `messages`(`Subject`, `Text`) VALUES ('Test1','2Hiiiiiiiiiii');";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO `users`(`First Name`, `Last Name`, `Email`) VALUES ('Jack2','2James','j4k@gmail.com');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

CloseCon($conn);

?>