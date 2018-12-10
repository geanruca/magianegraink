@extends('layouts.app')
@section('content')
<body class="header-style-1 menu-has-search menu-has-cart">

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">

<div class="with-bg-title">
    <div id="site-header-wrap">
    </div><!-- /#site-header-wrap -->

    <!-- Featured Title -->
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Sistema de Reservas</h1>
                    <p>El sistema de reservas está hecho para que tanto tatuadores como clientes reserven un espacio en el estudio. El precio por hora es de $3.000 (pesos chilenos).</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <article class="hentry">
                    <div class="post-content-wrap">
                        <h2 class="post-title">
                            <span class="post-title-inner">
                                <a href="#">Haz tu reservación para tatuar ahora</a>
                            </span>
                        </h2><!-- /.post-title -->

                    </div><!-- /.post-content-wrap -->
                </article>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="col-sm-6">
                            <span>TOTAL: </span>
                        </div>
                        <div class="col-sm-6">
                            <span>{$$$$$} </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="col-sm-6 pb-4">
                            <button type="button" name="" id="" class="btn text-white">PAGAR RESERVA</button>
                        </div>
                    </div>                    
                </div>
                <br>
                <table class="table table-inverse table-responsive">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Silla 1</th>
                            <th>Silla 2</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">8:30 - 9:30</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">10:00 - 11:00</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">11:30 - 12:30</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">13:00 - 14:00</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">14:30 - 15:30</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">16:00 - 17:00</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">17:30 - 18:30</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">19:00 - 20:00</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">21:30 - 22:30</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td scope="row">23:00 - 24:00</td>
                                <td>Reservar</td>
                                <td>No disponible</td>
                            </tr>                                                                                                                                                                        
                        </tbody>
                </table>

            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->

    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

@stop