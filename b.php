<!-- buscador fondos -->
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
 <div class="ContainerCenter" >
  <!-- Radio Seleccionar -->
  <input type="radio" name="Carrusel" id="Slider1" checked>
  <input type="radio" name="Carrusel" id="Slider2">
  <input type="radio" name="Carrusel" id="Slider3">
  
  <div class="Carrusels">
    <!-- Imagen contenido -->
    <div class="Carrusel"></div> 
    <div class="Carrusel"></div>
    <div class="Carrusel"></div>

    

  </div>
 
  
  
</div>


 <div class="contenedor-tabs" data-aos="fade-up" data-aos-delay="125" data-aos-once=true>
  <input type="radio" id="una" name="tractor" checked='checked' class="invisible"/> 
  <input type="radio" id="dole" name="tractor" class="invisible"/> 
  <input type="radio" id="tele" name="tractor" class="invisible"/>
  
  <label for='una'>NOU MÈTODE ESPORTIU</label>	
  <label for='dole'>LA NOSTRA FAMÍLIA</label>
  <label for='tele'>OBJECTIU</label>
  		
      
  <div class="tab una">
    <p>
       <img src="https://2.bp.blogspot.com/-Ycpx_Jl2zBc/UG5BMFNpZWI/AAAAAAAACGo/ikysNYg5_q0/s1600/k.jpg" alt="sólo una pic para ilustrar" />El uso de <a href='https://ksesocss.blogspot.com/2014/03/slider-tabs-galeria-puros-css.html'>pestañas o tabs</a> para mostrar contenido bajo demanda es un recurso de sobra conocido y utilizado en el diseño de páginas
    </p>

    <p>Igual de conocido es que para su construcción puedes elegir entre varias técnicas para lograrlo. Y si conoces un poco este blog y de qué va, no te extrañará que veamos un ejemplo basado en puro Css para realizar tabs con tres premisas:</p>

		<p>At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues.</p>
	</div>

			<div class="tab dole">
					  <p>
     Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>

					<p><img src="https://lh6.googleusercontent.com/Gp8wvGtz97C3VydCEyBGHoG37rxoZiZHpvTaX7IF-jU=w324-h430-no" alt="sólo una pic para ilustrar" />Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
					  <p>
     Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
			</div>

			<div class="tab tele">
					<p> No officiis lobortis eam. Soluta laboramus mei cu, sea modo dicant eu, cu ius eius aperiri. An pro dicam contentiones. Duo amet lorem officiis ex, an legimus nusquam atomorum per, per cu erat ornatus. Nibh oratio eam eu. An lobortis sapientem delicatissimi mea, ex dicunt tacimates quo, nec ad aeque adipisci efficiantur.</p>

					<p> Pri ad quando suscipit conclusionemque, ad vel dico ubique. Et sit utinam apeirian. Ea nemore delicatissimi eos, cum adhuc dignissim ad, putent ocurreret has ut. Eos amet duis solet id, est ne prima nostro virtute, ea pri etiam recteque disputando. Enim dolorum vivendum at vel, vis odio consul te.</p>
			</div>

			<div class="tab catole">
					<p> Facer affert offendit ei his, pri ei illud reformidans. Labores eligendi omittantur ut mea, ne cum eirmod indoctum mnesarchum, ei ullum iuvaret molestiae vix. Oblique imperdiet intellegam vix ea. Unum vocent alienum usu ne, ius commodo vituperatoribus ne, ex illum primis nec.</p>

					<p> Mentitum convenire eam ei, stet omnis velit ex sit. Nusquam lobortis adversarium an est, ea nam oportere gubergren. In pro habeo admodum liberavisse, eu dicit nobis lobortis vix, pro ex liber offendit. Per impetus officiis forensibus no. Justo comprehensam cu quo, no veri iusto usu. Mazim gubergren eos an, usu labore ornatus vulputate ut, usu te magna expetendis referrentur.</p>
			</div>
	</div>

  <div id="contenedor_tabla">
  <?php
 include 'tabla_puntuaje.php';
?>
</div>
<div data-aos="fade-left" data-aos-delay="75" data-aos-once=true>
<?php
 include 'productes_desplazador.php';
?>
</div>
<div data-aos="fade-right" data-aos-delay="700" data-aos-once=true>
<?php
 include 'productes_desplazador2.php';
?>
</div>
<!--
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-0d27478a-71d4-482e-a744-c03f4bf3d0b0"></div>
-->

<?php
 include 'FAQS.php';
?>


<?php
 include 'footer.php';
?>


</body>
</html>