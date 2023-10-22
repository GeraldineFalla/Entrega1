<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'contenido.view.php';

}else{
    header('Location: registrate.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heal Paws</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <!--BARRA DE NAVEGACIÓN-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Heal Paws</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./pagina2.php">Catálogo</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./nosotros.php">Nosotros</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./contacto.php">Contacto</a>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button> Buscar
            </button>
          </div>
        </div>
      </nav>

    <header>
        <div class="header-content container">
            <div class="header-txt">
                <h1>TERAPIAS ASISTIDAS CON <span>ANIMALES</span></h1>
                <h2>
                    Catálogo e información para psicólogos
                </h2>
                <button> Información
                </button>
            </div>
        </div>
        </header>

  <section class="about container">
            <div class="about-img">
                <img src="imagenes/section 1.jpeg" alt="">
                <img src="imagenes/section 2.jpg" alt="">
            </div>
            <div class="about-txt">
                <h3> ¿Qué son las terapias asistidas con animales?</h3>
                <p>
                Las terapias asistidas con animales o zooterapia, son la utilización de animales como un recurso terapéutico.  Esto con el objetivo de mejorar las funciones cognitivas y emocionales de las personas tratadas.
                </p>
                <button> Información
                </button>
    </section>

    <main class="Catálogo container">
        <h2>Nuestros <span>elementos</span> destacados</h2>


        <div class="catálogo-content">
            <div class="product">
                <img src="imagenes/Rex.jpg" alt="">
                <h3>Rex</h3>
                <p>
                    Rex es un pastor alemán entrenado por Camilo, uno de nuestros entrenadores más destacados. 
                    Rex tiene 2 años y le encanta trabajar con personas adultas. Se especializa en intervenciones en crisis,
                    intervenciones para traumas y puede ser una buena compañía a quienes padecen de depresión. 
                    No se recomienda como elemento para trabajar con niños por su peso y temperamento. 
                </p>

        </div>
            <div class="product">
                <img src="imagenes/Olivia.jpg" alt="">
                <h3>Olivia</h3>
                <p>
                    Olivia es una de nuestros elementos más jóvenes, con tan solo 8 meses de edad. 
                    Sin embargo, ha sido entranada para asistir en terapias con niños. Se especializa en 
                    asistencia en el autismo, ansiedad social y apoyo emocional en general. 
                </p>

        </div>
            <div class="product">
                <img src="imagenes/Cookie.jpg" alt="">
                <h3>Cookie</h3>
                <p>
                    Cookie es un gato de 2 años, entrenado en apoyo emocional solamente. Le gusta trabajar con
                    personas con discapacidad física y cognitiva. No se recomienda como elemento para trabajar
                    con niños.  
                </p>

        </div>
            <div class="product">
                <img src="imagenes/Bigotes.jpg" alt="">
                <h3>Bigotes</h3>
                <p>
                    Bigotes es un gato de 5 años, especializado en el trabajo con niños y adolescentes. 
                    Está especializado en acompañamiento para exposición en fobias y apoyo emocional en momentos de crisis.
                </p>

        </div>
            <div class="product">
                <img src="imagenes/Spirit.jpg" alt="">
                <h3>Spirit</h3>
                <p>
                    Spirit es uno de nuestros elementos más nuevos. Es un caballo entrenado para la rehabilitación física,
                    pero al mismo tiempo puede trabajar como apoyo emocional para trabajo tanto con niños como con adultos. 
                    Al realizar las terapias con Spirit, es necesario contar con su entrenador, para ser de guía técnica.
                </p>

        </div>


    </main>


<footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <h3>Nuestras redes sociales</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Whatsapp</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>¿Quienes somos?</h3>
            <ul>
                <li><a href="#">Historia</a></li>
                <li><a href="#">Valores</a></li>
                <li><a href="#">Misión</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>Contacto</h3>
            <ul>
                <li><a href="#">Email</a></li>
                <li><a href="#">Mensaje directo</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>Disclaimer</h3>
            <ul>
                <li><a href="#">Aviso legal</a></li>
                <li><a href="#">Políticas</a></li>
                <li><a href="#">Código ético</a></li>
            </ul>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>