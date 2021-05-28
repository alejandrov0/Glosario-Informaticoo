<?php
    include'db.php';
    $id = $_GET['id'];
    $sql="delete from tab where id=$id";
    #$sql="delete from tab";
    $result=$conn->query($sql);
    $conn->close();
    #echo '<script>alert("Eliminación efectuada correctamente")</script>';
    header("location: index.php");
?>