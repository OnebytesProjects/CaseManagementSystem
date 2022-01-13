<?php
$data = $_GET['user'];
$status = $_GET['status'];
include "../../connection/connection.php"; 

if($status=="active"){
    $sql = "UPDATE user SET status='inactive' WHERE email='$data';";
}else{
    $sql = "UPDATE user SET status='active' WHERE email='$data';";
}

if ($db->query($sql) === TRUE) {
   header("Location: ../../pages/User.php");
} else {
  echo "Error deleting record: " . $db->error;
}
?>