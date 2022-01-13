<?php

$db = mysqli_connect("localhost","root","root","lawfirm");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>