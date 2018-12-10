@extends('layouts.app')
@section('content')
<!-- Slider -->
<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider3" class="rev_slider fullwidthabanner">
        <ul>
            <!-- Slide -->
            <li data-transition="random">
                <!-- Main Image -->
                <img src="assets/img/slider/8.jpg" alt="" data-bgposition="center center" data-no-retina>
                <!-- Layers -->
                <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-600"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-52','-42','-32','-22']"
                    data-fontsize="['58','54','50','46']"
                    data-lineheight="['68','64','60','56']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    MAGIA NEGRA INK, <br>EL MEJOR ESTUDIO DEL MUNDO <br> <span class="text-accent-color">ESTÁ EN CHILE!!</span>
                </div>
                <div class="sfb tp-caption tp-resizeme text-white text-shadow"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['66','76','86','96']"
                    data-fontsize="['18','16','16','16']"
                    data-lineheight="['30','30','30','28']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-start="1800"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-lasttriggerstate="reset">
                    Celebramos cada trabajo y nos divertimos!
                </div>
                <div class="sfb tp-caption"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['160','170','180','190']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="2100"
                    data-splitin="none"
                    data-splitout="none"
                    data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                    data-responsive="on">
                    <a href="#" class="mw-button outline rounded-3px big">NUESTRO PORTAFOLIO</a>
                </div>
            </li>
            <!-- End Slide -->
            <!-- Slide -->
            <li data-transition="random">
                <!-- Main Image -->
                <img src="assets/img/slider/9.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>
                <!-- Layers -->
                <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow text-center font-weight-600"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-52','-42','-32','-22']"
                    data-fontsize="['60','54','50','46']"
                    data-lineheight="['70','64','60','56']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    Es la decisión que debes tomar
                </div>
                <div class="sfb tp-caption tp-resizeme text-white text-shadow text-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['32','42','52','62']"
                    data-fontsize="['18','16','16','16']"
                    data-lineheight="['28','30','30','28']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                    data-start="1800"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-lasttriggerstate="reset">
                    No te pierdas la oportunidad de trabajar tu cuerpo <br>Con el mejor estudio del mundo.
                </div>
                <div class="sfb tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['128','138','148','158']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="2100"
                    data-splitin="none"
                    data-splitout="none"
                    data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                    data-responsive="on">
                    <a href="{{route('reservation')}}" class="mw-button big outline rounded-3px">Haz tu reserva</a>
                </div>
            </li>
            <!-- End Slide -->
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">                    

                    <!-- SERVICES -->
                    <section id="services-section" class="mw-section services-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center margin-bottom-10">Nuestro trabajo</h2>
                                    <div class="mw-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="32" data-mobi="32" data-smobi="32"></div>
                                </div><!-- /.col-md-12 -->
                                        
                                <div class="col-md-6">
                                    <div class="mw-image-box left clearfix">   
                                        <div class="image-wrap">
                                            <img src="assets/img/services/7.jpg" alt="image" />
                                        </div>                                     
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Arte en piel</a></h3>
                                            <p>Una obra de arte comienza con una decisión, no siempre nos damos cuenta, pero toda desición, aún las que no se toman, duran toda la vida.</p>
                                            <div class="dd-link"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="30" data-mobi="20" data-smobi="20"></div>

                                    <div class="mw-image-box left clearfix">  
                                        <div class="image-wrap">
                                            <img src="assets/img/services/9.jpg" alt="image" />
                                        </div>                                      
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Sr Payaca</a></h3>
                                            <p>Ver llegar a Magia Negra Ink a Chile fue impactante, cada uno de mis poros vibra cuando siento tal responsabilidad, aún no me creo que sea parte de este grupo de  artistas de élite.</p>
                                            <div class="dd-link"><a href="#">LEER MÁS</a></div>
                                        </div>                                        
                                    </div>

                                    <div class="mw-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="mw-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="assets/img/services/8.jpg" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Sr. Rapero</a></h3>
                                            <p>Conocí el arte en los lugares más humildes de este planeta, nunca imaginé que siendo artista podría llegar tan lejos. Agradezco a Magia Negra Ink por creer en mi talento.</p>
                                            <div class="dd-link"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="30" data-mobi="20" data-smobi="20"></div>

                                    <div class="mw-image-box left clearfix">
                                        <div class="image-wrap">
                                            <img src="assets/img/services/10.jpg" alt="image" />
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Fotografía</a></h3>
                                            <p>Magia Negra Ink ofrece sesiones fotográficas muy elaboradas para sus clientes, me pareció hermoso y lógico, pero la mayoría de los estudios no ofrecen este servicio.</p>
                                            <div class="dd-link"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- WORKS -->
                    <section class="mw-section works parallax">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>

                                    <h2 class="text-center text-white margin-bottom-10">ÚLTIMOS TATUAJES</h2>
                                    <div class="mw-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="43" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->

                        <div class="mw-project" data-layout="grid" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="10" data-gapv="10">
                            <div id="project-filter">
                                <div data-filter="*" class="cbp-filter-item">
                                    <span>All</span>
                                </div>
                                <div data-filter=".architecture" class="cbp-filter-item">
                                    <span>Lettering</span>
                                </div>
                                <div data-filter=".building" class="cbp-filter-item">
                                    <span>Realism</span>
                                </div>
                                <div data-filter=".garden" class="cbp-filter-item">
                                    <span>Script</span>
                                </div>
                                <div data-filter=".interior" class="cbp-filter-item">
                                    <span>Traditional</span>
                                </div>
                                <div data-filter=".office" class="cbp-filter-item">
                                    <span>Tribal</span>
                                </div>
                                <div data-filter=".workspace" class="cbp-filter-item">
                                    <span>Japanese</span>
                                </div>
                            </div><!-- /#project-filter -->

                            <div id="projects" class="cbp">
                                <div class="cbp-item architecture interior workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/1r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="project-detail.html">Tattooed Legs</a></h2>
                                                        <p>MAGIA NEGRA INK</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/1-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item building office workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/2r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="project-detail.html">Back Inks</a></h2>
                                                        <p>MAGIA NEGRA INK</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/2-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item architecture garden interior">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/3r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="project-detail.html">Sketching</a></h2>
                                                        <p>MAGIA NEGRA INK</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/3-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item building interior workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/4r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="project-detail.html">Arm Tattoo</a></h2>
                                                        <p>MAGIA NEGRA INK</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/4-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item garden office workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/5r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="project-detail.html">Neck Tattoo</a></h2>
                                                        <p>MAGIA NEGRA INK</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/5-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item architecture garden office">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/6r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="project-detail.html">Hands Tattoo</a></h2>
                                                        <p>MAGIA NEGRA INK</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/6-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item building">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/7r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="project-detail.html">Foot tattoo</a></h2>
                                                        <p>MAGIA NEGRA INK</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/7-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item garden office workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <figure class="effect-sadie">
                                                <img src="assets/img/projects/8r.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="project-detail.html">3d tattoo</a></h2>
                                                        <p>MAGIA NEGRA INK</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/8-full.jpg" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->
                            </div><!-- /#projects -->
                        </div><!--/.mw-project -->

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- OFFER -->
                    <section id="features" class="mw-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center margin-bottom-10">Nuestros servicios</h2>
                                    <div class="mw-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">
                                    <div class="mw-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-45">
                                            <span class="dd-icon icon-ninetyninedesigns"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Diseño de tatuajes</a></h3>
                                            <p>Puedes elegir de entre nuestros artistas, al que más te guste para solicitar un diseño personalizado.</p>
                                            <div class="dd-link dark"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="mw-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-scissors"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Arreglo de tatuajes</a></h3>
                                            <p>¿Tienes un tatuaje que quieres tapar o arreglar? No hay problema, es nuestra especialidad.</p>
                                            <div class="dd-link dark"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="mw-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-angellist"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Reserva de salas</a></h3>
                                            <p>Puedes reservar tu sala a un precio bastante bajo, de manera segura, a través de nuestro sistema de reservas.</p>
                                            <div class="dd-link dark"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="mw-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-viacoin"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Piercings</a></h3>
                                            <p>¿Deseas agregar un piercing a tu cuerpo? No pierdas más el tiempo, trabaja con profesionales.</p>
                                            <div class="dd-link dark"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="mw-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-modx"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Tatuajes en 3D</a></h3>
                                            <p>Porque ya no basta con el realismo, en Magia Negra Ink nos ponemos la bara alta, y si lo que deseas es un tatuaje en 3D, puedes consultar por el tuyo.</p>
                                            <div class="dd-link dark"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="45" data-mobi="30" data-smobi="30"></div>

                                    <div class="mw-icon-box outline icon-effect-3 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-logo-db"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Eventos y modelos</a></h3>
                                            <p>En Magia Negra Ink siempre buscamos ser parte de los eventos y reconocimientos que existen en el país, por ello siempre estamos buscando modelos para estos eventos.</p>
                                            <div class="dd-link dark"><a href="#">LEER MÁS</a></div>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="80" data-mobi="60" data-smobi="50"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- Promotion -->
                    <section class="mw-section promotion">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mw-spacer" data-desktop="8" data-mobi="8" data-smobi="8"></div>
                                    <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0">¿Estás buscando el mejor estudio de tatuadores en Chile?</h2>
                                    <div class="mw-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="text-right text-center-mobile"><a href="#" class="mw-button white rounded-3px">CONTACTANOS AHORA</a></div>
                                    <div class="mw-spacer" data-desktop="0" data-mobi="15" data-smobi="15"></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- FACTS -->
                    <section class="mw-section facts-3 parallax">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="110" data-mobi="80" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-3">
                                    <div class="mw-counter text-center white-type has-plus">
                                        <div class="number" data-speed="5000" data-to="13691" data-in-viewport="yes">13691</div>
                                        <div class="mw-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="text">CLIENTES</div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-3">
                                    <div class="mw-counter text-center white-type has-plus">
                                        <div class="number" data-speed="5000" data-to="29" data-in-viewport="yes">29</div>
                                        <div class="mw-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="text">OFICINAS ALREDEDOR DEL MUNDO</div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-3">
                                    <div class="mw-counter text-center white-type has-plus">
                                        <div class="number" data-speed="5000" data-to="1725" data-in-viewport="yes">1725</div>
                                        <div class="mw-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="text">TATUADORES EXPERTOS</div>
                                    </div>

                                    <div class="mw-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-3">
                                    <div class="mw-counter text-center white-type has-plus">
                                        <div class="number" data-speed="5000" data-to="2653" data-in-viewport="yes">2653</div>
                                        <div class="mw-lines style-2 custom-1 margin-top-10 margin-bottom-10">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="text">DISEÑOS DE TATUAJES PROPIOS</div>
                                    </div>
                                </div><!-- /.col-md-3 -->
                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="110" data-mobi="80" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- TESTIMONIALS -->
                    <section class="mw-section testiminials">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="70" data-mobi="60" data-smobi="50"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <h2>NUESTROS PARTNERS</h2>
                                    <div class="mw-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>
                                    <div class="mw-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                    <div class="mw-partner-grid has-outline col-3 gutter-10">
                                        <div class="partner-wrap clearfix">
                                            <div class="partner-row clearfix">
                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/1.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->

                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/2.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->

                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/3.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->
                                            </div>

                                            <div class="partner-row clearfix">
                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/4.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->

                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/5.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->

                                                <div class="partner-item">
                                                    <div class="inner-item">
                                                        <a target="_blank" href="#"><img src="assets/img/partners/6.png" alt="image" /></a>
                                                    </div>
                                                </div><!-- /.partner-item -->
                                            </div>
                                        </div><!-- /.partner-wrap -->
                                    </div><!-- /.mw-partner-grid -->

                                    <div class="mw-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-6 -->


                                <div class="col-md-12">
                                    <div class="mw-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div><!-- /.page-content -->
            </div>
        </div>
    </div>
</div>
@stop