<header>
    <!-- #9d0f0b -->
     <div class="logo">
       <a href="b.php"><img src="logo.png" alt="Logo de la página"></a>
     </div>
    <nav>
      <ul>
        <li class="li_foto"><img class="img2" src="transsobrenosaltres.png" id="transnosaltres"><a href="sobre_nosaltres.php" id="textnosaltres">Sobre nosaltres</a></li>
        <li class="li_foto"><div id="divfuncionament">
        <img class="img2" src="transfuncionamet.png" id="transfuncionament"><a href="#" id="textfuncionament">Funcionament </a></div>
          <ul class="sublista">
             <li><a href="#">Horaris</a></li>
             <li><a href="#">Cuotes</a></li>
             <li><a href="#">App</a></li>
             <li><a href="#">Classes</a></li>
 </ul>
           </li>
           <li class="li_foto"><div id="divtenda">
           <img class="img2" id="fototenda" src="transtenda.png"><a id="textTenda" href="#">Tenda</a></div>
             <ul class="sublista">
               <li class="li_foto"><a class="desplegable" href="#">Roba</a></li>
              <li class="li_foto"><a class="desplegable" href="#">Suplements nutricionals</a></li>
              <li class="li_foto"><a class="desplegable" href="#">Equipament</a></li>
              <li class="li_foto"><a class="desplegable" href="#">Accesoris</a></li>
             </ul>
           </li>
           <li><img class="img2" id="transcontacte" src="transcontacte.png"><a href="#" id="textcontacte">Contacte</a></li>
           <li><img class="img2" id="trans" src="bossa_transaprent.png"><a id="textbossa" href="#">La meva bossa</a></li>
          <li><img class="img2" src="transperfil.png" id="transperfil"><a id="textperfil" href="#">Perfil</a></li>
        </ul>
       </nav>
     </header>
     <script>
    const enlace = document.getElementById('textbossa');
    const imagen = document.getElementById('trans');
enlace.addEventListener('mouseover', function() {
  imagen.style.backgroundColor = '#9d0f0b';
});
enlace.addEventListener('mouseout', function() {
  imagen.style.backgroundColor = 'white';
});


const enlace1 = document.getElementById('textperfil');
const imagen1 = document.getElementById('transperfil');
enlace1.addEventListener('mouseover', function() {
  imagen1.style.backgroundColor = '#9d0f0b';
});
enlace1.addEventListener('mouseout', function() {
  imagen1.style.backgroundColor = 'white';
});


const enlace2 = document.getElementById('textcontacte');
const imagen2 = document.getElementById('transcontacte');
enlace2.addEventListener('mouseover', function() {
  imagen2.style.backgroundColor = '#9d0f0b';
});
enlace2.addEventListener('mouseout', function() {
  imagen2.style.backgroundColor = 'white';
});


const enlace3 = document.getElementById('textTenda');
const imagen3 = document.getElementById('fototenda');
enlace3.addEventListener('mouseover', function() {
  imagen3.style.backgroundColor = '#9d0f0b';
});
enlace3.addEventListener('mouseout', function() {
  imagen3.style.backgroundColor = 'white';
});


const enlace4 = document.getElementById('textfuncionament');
const imagen4 = document.getElementById('transfuncionament');
enlace4.addEventListener('mouseover', function() {
  imagen4.style.backgroundColor = '#9d0f0b';
});
enlace4.addEventListener('mouseout', function() {
  imagen4.style.backgroundColor = 'white';
});


const enlace5 = document.getElementById('textnosaltres');
const imagen5 = document.getElementById('transnosaltres');
enlace5.addEventListener('mouseover', function() {
  imagen5.style.backgroundColor = '#9d0f0b';
});
enlace5.addEventListener('mouseout', function() {
  imagen5.style.backgroundColor = 'white';
});
      </script>