

<?php
// Incluimos el archivo de configuración
define('MYSQL_HOST', 'mysql');
define('MYSQL_DATABASE', 'netflix');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'root');

$mysqli = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
$id=$_GET['id'];
$res = mysqli_query($mysqli, "UPDATE empleado set activo= NOT activo where id_empleado=".$id.";");
if ($res){
  echo "cambiado con exito";
  header("refresh:5;url=list_empleados.php",5);
  exit();
}else{
    echo "error";
}
?>
