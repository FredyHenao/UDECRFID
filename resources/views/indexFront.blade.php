<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UdeCRFID</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/frontend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100italic,100,300,300italic' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link href="{{ asset('assets/frontend/css/agency.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">UDEC RFID</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Quienes somos?</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Galería</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Servicios</a>
                </li>
                <li>
                    <a class="page-scroll" href="#info">Información</a>
                </li>
                <li>
                    <a class="page-scroll" href="#clients">Apoyo</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contactenos</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in" style="color: #fed136;">Innovación y creatividad</div>
            <div class="intro-heading" style="color: #fed136;" >Sistema de identificación por radiofrecuencia</div>
            <a href="{{ url('/login') }}" class="page-scroll btn btn-xl" style="color: #1d1d1d;">Inicio de sesión</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-heading">¿Quienes somos?</h2>
            </div>
            <div class="col-md-6">
                <p class="p-about">Somos un grupo de investigación de la Universidad de Cundinamarca, enfocados en mejorar el sistema de prestaciones de bienes dentro de la universidad, controlando el fujo mediante tarjetas de identificación por radiofrecuencia (RFID).</p>
                <!--  <p class="span-about">Morbi malesuada tincidunt fermentum.</p>-->
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Galería</h2>
                <h3 class="section-subheading text-muted">Grupo de trabajo y avances del proyecto</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('assets/frontend/img/portfolio/01.jpg') }}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Corporate X</h4>
                    <p class="text-muted">Mobile Web Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('assets/frontend/img/portfolio/02.jpg') }}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Corporate Y</h4>
                    <p class="text-muted">Website Design</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('assets/frontend/img/portfolio/03.jpg') }}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Corporate Z</h4>
                    <p class="text-muted">Online Store</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('assets/frontend/img/portfolio/04.jpg') }}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Corporate A</h4>
                    <p class="text-muted">Brand Indentity</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('assets/frontend/img/portfolio/05.jpg') }}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Corporate B</h4>
                    <p class="text-muted">Street Billboard</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('assets/frontend/img/portfolio/06.jpg') }}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Dreams</h4>
                    <p class="text-muted">Product Identity</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Servicios</h2>
                <h3 class="section-subheading text-muted">El sistema de RFID se emplea en las siguientes áreas de la Universidad de Cundinamarca.</h3>
            </div>
        </div>
        <div class="row top-margin-md">
            <div class="col-md-6">
                <a href="https://dribbble.com/shots/819957-Imac-psd"><img src="{{ asset('assets/frontend/img/portfolio/biblioteca.png') }}" class="img-responsive" alt=""></a>
            </div>
            <div class="col-md-6">
                <p class="before-header top-margin-lg">Biblioteca</p>
                <h2 class="section-heading">Prestamo de libros y computadores</h2>
                <h3 class="section-subheading text-muted bottom-margin-sm">Todo estudiante y funcionario de la Universidad de Cundinamarca deberá
                    solicitar sus préstamos en biblioteca mediante su carnet institucional, los datos del bien prestado serán almacenados en la tarjeta
                    y con su perfil podrá ver el estado de los bienes que tenga registrados, así como la fecha en que se obtuvo y la fecha límite para devolución.</h3>
                <!--<a href="#" class="btn btn-xl">Learn More</a>-->
            </div>
        </div>

        <div class="row top-margin-lg hidden-sm hidden-xs">
            <div class="col-md-6">
                <p class="before-header top-margin-lg">Porteria</p>
                <h2 class="section-heading">Entrada y salida de la universidad</h2>
                <h3 class="section-subheading text-muted bottom-margin-sm">Es necesario presentar el carnet institucional al momento de ingresar
                    y salir de la universidad, con el propósito de controlar y evitar accesos no permitidos de personas ajenas de la universidad.</h3>
                <!--<a href="#" class="btn btn-xl">Learn More</a>-->
            </div>
            <div class="col-md-6">
                <a href="https://dribbble.com/shots/1317713-iPad-Air-Template"><img src="{{ asset('assets/frontend/img/portfolio/porteria.png') }}" class="img-responsive" alt=""></a>
            </div>
        </div>

        <div class="row top-margin-md">
            <div class="col-md-6">
                <a href="https://dribbble.com/shots/819957-Imac-psd"><img src="{{ asset('assets/frontend/img/portfolio/audiovisuales.png') }}" class="img-responsive" alt=""></a>
            </div>
            <div class="col-md-6">
                <p class="before-header top-margin-lg">Audiovisuales</p>
                <h2 class="section-heading">Prestamo de cables y elementos visuales</h2>
                <h3 class="section-subheading text-muted bottom-margin-sm">Para el préstamo de elementos audiovisuales, es necesario que se presente
                    el carnet institucional al funcionario del área, el funcionario verificará que los datos coincidan con la persona
                    que solicita el préstamo y procederá a registrar los elementos al carnet de la persona.</h3>
                <!--<a href="#" class="btn btn-xl">Learn More</a>-->
            </div>
        </div>

        <div class="row top-margin-lg hidden-sm hidden-xs">
            <div class="col-md-6">
                <p class="before-header top-margin-lg">Deportes</p>
                <h2 class="section-heading">Prestamo de elementos de deporte</h2>
                <h3 class="section-subheading text-muted bottom-margin-sm">Para llevar un control histórico sobre el préstamo de elementos deportivos, es
                    necesario que el estudiante o funcionario se presente al área de deportes y solicite mediante su carnet institucional los elementos que
                    desea obtener, es necesario que para realizar una devolución presente el carnet con el que se realizó el retiro. </h3>
                <!--<a href="#" class="btn btn-xl">Learn More</a>-->
            </div>
            <div class="col-md-6">
                <a href="https://dribbble.com/shots/1317713-iPad-Air-Template"><img src="{{ asset('assets/frontend/img/portfolio/deportes.png') }}" class="img-responsive" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- IOnformación general -->
<section id="info" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Información General</h2>
            </div>
        </div>
    </div>
</section>
<section id="info">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-heading">Préstamo de materiales bibliográficos y audiovisuales</h2>
            </div>
            <div class="col-md-6">
                <p class="p-about">
                    El usuario puede acceder al préstamo personal de libros, audiovisuales y revistas. Algunos materiales como periódicos y
                    libros de referencia tienen limitaciones para el préstamo por su alta demanda de consulta, por esto sólo pueden ser consultados
                    en sala.
                </p>
                <!--  <p class="span-about">Morbi malesuada tincidunt fermentum.</p>-->
            </div>
        </div>
    </div>
</section>
<section id="info" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-heading">Préstamo personal </h2>
            </div>
            <div class="col-md-6">
                <p class="p-about">
                    El usuario, al registrarse a préstamo en la Biblioteca, automáticamente quedará registrado en las diferentes bibliotecas
                    que conforman el Sistema de Bibliotecas de la universidad. En total puede prestar un máximo de 4 materiales entre libros y
                    revistas y máximo 5 materiales audiovisuales.
                    El préstamo es personal y debe hacerse presentando su carnet de la universidad.
                </p>
                <!--  <p class="span-about">Morbi malesuada tincidunt fermentum.</p>-->
            </div>
        </div>
    </div>
</section>
<section id="info" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-heading">Tiempo de préstamo  </h2>
            </div>
            <div class="col-md-6">
                <p class="p-about">
                    La duración del préstamo será de 10 días calendario para los libros, revistas y audiovisuales.
                </p>
                <!--  <p class="span-about">Morbi malesuada tincidunt fermentum.</p>-->
            </div>
        </div>
    </div>
</section>
<section id="info" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-heading">Sanciones con multas   </h2>
            </div>
            <div class="col-md-6">
                <p class="p-about">
                    -El usuario que tarde en la devolución y/o renovación de los materiales, será sancionado con suspensión temporal de préstamo. Pérdida o daño del material
                    <br>-Los libros, revistas y demás documentos de la biblioteca son para uso común. No se deben rayar, mutilar o subrayar frases y párrafos.
                    <br>-En caso de pérdida o daño, el usuario deberá hacer la reposición del material para el paz y salvo de la cuenta de préstamo.
                    <br>-Debe reponer el material con un libro físico original del mismo título, autor y/o tema.
                    <br>-En caso contrario, deberá hacer una consignación bancaria por el valor del material, más el costo correspondiente al proceso técnico para su ingreso en el catálogo.
                </p>
                <!--  <p class="span-about">Morbi malesuada tincidunt fermentum.</p>-->
            </div>
        </div>
    </div>
</section>



<!-- IOnformación general  -->
<!-- Team Section -->
<section id="clients" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Con el apoyo de</h2>
                <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis,<br> quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</h3>-->
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6">

            </div>
            <div class="col-md-3 col-sm-6">
                <a target="_blank" href="http://cgi.tutsplus.com/">
                    <img src="{{ asset('assets/frontend/img/logos/ing.png') }}" class="img-responsive img-centered" alt="">
                </a>
                <div class="text-center">
                    <p class="before-header top-margin-lg">Facultad de Ingeniería</p>
                    <h3 class="section-subheading text-muted">Universidad de Cundinamarca</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <a target="_blank" href="https://wordpress.org/">
                    <img src="{{ asset('assets/frontend/img/logos/gis.png') }}" class="img-responsive img-centered" alt="">
                </a>
                <div class="text-center">
                    <p class="before-header top-margin-lg">GISTFA</p>
                    <h3 class="section-subheading text-muted">(Grupo de Insvestigación de Sistemas y Tecnologías de Facatativá)</h3>
                </div>

            </div>
            <div class="col-md-3 col-sm-6">

            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contactenos</h2>
                <h3 class="section-subheading text-muted bottom-margin-sm">Calle 14 con Avenida 15 Facatativá</h3>
                <h3 class="section-subheading text-muted bottom-margin-sm">(+57 1) 892 0706 | 8920707</h3>
                <a target="_blank" href="mailto:unicundi@ucundinamarca.edu.co" class="btn btn-xl">unicundi@ucundinamarca.edu.co</a>
            </div>
        </div>


    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">For more information visit: <a href="http://templune.com">http://templune.com</a></span>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="http://templune.com/plantilla-de-bootstrap-gratis.html">Credits and Resources</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="{{ asset('assets/frontend/img/portfolio/01x.jpg') }}" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p><strong>You can download this PSD Mockup template in this portfolio sample item at</strong> <a target="_blank" href="https://www.behance.net/gallery/37627001/iPhone-6s-Space-Gray-mockups-FREEBIE">Mockup</a></p>
                            <ul class="list-inline">
                                <li>Date: July 2016</li>
                                <li><b>Author:</b> <a target="_blank" href="http://360mockups.com/">360 Mockups</a></li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="{{ asset('assets/frontend/img/portfolio/02x.jpg') }}" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p><strong>You can download this PSD Mockup template in this portfolio sample item at</strong> <a target="_blank" href="http://freebiesbug.com/psd-freebies/app-showcase-mockup-psd/">Mockup</a></p>
                            <ul class="list-inline">
                                <li>Date: July 2016</li>
                                <li><b>Author:</b> <a target="_blank" href="https://dribbble.com/ikima">Vitaly</a></li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="{{ asset('assets/frontend/img/portfolio/03x.jpg') }}" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p><strong>You can download this PSD Mockup template in this portfolio sample item at</strong> <a target="_blank" href="https://creativemarket.com/muwa_one/707383-Workspace-Mockup-Set-5">Mockup</a></p>
                            <ul class="list-inline">
                                <li>Date: July 2016</li>
                                <li><b>Author:</b> <a target="_blank" href="https://creativemarket.com/muwa_one">Best Pixels</a></li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="{{ asset('assets/frontend/img/portfolio/04x.jpg') }}" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p><strong>You can download this PSD Mockup template in this portfolio sample item at</strong> <a target="_blank" href="https://dribbble.com/shots/1998349-Ceramic-Bottle-Mockup-Free-PSD">Mockup</a></p>
                            <ul class="list-inline">
                                <li>Date: July 2016</li>
                                <li><b>Author:</b> <a target="_blank" href="http://graphicburger.com/">Raul Taciu</a></li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="{{ asset('assets/frontend/img/portfolio/05x.jpg') }}" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p><strong>You can download this PSD Mockup template in this portfolio sample item at</strong> <a target="_blank" href="http://graphicburger.com/street-billboard-psd-mockup-2/">Mockup</a></p>
                            <ul class="list-inline">
                                <li>Date: July 2016</li>
                                <li><b>Author:</b> <a target="_blank" href="http://graphicburger.com/">Graphic Burger</a></li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="{{ asset('assets/frontend/img/portfolio/06x.jpg') }}" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p><strong>You can download this PSD Mockup template in this portfolio sample item at</strong> <a target="_blank" href="http://graphicburger.com/paper-pouch-packaging-mockup/">Mockup</a></p>
                            <ul class="list-inline">
                                <li>Date: July 2016</li>
                                <li><b>Author:</b> <a target="_blank" href="http://graphicburger.com/">Graphic Burger</a></li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('assets/frontend/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('assets/frontend/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('assets/frontend/js/contact_me.js') }}"></script>

<!-- Theme JavaScript -->
<script src="{{ asset('assets/frontend/js/agency.min.js') }}"></script>

</body>

</html>
