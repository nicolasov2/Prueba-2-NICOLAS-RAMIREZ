<?php
include_once "conexion.php";
$sql = "SELECT nombre_patologia,descripcion,id_medico,tratamiento,img_patologia FROM patologias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div style='float: left;border:1px solid'><h1 style='border:1px solid'>" . $row["nombre_patologia"]. "</h1><br><img style='border:1px solid' src='" . $row["img_patologia"]. 
    "' alt='' width='20%' align='right' ><h4>Descripcion: </h4>" . $row["descripcion"]."<br><h4>Tratamiento:</h4><br>".
    " " . $row["tratamiento"]."<br> "."<br></div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>