<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Magia Negra Ink - </title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="style.css">

   <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="assets/icon/fav.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-fav.png">

</head>
<body class="front-page no-sidebar site-layout-full-width header-style-5 menu-has-search menu-has-cart header-sticky">

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">

<div id="site-header-wrap">
    <!-- Top Bar -->
    <div id="top-bar" class="style-2">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">
                
                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="icons">
                            <a href="https://twitter.com/magianegraink" title="Twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            <a href="https://www.facebook.com/Magia-negra-ink-Chile-491105367998114/" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            <a href="https://plus.google.com/106960316756906507643" title="Google Plus"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            <a href="https://www.pinterest.cl/magianegrai/" title="Pinterest"><span class="fa fa-pinterest" aria-hidden="true"></span></a>
                            <a href="https://dribbble.com/magianegrainkchile" title="Dribbble"><span class="fa fa-dribbble" aria-hidden="true"></span></a>
                        </span>
                    </div>
                </div><!-- /.top-bar-socials -->

                <div class="top-bar-content">
                    <span id="top-bar-text">
                        <i class="fa fa-whatsapp"></i> +569 7861 1045
                        <i class="fa fa-envelope"></i>magnegink@gmail.com
                        <i class="fa fa-clock-o"></i>Lun-Dom: 09:00 - 23:00
                    </span><!-- /#top-bar-text -->
                </div><!-- /.top-bar-content -->
            </div>
        </div>
    </div>
    <!-- /#top-bar -->

    <!-- Header -->
    <header id="site-header" class="header-front-page style-5">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner">          


                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                <nav id="main-nav" class="main-nav">
                    <ul class="menu">
                        <li class="menu-item current-menu-item"><a href="{{route('inicio')}}">Inicio</a></li>
                        <li class="menu-item"><a href="{{route('reservation')}}">Reservar sala</a></li>
                        <li class="menu-item"><a href="#">Portafolio</a>
                        </li>
                        <li class="menu-item"><a href="#">Contacto</a></li>
                    </ul>
                </nav><!-- /#main-nav -->

            </div>
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- /#site-header-wrap -->

<div>
    @yield('content')
</div>
<!-- Footer -->
<footer id="footer">
    <div id="footer-widgets" class="container style-1">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_text">
                    <h2 class="widget-title"><span>Sobre Nosotros</span></h2>
                    <div class="textwidget">
                        <p>Tatuar no es solo un trabajo. En magia negra ink, es nuestra pasión. Con cada trabajo que tomamos, nos ponemos la bara alta y asignamos al mejor trabajador para el estilo de tatuaje que necesitas, y con mucho profesionalismo hacemos que la visión del cliente le acompañe para siempre.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_links">
                    <h2 class="widget-title"><span>Mapa del sitio</span></h2>
                    <ul class="mw-links clearfix col2">
                        <li class="style-2"><a href="#">Histortia</a></li>
                        <li class="style-2"><a href="#">Servicios</a></li>
                        <li class="style-2"><a href="#">Equipo</a></li>
                        <li class="style-2"><a href="#">Premios y trofeos</a></li>
                        <li class="style-2"><a href="#">Comunidad</a></li>
                        <li class="style-2"><a href="#">Salud</a></li>
                        <li class="style-2"><a href="#">Noticias y eventos</a></li>
                        <li class="style-2"><a href="#">Sustentabilidad</a></li>
                        <li class="style-2"><a href="#">Preguntas frecuentes</a></li>
                        <li class="style-2"><a href="#">Portafolio</a></li>
                        <li class="style-2"><a href="#">Contacto</a></li>
                        <li class="style-2"><a href="#">Tienda</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_information">
                    <h2 class="widget-title"><span>CONTACTO</span></h2>
                    <ul class="style-2">
                        <li class="address clearfix">
                            <span class="hl">Dirección:</span>
                            <span class="text">El Olimpo 2031, Maipú, Chile</span>
                        </li>
                        <li class="phone clearfix">
                            <span class="hl">Phone:</span> 
                            <span class="text"> +569 7861 1045</span>
                        </li>
                        <li class="email clearfix">
                            <span class="hl">E-mail:</span>
                            <span class="text">magnegink@gmail.com</span>
                        </li>
                    </ul>
                </div>

                <div class="widget widget_spacer">
                    <div class="mw-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10"></div>
                </div>

                <div class="widget widget_socials">
                    <div class="socials">
                        <a target="_blank" href="https://twitter.com/magianegraink"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.facebook.com/Magia-negra-ink-Chile-491105367998114/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://plus.google.com/106960316756906507643"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="https://www.pinterest.cl/magianegrai/"><i class="fa fa-pinterest"></i></a>
                        <a target="_blank" href="https://dribbble.com/magianegrainkchile"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bottom -->
<div id="bottom" class="clearfix style-1">
    <div id="bottom-bar-inner" class="mw-container">
        <div class="bottom-bar-inner-wrap">
        
            <div class="bottom-bar-content">
                <div id="copyright"><p>Copyright © 2018 Gera All rights reserved. by <a href="#">Gerathemes</a></p>
                </div><!-- /#copyright -->
            </div><!-- /.bottom-bar-content -->

            <div class="bottom-bar-menu">
                <ul class="bottom-nav">
                    <li><a href="#/">HISTORIA</a></li>
                    <li><a href="#/">PREGUNTAS FRECUENTES</a></li>
                    <li><a href="#/">EVENTOS</a></li>
                </ul>       
            </div><!-- /.bottom-bar-menu -->
        </div>
    </div>
</div>
</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/animsition.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/js/countTo.js"></script>
<script type="text/javascript" src="assets/js/fitText.js"></script>
<script type="text/javascript" src="assets/js/flexslider.js"></script>
<script type="text/javascript" src="assets/js/vegas.js"></script>
<script type="text/javascript" src="assets/js/cube.portfolio.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/rev-slider.js"></script>

<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>
