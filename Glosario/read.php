<?php
    error_reporting(0);
   include'db.php';
   $sql="SELECT * FROM  tab order by has";
   $result= $conn->query($sql);
   //encabezado
   
   echo "<tr >";
   echo "<td><h6>Palabra</h6></td>";
   echo "<td><h6>Significado</h6></td>";
   echo "<td><h6>Hashtag</h6></td>";
   echo "<td><h6>Acciones</h6></td>";
   echo "</tr>";
  
   //filas
   while($row = $result->fetch_assoc()){
      
    
    echo "<tr>";
       

    if ($row['id'] == $_GET['id']) 
    {
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="pal" value="'.$row['pal'].'"></td>';
        echo '<td><input type="text" class="form-control" name="sig" value="'.$row['sig'].'"></td>';
        echo '<td><input type="text" class="form-control" name="has" value="'.$row['has'].'"></td>';
        echo '<td ><button type="submit" class="btn btn-primary">Guardar cambios</button></td>';
        echo '<input type="hidden" name="id" value="'.$row['id'].'">';
        echo '</from>';
    }
    else
    {
        echo "<td>" . $row['pal'] . "</td>";
        echo "<td>" . $row['sig'] . "</td>";
        echo "<td>" . $row['has'] . "</td>";
        echo '<td> <a class="btn btn-primary" href="index.php?id=' . $row['id'] . '"role=button">Actualizar</a></td>';
        echo '<td> <a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '"role=button">Eliminar</a></td>';
    }
    echo "</tr>";
}
   $conn->close();
   
?>
