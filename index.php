<?php
session_start(); // Iniciar sesión para acceder a las variables de sesión

// Mostrar mensaje de éxito si está presente
if (isset($_SESSION['success_message'])) {
    echo '<script type="text/javascript">
            alert("' . $_SESSION['success_message'] . '");
          </script>';
    // Limpiar el mensaje de éxito de la sesión
    unset($_SESSION['success_message']);
}

// Mostrar mensaje de error si está presente
if (isset($_SESSION['error_message'])) {
    echo '<script type="text/javascript">
            alert("' . $_SESSION['error_message'] . '");
          </script>';
    // Limpiar el mensaje de error de la sesión
    unset($_SESSION['error_message']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Christian Alvarado - Desarrollador Web">
    <meta title="christian alvarado">
    <title>Portafolio - Christian Alvarado</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
    <link rel="stylesheet" href="assets/css/johndoe.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header">
        <div class="container">
            <div class="header-content">
                <h4 class="header-subtitle">Hola, soy</h4>
                <h1 class="header-title">Christian Alvarado</h1>
                <h6 class="header-mono">Front-end & Back-end | Desarrollador Web</h6>
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Acerca de mí</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Experiencia</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="img/perfil.jpg" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Christian Alvarado</h5>
                        <div class="brand-subtitle">Front-end & Back-end | Desarrollador Web</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portafolio</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contactame</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">¿Quién soy?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">Desarrollador Web Front-end & Back-end</h5>
                <p class="mt-20">Hola, soy Christian Alvarado, un desarrollador web full stack con experiencia en frontend y backend, apasionado por crear soluciones digitales completas y funcionales.</p>
                <a href="CV - ALVARADO BARRETO CHRISTIAN.pdf" download="CV - ALVARADO BARRETO CHRISTIAN.pdf">
                    <button class="btn btn-outline-danger">
                        <i class="icon-down-circled2"></i> Descargar mi CV
                    </button>
                </a>
            </div>

            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Información Personal</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Fecha de Nacimiento</span> : 02/10/2001</li>
                    <li><span>Correo</span> : calvaradob02@gmail.com</li>
                    <li><span>Phone</span> : + (51) 915205726</li>
                    <li><span>GitHub</span> : calvaradob0210 </li>
                    <li><span>Dirección</span> : Lima - Perú</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" target="_blank" href="https://github.com/calvaradob0210"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Mi Experiencia</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Diseño UX/UI</h6>
                        <p class="subtitle">Me especializo en crear interfaces intuitivas y atractivas que mejoran la experiencia del usuario. Utilizo herramientas como <strong>Figma</strong> para diseñar prototipos interactivos, wireframes y mockups que conectan con los usuarios y cumplen con los objetivos del proyecto.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Desarrollo Web</h6>
                        <p class="subtitle">Desarrollo soluciones web completas y funcionales, combinando tecnologías modernas para el frontend y el backend. Utilizo <strong>React</strong> para crear interfaces dinámicas e interactivas, <strong>Express</strong> y <strong>PHP</strong> para manejar la lógica del servidor, y <strong>Tailwind CSS</strong> para estilizar de manera rápida y eficiente los proyectos.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Resume Section-->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">Mi</span> Experiencia</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Experiencia</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">02 de julio - Presente</h6>
                            <P>STUDIOS VIZOR</P>
                            <P class="subtitle">Encargado de la implementación de nuevas funcionalidades, optimización
                                y mejoras de los sistemas existentes y explorar tecnologías emergentes que puedan
                                beneficiar a la empresa. Identificación de oportunidades de mejora, propuesta de
                                soluciones innovadoras y la implementación de proyectos que impulsen la
                                competitividad y eficiencia de la empresa.</P>
                            <hr>
                            <h6 class="title text-danger">01 abril 2024 – 01 julio 2024</h6>
                            <P>NEONHOUSELED SAC DECORACIÓN DE INTERIORES</P>
                            <P class="subtitle">Encargado de debuggear el código de la página web de las unidades
                                correspondientes, implementando mejoras y soluciones a problemas identificados
                                dentro del software, como la falta de un objetivo claro, navegación complicada, mala
                                experiencia de usuario, problemas SEO, deficiencias en la imagen profesional y la falta
                                de llamadas a la acción, entre otros. Además, desarrollar de manera adecuada los
                                proyectos que me han sido asignados, asegurando su correcta ejecución y optimización.</P>
                            <hr>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Educación</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2019 - Presente</h6>
                            <P>Universidad Nacional Federico Villarreal</P>
                            <P class="subtitle">Ingenieria de Sistemas</P>
                            <hr>
                            <h6 class="title text-danger">28 de marzo 2024</h6>
                            <P>CURSO ESPECIALIZADO: REACT CON VITE.JS Y TAILWIND CSS </P>
                            <P class="subtitle">Elaboración de aplicativos web con React con Tailwind para Front-end y Express JS para el Back-end</P>
                            <hr>
                            <h6 class="title text-danger">09 julio 2023 – 10 diciembre 2023</h6>
                            <P>CERTIFICACIÓN ESPECIALIZADA EN MICROSOFT EXCEL 2019 </P>
                            <P class="subtitle">Cursos Especialización: Excel Básico 2019, Excel Intermedio 2019, Excel Avanzado
                                2019, Excel Tablas y Gráficos Dinámicos 2019</P>
                            <hr>
                            <h6 class="title text-danger">04 febrero 2023 – 27 mayo 2023</h6>
                            <P>CERTIFICACIÓN ESPECIALIZADA EN DATABASE ADMINISTRATOR </P>
                            <P class="subtitle">Cursos Especialización: Modelamiento de Datos, SQL Server Implementación 2016,
                                SQL Server Administración 2016 y Business Intelligence SQL Server 2016.</P>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Habilidades</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>HTML5 &amp; CSS3</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>JavaScript</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>PHP</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Laravel</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>SQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>React</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Express &amp; Node</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Idiomas</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>Español</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Ingles</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Mi</span> Portafolio</h1>
            <div class="portfolio">
                <div class="portfolio-container">
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="img/contigovoy.png" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">ContigoVoy</h6>
                                    <p class="subtitle">Aplicacion de Citas de Psicologos - Perú</p>
                                    <a href="https://contigo-voy.com/" target="_blank" style="color: white;">Ir a la pagina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="img/asden.png" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">Asden</h6>
                                    <p class="subtitle">Pagina web que simula una ONG</p>
                                    <a href="https://asdenperu.com/" target="_blank" style="color: white;">Ir a la pagina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="img/pokedex.png" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">Pokedex</h6>
                                    <p class="subtitle">Aplicativo web/movil que simula una Pokedex con todos los pokemones</p>
                                    <a href="https://pokeapisss.netlify.app/" target="_blank" style="color: white;">Ir a la pagina</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="img/ecommerce.png" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">Ecommerce</h6>
                                    <p class="subtitle">Tienda Virtual con React y Tailwind CSS</p>
                                    <a href="https://github.com/calvaradob0210/tienda-react" target="_blank" style="color: white;">Ir al repositorio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="img/biblioteca.png" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">Biblioteca UNFV</h6>
                                    <p class="subtitle">Biblioteca con reserva y prestamo de libros</p>
                                    <a href="https://github.com/calvaradob0210/biblioteca" target="_blank" style="color: white;">Ir al repositorio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section contact" id="contact">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Contactame</h4>
                        <form action="guardar_contacto.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" name="nombre" type="text" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="correo" type="email" placeholder="Correo" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="mensaje" placeholder="Mensaje *" rows="7" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary">Enviar Mensaje</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Contacto</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (51) 915205726</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br> <span class="text-muted">Lima - Perú</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">calvaradob02@gmail.com</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>
                    document.write(new Date().getFullYear())
                </script> Creado por</i> Christian Alvarado
            </p>
        </div>
    </footer>

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>

</html>