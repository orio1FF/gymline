<!-- https://www.jose-aguilar.com/blog/carrousel-de-contenido-html/  -->


<div id="carrusel">
<div>
<a href=""><img src="novetats_blanc.png" class="ventas_inici_dreta"></a>
<a href=""><img src="veure_mes_blanc.png" class="ventas_inici"></a>
</div>
    <a href="#" class="left-arrow2"><img src="images/left-arrow.png" /></a>
    <a href="#" class="right-arrow2"><img src="images/right-arrow.png" /></a>
    <div class="carrusel2">
<?php

$servername = "localhost";
$database = "id20445349_gymline";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql2 = 'SELECT * FROM PRODUCTES ORDER BY ID_PRODUCTE DESC LIMIT 10;';
$resultado2 = $conn->query($sql2);

$num2 = 0;
if ($resultado2->num_rows > 0) {
    
    while($fila2 = $resultado2->fetch_assoc()) {
        echo "<div class='product' id='product2_".$num2."'>";
        echo "    <img src=" . $fila2['Imatge'] . " width='80%' height='80%' />";
        echo "    <h4>". $fila2['Nom'] ."</h4>";
        echo "    <p>". $fila2['Preu'] ."€</p>";
        echo "</div>";
        $num2++;
        if($num2==9){
            $num2=0;
        }
    }
    
} else {
    echo "No se encontraron resultados.";
}

?>

        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
var current2 = 0;
var imagenes2 = new Array();

$(document).ready(function() {
    var numImages2 = 12;
    if (numImages2 <= 5) {
        $('.right-arrow2').css('display', 'none');
        $('.left-arrow2').css('display', 'none');
    }
 
    $('.left-arrow2').on('click',function() {
        if (current2 > 0) {
            current2 = current2 - 1;
        } else {
            current2 = numImages2 - 7;
        }
 
        $(".carrusel2").animate({"left": -($('#product2_'+current2).position().left)}, 600);
 
        return false;
    });
 
    $('.left-arrow2').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow2').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow2').on('click', function() {
        if (numImages2 > current2 + 7) {
            current2 = current2+1;
        } else {
            current2 = 0;
        }
 
        $(".carrusel2").animate({"left": -($('#product2_'+current2).position().left)}, 600);
 
        return false;
    }); 
 });
</script>