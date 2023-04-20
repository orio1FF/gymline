<div id="faq-container">
  <div id="faq-header">
    <h2>Preguntas Frecuentes</h2>
    <button id="faq-btn">FAQ'S</button>
    <span id="close-btn"></span>
  </div>
  <div id="faq-content">
    <div class="faq">
      <h3>¿Cómo funciona esto?</h3>
      <div class="answer">
        <p>Este es un ejemplo básico de cómo crear un contenedor FAQ con un botón para cambiar su tamaño y mostrar las preguntas frecuentes en un acordeón.</p>
      </div>
    </div>
    <div class="faq">
      <h3>¿Qué lenguajes se necesitan?</h3>
      <div class="answer">
        <p>Necesitarás HTML, Javascript y PHP para crear este contenedor FAQ con un botón para cambiar su tamaño y mostrar las preguntas frecuentes en un acordeón.</p>
      </div>
    </div>
    <div class="faq" >
      <h3>¿Es difícil de crear?</h3>
      <div class="answer" >
        <p>No es muy difícil si tienes conocimientos básicos de HTML, Javascript y PHP. Con un poco de práctica, puedes crearlo fácilmente.</p>
        
      </div>
    </div>
     
        <div class="faq">
          <form action="https://google.com">
        <button id="boton_faq">VEURE'N MÈS</button>
          </form>
        </div>
</div>
</div>
    </div>
  </div>
</div>

<script>
const faqBtn = document.getElementById("faq-btn");
const faqContainer = document.getElementById("faq-container");
const faqContent = document.getElementById("faq-content");
const closeBtn = document.getElementById("close-btn");
const faq3 = document.getElementById("faq3");
const faq3_0 = document.getElementById("faq3.0");
let isExpanded = false;


faqBtn.addEventListener("click", () => {
  if (!isExpanded) {
    faqContainer.style.width = "81%";
    faqContainer.style.height = "400px";
    faqBtn.textContent = "Reduir";
    faqContent.style.display = "block";
    isExpanded = true;
    
  } else {
    faqContainer.style.width = "81%";
    faqContainer.style.height = "81px";
    faqBtn.textContent = "FAQ'S";
    faqContent.style.display = "none";
    isExpanded = false;
  }
});

closeBtn.addEventListener("click", () => {
  faqContainer.style.width = "81%";
  faqContainer.style.height = "81px";
  faqBtn.textContent = "FAQ'S";
  faqContent.style.display = "none";
  isExpanded = false;
});



</script>