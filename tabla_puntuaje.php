<?php

$servername = "localhost";
$database = "id20445349_gymline";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

<div class="container">
  <h2 class="text-center">CLASSIFICACIÓ GYMLINE</h2>
  <ul class="tab-menu">
    <li class="active"><a href="#tab1">Millors Guerrers</a></li>
    <li><a href="#tab2">Millors Compradors</a></li>
    <li><a href="#tab3">Classes Setmanals</a></li>
  </ul>

  <div class="tab-content">
    <div id="tab1" class="tab-pane active">
    <table>
    <tr>
        <th>Possició</th>
        <th>Usuari</th>
        <th>Punts totals</th>
      </tr>
    <?php
    $sql = 'SELECT * FROM Clients ORDER BY Gympoints DESC LIMIT 5;';
    $resultado = $conn->query($sql);
    $num = 1;
    if ($resultado->num_rows > 0) {
        
      while($fila = $resultado->fetch_assoc()) {
        if($num==4){
          echo "<tr style='background-color:white;'>";
          echo "<td>-------------------------</td>";
          echo "<td>-------------------------</td>";
          echo "<td>-------------------------</td>";
      echo "</tr>";
        }
        if($num<4){
        echo "<tr class='podio_".$num."'>";  
        }else{
          echo "<tr class='otros'>";
        }
        echo "<td>".$num."</td>";
        echo "<td>". $fila['Nom'] ."</td>";
        echo "<td>". $fila['Gympoints'] ."</td>";
        echo "</tr>";  

        $num++;
      }
      
    } else {
      echo "No se encontraron resultados.";
    }
    
    
    ?>
      
      
    
    </table>
    </div>
    <div id="tab2" class="tab-pane">
    <table>
      <tr>
        <th>Possició</th>
        <th>Usuari</th>
        <th>Productes Comprats</th>
      </tr>
      <?php
    $sql2 = 'SELECT cli.Nom, sum(Quantitat) from Clients as cli, Comandes as com, Productes as pro where cli.ID_Client=com.ID_Client and pro.ID_Producte=com.ID_Producte group by cli.Nom order by sum(Quantitat) desc limit 5;';
    $resultado2 = $conn->query($sql2);
    $num = 1;
    if ($resultado2->num_rows > 0) {
        
      while($fila = $resultado2->fetch_assoc()) {
        if($num==4){
          echo "<tr style='background-color:white;'>";
          echo "<td>-------------------------</td>";
          echo "<td>-------------------------</td>";
          echo "<td>-------------------------</td>";
      echo "</tr>";
        }
        if($num<4){
        echo "<tr class='podio_".$num."'>";  
        }else{
          echo "<tr class='otros'>";
        }
        echo "<td>".$num."</td>";
        echo "<td>". $fila['Nom'] ."</td>";
        echo "<td>". $fila['sum(Quantitat)'] ."</td>";
        echo "</tr>";  

        $num++;
      }
      
    } else {
      echo "No se encontraron resultados.";
    }
    
    
    ?>
    </table>
    </div>
    <div id="tab3" class="tab-pane">
    <table>
      <tr>
        <th>Possició</th>
        <th>Usuari</th>
        <th>Classes Realitzades</th>
      </tr>
      <?php
    $sql3 = 'SELECT cli.Nom, count(*) from Clients as cli, Classes as cla, Classes_Clients as clacli where cli.ID_Client=clacli.ID_Client and cla.ID_Classe=clacli.ID_Classe group by cli.Nom order by count(*) desc limit 5;';
    $resultado3 = $conn->query($sql3);
    $num = 1;
    if ($resultado3->num_rows > 0) {
        
      while($fila = $resultado3->fetch_assoc()) {
        if($num==4){
          echo "<tr style='background-color:white;'>";
          echo "<td>-------------------------</td>";
          echo "<td>-------------------------</td>";
          echo "<td>-------------------------</td>";
      echo "</tr>";
        }
        if($num<4){
        echo "<tr class='podio_".$num."'>";  
        }else{
          echo "<tr class='otros'>";
        }
        echo "<td>".$num."</td>";
        echo "<td>". $fila['Nom'] ."</td>";
        echo "<td>". $fila['count(*)'] ."</td>";
        echo "</tr>";  

        $num++;
      }
      
    } else {
      echo "No se encontraron resultados.";
    }
    
    
    ?>
    </table>
    </div>
  </div>
</div>

<script>
  // Obtener la lista de enlaces de pestañas
  var tabLinks = document.querySelectorAll('.tab-menu li a');

  // Iterar sobre los enlaces de pestañas
  for (var i = 0; i < tabLinks.length; i++) {
    // Escuchar el evento de clic en cada enlace de pestaña
    tabLinks[i].addEventListener('click', function(event) {
      // Evitar que se cargue la página al hacer clic en un enlace
      event.preventDefault();

      // Obtener el ID de la pestaña correspondiente al enlace clicado
      var tabId = this.getAttribute('href');

      // Ocultar todos los contenidos de las pestañas
      var tabContent = document.querySelectorAll('.tab-content .tab-pane');
      for (var j = 0; j < tabContent.length; j++) {
        tabContent[j].classList.remove('active');
      }

      // Mostrar el contenido de la pestaña clicada
      var activeTab = document.querySelector(tabId);
      activeTab.classList.add('active');

      // Desactivar la clase "active" en todas las pestañas
      for (var k = 0; k < tabLinks.length; k++) {
        tabLinks[k].parentNode.classList.remove('active');
      }

      // Activar la clase "active" en la pestaña clicada
      this.parentNode.classList.add('active');
    });
  }
</script>


 