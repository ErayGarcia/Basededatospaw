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
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .text {
            flex: 1;
        }

        img {
            max-width: 20%;
            height: auto;
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
            <h1>¿Quién soy?</h1> 
            <p class="large">Eray Espinosa Garcia</p>
        </div>
       </div>
   </header>
  
   <section id="Portafolio">
        <div class="container">
            <div class="text">
                <h1>Soy Eray Espinosa Garcia</h1>
                <h2>Estudiante de la Universidad Autónoma de Chiapas</h2>
                <p>Estoy estudiando la carrera de Sistemas Computacionales y actualmente me encuentro cursando el 5to semestre.</p>
                <h2>Mis Metas en la Vida</h2>
                <p>Mi objetivo principal es convertirme en un gran programador. Sueño con tener un empleo estable donde disfrute lo que hago y poder fundar mi propia empresa dedicada al desarrollo de aplicaciones y videojuegos.</p>
            </div>
            <img src="./img/yo.jpeg" alt="Eray Espinosa Garcias">
        </div>
   </section>
  
  <footer>
        <p>Universidad Autónoma de Chiapas <br>
        Email: Erayspinosa@gmail.com <br>
            Telefono: 9614293591
        </p>
  </footer>
</body>
</html>