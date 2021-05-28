<?php
    include'db.php';
    $pal=$_POST["pal"];
    $sig=$_POST["sig"];
    $has=$_POST["has"];
    $sql="insert into tab (pal, sig, has) values ('$pal','$sig','$has')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>