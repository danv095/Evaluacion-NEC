<?php 

include("conexion.php");
  $query = "select v.fecha_venta, m.nombre_marca, m.id_marca, mo.nombre_modelo, mo.id_modelo, v.cantidad_venta, mo.precio_unidad, v.total_venta, v.id_modelo, mo.id_marca from ventas as v, marca as m, modelo as mo where v.id_modelo=mo.id_modelo and mo.id_marca=m.id_marca ORDER BY v.fecha_venta ASC";
  $resultado = mysqli_query($conn,$query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<center>
                      <br>
                     <a href="nuevo.php" class="btn btn-success">NUEVO</a>
                     <br><br></center>
<table class="table table-hover">
         	    			<thead class="thead-dark">
         	    				<tr>
         	    			  <th>Fecha Venta</th>
                              <th>Marca</th>
                              <th>Modelo</th>
                              <th>Cantidad Ventas</th>
                              <th>Precio Unitario</th>
                              <th>Total Venta</th>
  		
         	    				</tr>
         	    			</thead>
         	    			<tbody>
         	    				<?php 
         	    				while ($row=mysqli_fetch_array($resultado)) {
         	    				 	
         	    				 ?>
         	    				 <tr>

                                 <th><?php echo $row['fecha_venta']?></th>
                                 <th><?php echo $row['nombre_marca']?></th>
                                 <th><?php echo $row['nombre_modelo']?></th>
                                 <th><?php echo $row['cantidad_venta']?></th>
                                 <th><?php echo $row['precio_unidad']?></th>
                                 <th><?php echo $row['total_venta']?></th>
                           
         	    				     
                                 </tr>
         	    				<?php 
         	    				   }
         	    				 ?>
         	    			</tbody>
         	    		</table>


</body>
</html>