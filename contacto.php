<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Contactt</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Heal Paws</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./pagina2.html">Catálogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contacto.php">Contacto</a>

                
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button> Buscar
            </button>
          </div>
        </div>
      </nav>
    
     
<form action="insert_user.php" method="POST">
    <div class="input-group">

     <div class = "input-container">
          <input type ="text" name="Name" placeholder= "Nombre">
          <i class="fa-solid fa-user"></i>

      <div class = "input-container">
          <input type ="text" name="LastName" placeholder= "Apellido">
          <i class="fa-solid fa-user"></i>    

      <div class = "input-container">
          <input type ="password" name="Password" placeholder= "Contraseña">
          <i class="fa-solid fa-lock"></i>

      <div class = "input-container">
          <input type ="email" name="Emailaddress" placeholder= "Correo electrónico">
          <i class="fa-solid fa-envelope"></i>

      <div class = "input-container">
          <input type ="tel" name="Phone" placeholder= "Teléfono">
          <i class="fa-solid fa-phone"></i>     
     </div>
     <input name="send" type="submit" class="btn center-button" value="Enviar">
    </div>
</form>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>