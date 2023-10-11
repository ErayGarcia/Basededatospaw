<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .contacto-info {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .contacto-item {
        display: flex;
        align-items: center;
    }

    .contacto-item img {
        width: 15%; /* Ajusta el tamaño de las imágenes */
        margin-right: 10px; /* Espacio entre la imagen y el texto */
    }

    .ubicacion-mapa {
        max-width: 600px; /* Ajusta el ancho máximo del mapa */
        margin: 0 auto; /* Centra el mapa en la página */
    }

    iframe {
        width: 100%;
        height: 300px; /* Ajusta la altura del mapa según tus necesidades */
    }
    </style>
</head>
<body>
    <header>
        <!--Menu-->
        <nav id="navbar">
            <div class="contenedor">
                <img src="img/logo.png" alt="Logo" class="logotipo"/>
                <ul class="textoBoton" >
                    <li><a href="index.php" class="Seleccionado">Inicio</a></li>
                    <li><a href="quien.php">Quien soy</a></li>
                    <li><a href="Administracion/portafolio.php">PortaFolio</a></li>
                    <li><a href="Administracion/pedidos.php">Pedidos</a></li>
                    <li><a href="blog.php">blog</a></li>
                    <li><a href="contacto.php">Contactos</a></li>
                    <li><a class="sesion" href="">Iniciar sesión</a></li>
                </ul>          
            </div>
        </nav> 
       <div id="mostrarSlider">
        <div class="Slider-banner">
            <h1>Contacto</h1> 
            <p class="large">Eray Espinosa Garcia</p>
        </div>
       </div>
   </header>
  
   <section id="Portafolio">
   <div class="contacto-info">
            <div class="contacto-item">
                <img src="./img/core.png" alt="Correo Electrónico">
                <p>Correo Electrónico: erayspinosa@gmail.com</p>
            </div>
            <div class="contacto-item">
                <img src="./img/telefono.jpg" alt="Teléfono">
                <p>Teléfono: 9614293591</p>
            </div>
            <div class="contacto-item">
                <img src="./img/dire.jpg"  alt="Dirección">
                <p>Colonia Municipal los 20Presidentes calzada juan sabines</p>
            </div>
        </div>

        <div class="ubicacion-mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d955.1526672942726!2d-93.15599486104703!3d16.74626687425023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd9a0655b092f%3A0xd82e41dcd3a0929b!2sLos%20Presidentes%2C%2029059%20Tuxtla%20Guti%C3%A9rrez%2C%20Chis.!5e0!3m2!1ses-419!2smx!4v1696964529503!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>   
   </section>
  
  <footer>
      <p>universidad</p>
  </footer>
</body>
</html>