<?php  
include("conexion.php");
 $query = "select * from ventas";
  $resultado = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nueva Venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>
<body>

<br>
<br>
<center><h4>Nueva Venta</h4></center>
<br><br>

<div class="container">
       <div class="col-lg-6">
         

         <form method="POST" action="agregar.php" enctype="multipart/form-data">

 <div class="form-group">
        <label>Marca</label>
        <select id="marca" name="marca" class="form-select">
            <option value="0"> Selecione una marca</option>
<?php 
                $sql='SELECT id_marca, nombre_marca FROM marca';
                $query=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($query)){
                    $id_marca=$row['id_marca'];
                    $nombre_marca=$row['nombre_marca'];
                    
                ?>
                   <option value="<?php echo $id_marca; ?>"><?php echo $nombre_marca; ?></option>

                <?php
                }
            
            ?>
             

         </select>
         <br>
       <label>Modelo</label>
       <select id="modelo" name="modelo"  class="form-select">
        <option value="0"> Selecione un Modelo</option>
<?php 
                $sql="SELECT id_modelo, nombre_modelo, id_marca FROM modelo ";
                $query=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($query)){
                    $id_modelo=$row['id_modelo'];
                    $nombre_modelo=$row['nombre_modelo'];
                    
                ?>
                   <option value="<?php echo $id_modelo; ?>"><?php echo $nombre_modelo; ?></option>

                <?php
                }
            
            ?>
             
         </select>
         <br>


<?php
  

  ?>

 <div class="form-group">  
         <label>Cantidad</label>
         <input type="number" class="form-control mb-3" name="cantidad_venta" placeholder="Cantidad">
         <label>Precio Unitario</label>
         <input type="number" class="form-control mb-3" name="precio_unidad" placeholder="Precio Unitario">
         <input type="submit" class="btn btn-primary">
         <br><br>
    </form>
       </div>
  </div>


</body>
</html>