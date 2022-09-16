<?php 
include("conexion.php");


$modelo=$_POST['modelo'];
$cantidad_venta=$_POST['cantidad_venta'];
$precio_unidad=$_POST['precio_unidad'];
$stock_modelo=$_REQUEST['stock_modelo'];


$total = $cantidad_venta * $precio_unidad;


if ($cantidad_venta <= $stock_modelo) {
    $stock = ($cantidad_venta-$stock_modelo);
    $sqlstock="UPDATE modelo SET stock_modelo='$stock' where id_modelo='$modelo'";
}else{
    echo "No hay suficientes unidades disponibles";
}

$sql="INSERT INTO ventas (cantidad_venta, total_venta, fecha_venta, id_modelo) values ('$cantidad_venta','$total',CURDATE(),'$modelo')";
$resultado = mysqli_query($conn,$sql);
if ($resultado) {
    echo "subido con exito";
    header('location:lista.php');
}else{
    echo "Ocurrio un error";
    header('location:nuevo.php');
}

?>
