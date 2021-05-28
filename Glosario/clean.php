<?php
include'db.php';
$sql="delete from tab";
$conn->query($sql);
$conn->close();
header("location: index.php");
?>