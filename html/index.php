<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Referencia de la hoja de estilo de Css -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Fonte del Proyecto Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title> Mi Portafolio</title>
    
</head>
<body>
    <!-- Sección del Menú  -->
    <div class="tudo">

    <section class="menu">
        <header class="menu__header">
            
            <h3 class="menu__title">Developer   </h3>
        </header>
        <nav>
            <ul class="menu__list">
                <li>
                    <div class="icon_menu">
                        <span class="linea1"></span>
                        <span class="linea2"></span>
                        <span class="linea3"></span>
                    </div>
                </li>
                  
                
                
             
         
            
            </ul>
            <!-- <li class="menu__list__item__contato"><a href="#contacto">contacto@fulana.com</a></li> -->
        </nav>
    </section>

    <!-- Sección del Header/Title/Hero -->
    <section class="title" >
        <img class="img_port" src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926_1280.jpg" alt="Portada">
        <div class="title__div">
            <div>
                <img hidden class="title__profile" src="https://www.pngkey.com/png/detail/23-230174_asd-our-love-cs-go-pro-team-logos.png">
            </div>
            
            <div class="title__container" >
                <pre>
                <hr>
                <h2 class="title__bio" >Soy Programador en Frond End</h2>
                    
                    <h3 class="title__subsection" >Mi nombre es Brandon Aldair Brayan Soto Adco soy egresado de Tecsup en la carrera de Diseño de Software e Integración de Sistemas. 
Estoy especializado como Developer Frond-End me encargo de la parte visual y estética tanto para una pagina web o aplicativo móvil,
        también soy diseñador grafico para complementar la parte visual y personalizar la pagina Me caracterizo por ser una persona muy empática y 
  hacer todo lo posible por un proyecto y verlo por cumplido no me gusta darme por vencido y demostrar que todo es posible en realizar.</h3>
                    
                    <hr>
                <pre>       
                <ul class="title__network">
                     <!-- Pon los enlaces de tus redes sociales favoritas -->
                    <li class="title__network__item"><a href="https://github.com/BrandonABSotoAdco" class="href" target="_blank">GitHub  </a></li>
                    
                </ul>
                <ul class="title__network">
                     <!-- Pon los enlaces de tus redes sociales favoritas -->
                   
                    <p class="title">by BSoto  </p>
                </ul>
            </div>
        </div>
    </section>
    
    




 <!-- Script del documento JavaScript -->
<script src="validacion.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

</body>
</html>