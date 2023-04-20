<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GYMLINE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
 <body>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script>
 AOS.init();
 </script>
<?php
include 'header.php';
?>
<div id=contenido_sobrenos>
<div class="slider_sobrenos">
<div id="foto_sobrenos" style="text-align: center;">
<div class="container1">
		<div class="circle-image" id="main-image">
			<img src="gimansio_foto.png">
		</div>
		<div class="thumbnails">
			<div class="circle-image" onclick="changeImage('gimansio_foto.png')">
				<img src="gimansio_foto.png">
			</div>
			<div class="circle-image" onclick="changeImage('gimansio_foto2.png')">
				<img src="gimansio_foto2.png">
			</div>
			<div class="circle-image" onclick="changeImage('gimansio_foto3.png')">
				<img src="gimansio_foto3.png">
			</div>
		</div>
	</div>

	<script src="script.js"></script>
    <script>
        function changeImage(image) {
	    document.getElementById('main-image').innerHTML = '<img src="' + image + '">';}
    </script>

    <div id=texto_sobrenos>
    <p>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, 
        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
        galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, 
        sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. 
        Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como 
        por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
    </p>
    <form action="https://google.com">
       <button id="boton_sobrenos">VOLS REBRE MÉS INFORMACIÓ?</button>
      </form>
    </div>
    
</div>
</div>


<fieldset id="mapa">
<legend id="titulo_mapa">&nbsp;&nbsp;ON TROBARNOS?&nbsp;&nbsp;</legend>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.0434285001693!2d2.1551948750728003!3d41.373141171301704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2645322aabf%3A0x5b671fb3691a9311!2sC%2F%20de%20Ricart%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1681825345727!5m2!1ses!2ses" width="700" height="350"></iframe>
</fieldset>
</div>
<br/>
<br/>
<hr id="hr_sobrenos"/>
<br/>
<div id="titulo_profes">
<h2 id="titulo_opinions">ELS NOSTRES EXPERTS<h2>
</div>
<div>
<?php
 include 'professores.php';
?>
</div>
<br/><br/>
<hr id="hr_sobrenos2"/>
<?php
 include 'valoracions.php';
?>
<br/><br/>
<?php
 include 'footer.php';
?>

</body>
</html>