<?php
include "config.php";
$list = $_POST["list"];
$id = $_POST["id"];
mysqli_query($con, "UPDATE `tbltodo` SET `list`='$list' WHERE id= $id");
header("location:index.php");
?>