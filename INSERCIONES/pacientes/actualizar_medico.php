<?php
include "conexion.php";
$insertar = "select * from tabla_medico";
$result = $conn->query($insertar);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
        echo "<div> ".$row['Id_medico']." ".strtoupper($row['Nombre_medico'])."
		</div><div> <a href='../INSERCIONES/actualizar_subir.php?id=".$row['Id_medico'].
    "' target='_self'>Actualizar</a> - <a href='../INSERCIONES/eliminar_medico.php?id=".$row['Id_medico'].
    "' target='_self'>Eliminar</a></div>";
    }
} else {
    echo "0 resultados";
}
$conn->close();

?>
