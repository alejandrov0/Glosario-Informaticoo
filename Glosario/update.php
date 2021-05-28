<?php
include'db.php';
$id=$_POST['id'];
$pal=$_POST['pal'];
$sig=$_POST['sig'];
$has=$_POST['has'];
$sql="update pal set pal='$pal', sig='$sig' , has='$has' where id='$id'";
#$sql="update demo_table set name='$name', score='$score'"; -- nunca hacer un update sin where
$result=$conn->query($sql);
$conn->close();
header("location: index.php");
?>