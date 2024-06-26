<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#Inicio">Inicio</a></li>
                    <li><a href="#Nosotros">Nosotros</a></li>
                    <li><a href="#Servicios">Servicios</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container" id="Inicio">
            <div class="header-txt">   
                <h1>Medical Center</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                     elit. Ducimus earum enim, deserunt deleniti 
                     voluptas dignissimos asperiores ea animi 
                     architecto labore sequi eveniet. Accusantium
                     nobis repellat praesentium ipsa accusamus commodi voluptatem.
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="imagenes/left.png" alt="medico">
            </div>
        </div>
    </header>

    <section class="about container" id="Nosotros">
        <div class="about-img">
            <img src="imagenes/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ducimus earum enim, deserunt deleniti 
                voluptas dignissimos asperiores ea animi 
                architecto labore sequi eveniet. 
           </p>
           <br>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Ducimus earum enim, deserunt deleniti 
            voluptas dignissimos asperiores ea animi 
            architecto labore sequi eveniet.
       </p>
        </div>
    </section>

    <main class="servicios" id="Servicios">
        <h2>servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>pediatria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Dermatologia</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Ginecologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>cardiologia</h3>
            </div>
        </div>
    </main>

    <section class="formulario container" id="Contacto">
        <form method="post" autocomplete="off">
            <h2>Agenda consulta</h2>

            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo Electronico">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunction()">
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">Logo</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction(){
            window.location.href="http://axelcorrea.kesug.com/?i=1"
        }
    </script>
</body>
</html>