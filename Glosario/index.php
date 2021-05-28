<!DOCTYPE html>
<html>
<head>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <STYLE type="text/css">
H2.center {text-align: center}
  </STYLE>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body style= background-color:#000000>
<div class="container">
</div>
<div class="container">
   <div class="row">
      <div class="neons col-12">
         <h1 style="color:Magenta" ><em>GLOSARIO INFORMATICO</em></h1>
      </div>
   </div>
</div>
<div class="container">
<h5 style="color: #cca9dd">Ingreso de Datos</h5>
       <form class="form-inline m-2" action="create.php" method="POST">
                <label style="color:White",for="pal">Palabra</label>
                <input type="text" class="form-control m-2" id="pal" name ="pal">
                <label style="color:White",for="sig">Significado</label>
                <input type="text" class="form-control m-2" id="sig" name ="sig">
                <label style="color:White",for="has">Hashtag</label>
                <input type="text" class="form-control m-2" id="hash" name ="has">
                <button type="submit" class="btn btn-primary">Ingresar</button>
       </form>
       
</div>
<div class="container">
<form class="form-inline m-2" action="clean.php" method="POST">
                    <label style="color:White" , for="pal">Buscar:</label>
                    <input id="myInput" tipe="text" class="form-control m-2" name="myInput">
</form>

    <div class="container">
    
    <table class="table table-success table-striped">
    <tbody id="myTable" name="myTable">
    <?php include'read.php';?>
    </tbody>
    </table>
</div>
</div>
<div class="container">
    <h5 style="color:pink"><h5>
    <form class="form-inline m-2" action="vista.php" method="POST">
    <button type="submit" class="btn btn-danger">vista 2</button>
</form>
</div>
<div class="container">
    <h5 style="color:red">Eliminar todas las Notas<h5>
    <form class="form-inline m-2" action="clean.php" method="POST">
    <button type="submit" class="btn btn-danger">Borrar todo</button>
</form>
</div>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup",function(){
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
                });
            });
           // document.getElementById('myInput').addEventListener('keyup', (e)=> {console.log(e.target.value) })
        });
        </script>

</body>
</html>