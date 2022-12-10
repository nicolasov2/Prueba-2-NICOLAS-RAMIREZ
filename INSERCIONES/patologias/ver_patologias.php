<?php
include_once "../conexion.php";
$sql = "SELECT Nombre_patologia,Descripcion,Id_medico,Tratamiento FROM tabla_patologias";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<div style='float: left;border:1px solid'><h1 style='border:1px solid'>" . $row["Nombre_patologia"]. "</h1><br><img style='border:1px solid' src='". 
        "' alt='' width='20%' align='right' ><h4>Descripcion: </h4>" . $row["Descripcion"]."<br><h4>Tratamiento:</h4><br>".
        " " . $row["Tratamiento"]."<br> "."<br></div>";
    }
}else{
    echo "0 results";
}

$conn->close();
?>
