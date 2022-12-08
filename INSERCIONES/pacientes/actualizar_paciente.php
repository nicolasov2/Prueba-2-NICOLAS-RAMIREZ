<?php
include "conexion.php";
$insertar = "select * from tabla_paciente";
$result = $conn->query($insertar);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
        echo "<div> ".$row['Id_paciente']." ".strtoupper($row['Nombre_paciente'])."
		</div><div> <a href='actualizar_subir_paciente.php?id=".$row['Id_paciente'].
    "' target='_self'>Actualizar</a> - <a href='eliminar_paciente.php?id=".$row['Id_paciente'].
    "' target='_self'>Eliminar</a></div>";
    }
} else {
    echo "0 resultados";
}
$conn->close();

?>
