<?php
include '../../conexion.php';
$id=$_REQUEST['id'];
$consulta="DELETE FROM tabla_medico where Id_medico=$id";
if(mysqli_query($conn,$consulta))
{
    echo "la noticia se elimino";
}
else
{
    echo "error al eliminar";
}
?>