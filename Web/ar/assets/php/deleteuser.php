<?php
$data = $_GET['user'];
include "../../connection/connection.php"; 

$sql = "DELETE FROM user WHERE email='$data';";

if ($db->query($sql) === TRUE) {
    header("Location: ../../pages/User.php");
} else {
  echo "Error deleting record: " . $db->error;
}
?>