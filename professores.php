<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GYMLINE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
 <body>
   
<?php

$servername = "localhost";
$database = "id20445349_gymline";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * from treballadors as tre, estadisticas_treballadors as est where tre.ID_Treballador=est.ID_Treballador LIMIT 4;';
$resultado = $conn->query($sql);
$num = 1;
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
      if($num%2!=0){
        
       echo "<div class='professors'>";
       echo "<div class='professors1'>";
       echo "<div class='professors_i'>";
       echo "<div class='professors_i1'>";
       echo "<div class='professors_i1_2'>";
       echo "<img id='fotoprofe' src='".$fila['Foto']."'>";
       echo "</div>";
       echo "</div>";
       echo "<div class='professors_i2'>";
       echo "<div class='professors_i2_2'>";
       echo "<form action='https://google.com'>";
        echo " <button id='boton_profes'>VEURE LES SEVES CLASSES</button>";
        echo "</form>";
       echo "</div>";
       echo "</div>";
       echo "</div>";
       
       echo "<div class='professors_d'>";
       echo "<div class='professors_d1'>";
       echo "<div class='professors_d1_2'>";
       echo "<a id='nomprofe'>".$fila['Nom']."</a>";
       echo "<hr id='hr_sobrenos'/>";
       echo "</div>";
       echo "</div>";
       echo "<div class='professors_d2'>";
       echo "<div class='professors_d2_2'>";
       echo "<ul class='estadisticas' style='list-style:none;'>";
       echo "<li>";
       echo "<a class='estadistiques'>Cardio: ".$fila['Cardio']."</a>";
       echo "</li>";
       echo "<li>";
       echo "<a class='estadistiques'>Força: ".$fila['Forca']."</a>";
       echo "</li>";
       echo "<li>";
       echo "<a class='estadistiques'>Elasticitat: ".$fila['Elasticitat']."</a>";
       echo "</li>";
       echo "<li>";
       echo "<a class='estadistiques'>Experiencia: ".$fila['Experiencia']."</a>";
       echo "</li>";
       echo "<li>";
       echo "<a class='estadistiques'>Nocions Alimentaries: ".$fila['Nocions_alimentaries']."</a>";
       echo "</li>";
       echo "</ul>";
       echo "</div>";
       echo "</div>";
       echo "</div>";
       echo "</div>";
       echo "</div>";
      }else{
        echo "<div class='sprofessors'>";
        echo "<div class='sprofessors_d'>";
        echo "<div class='sprofessors_d1'>";
        echo "<div class='sprofessors_d1_2'>";
        echo "<a id='nomprofe'>".$fila['Nom']."</a>";
       echo "<hr id='hr_sobrenos'/>";
        echo "</div>";
        echo "</div>";
        echo "<div class='sprofessors_d2'>";
        echo "<div class='sprofessors_d2_2'>";
        echo "<ul class='estadisticas' style='list-style:none;'>";
        echo "<li>";
        echo "<a class='estadistiques'>Cardio: ".$fila['Cardio']."</a>";
        echo "</li>";
        echo "<li>";
        echo "<a class='estadistiques'>Força: ".$fila['Forca']."</a>";
        echo "</li>";
        echo "<li>";
        echo "<a class='estadistiques'>Elasticitat: ".$fila['Elasticitat']."</a>";
        echo "</li>";
        echo "<li>";
        echo "<a class='estadistiques'>Experiencia: ".$fila['Experiencia']."</a>";
        echo "</li>";
        echo "<li>";
        echo "<a class='estadistiques'>Nocions Alimentaries: ".$fila['Nocions_alimentaries']."</a>";
        echo "</li>";
        echo "</ul>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='sprofessors'>";
        echo "<div class='sprofessors_i'>";
        echo "<div class='sprofessors_i1'>";
        echo "<div class='sprofessors_i1_2'>";
        echo "<img id='fotoprofe' src='".$fila['Foto']."'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='sprofessors_i2'>";
        echo "<div class='sprofessors_i2_2'>";
        echo "<form action='https://google.com'>";
            echo " <button id='boton_profes'>VEURE LES SEVES CLASSES</button>";
            echo "</form>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        
      }
      $num++;
    
    }
    
} else {
    echo "No se encontraron resultados.";
}
      



?>
</body>
</html>