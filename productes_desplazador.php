<!-- https://www.jose-aguilar.com/blog/carrousel-de-contenido-html/ -->
<div id="carrusel">
<div>
<a href=""><img src="novetats_blanc.png" class="ventas_inici_dreta"></a>
<a href=""><img src="veure_mes_blanc.png" class="ventas_inici"></a>
</div>
    <a href="#" class="left-arrow"><img src="images/left-arrow.png" /></a>
    <a href="#" class="right-arrow"><img src="images/right-arrow.png" /></a>
    <div class="carrusel">
<?php

$servername = "localhost";
$database = "id20445349_gymline";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * FROM PRODUCTES LIMIT 10;';
$resultado = $conn->query($sql);

$num = 0;
if ($resultado->num_rows > 0) {
    
    while($fila = $resultado->fetch_assoc()) {
        echo "<div class='product' id='product_".$num."'>";
        echo "    <img src=" . $fila['Imatge'] . " width='80%' height='80%' />";
        echo "    <h4>". $fila['Nom'] ."</h4>";
        echo "    <p>". $fila['Preu'] ."€</p>";
        echo "</div>";
        $num++;
        if($num==9){
            $num=0;
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
var current = 0;
var imagenes = new Array();
 
$(document).ready(function() {
    var numImages = 12;
    if (numImages <= 5) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
 
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 7;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    });
 
    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('click', function() {
        if (numImages > current + 7) {
            current = current+1;
        } else {
            current = 0;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    }); 
 });
</script>