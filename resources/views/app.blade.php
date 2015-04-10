<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {!! Html::meta( 'description', '' ) !!}
        <meta name="viewport" content="width=device-width, initial-scale=0">
        {!! Html::meta( 'robots', 'all' ) !!}

        <link rel="canonical" href="http://www.defensamedicolegal.com/" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.png" type="image/png" />

        {!! Html::style( 'css/main.css' ) !!}
        {!! Html::script( 'js/vendor/modernizr.min.js' ) !!}
        <script type="text/javascript"></script>
    </head>

    <body class="@yield('section-class')" id="begin">
        <div class="wrapper central clearfix bit-1">
            <header class="internal clearfix bit-1">
                <h1 class="bit-3">Asociación Internacional en Defesa de los Derechos del Médico<img src="" alt=""></h1>
                <nav class="clearfix bit-70 desktop">
                    <ul class="clearfix bit-1">
                        <li><a href="" target="_blank" title="Inicio">Inicio</a></li>
                        <li>
                            ¿Quiénes Sómos?
                            <ul class="clearfix">
                                <li><a href="" target="_blank" title="AIDDEM">AIDDEM</a></li>
                                <li><a href="" target="_blank" title="¿Qué hace la AIDDEM?">¿Qué hace la AIDDEM?</a></li>
                            </ul>
                        </li>
                        <li><a href="" target="_blank" title="Art. 272 LGS">Art. 272 LGS</a></li>
                        <li><a href="" target="_blank" title="Art. 81 LGS">Art. 81 LGS</a></li>
                        <li><a href="" target="_blank" title="Servicios">Servicios</a></li>
                        <li>
                            Servicios
                            <ul class="clearfix">
                                <li><a href="" target="_blank" title="Corte Interamericana de Derechos Humanos">Corte Interamericana de Derechos Humanos</a></li>
                                <li><a href="" target="_blank" title="Respaldo Internacional">Respaldo Internacional</a></li>
                            </ul>
                        </li>
                        <li><a href="" target="_blank" title="Afíliate">Afíliate</a></li>
                    </ul>
                </nav>
            </header>
            @yield('content')
            <footer class="internal clearfix bit-1">
                <div class="clearfix contact bit-3">
                    <p class="contact-title bit-1">Contáctanos</p>
                    <ul class="bit-1">
                        <li class="bit-1"><a href="mailto:informes@aiddem.com" target="_blank" title="informes@aiddem.com">informes@aiddem.com</a></li>
                        <li class="bit-1"><a href="mailto:pagos@aiddem.com" title="pagos@aiddem.com" target="_blank">pagos@aiddem.com</a></li>
                        <li class="bit-1"><a href="mailto:documentos@aiddem.com" title="documentos@aiddem.com" target="_blank">documentos@aiddem.com</a></li>
                        <li class="bit-1">Tel: +52 55 8421 5531</li>
                    </ul>
                </div>
                <div class="clearfix privacy-policy bit-666">
                    <p class="bit-1">&copy; 2014 Asociación Internacional en Defensa de los derechos del Médico</p>
                    <p class="bit-1"><a href="/aviso-de-privacidad" title="Aviso de Privacidad" target="_blank">Aviso de Privacidad</a></p>
                </div>
            </footer>
            <a href="#begin" title="Subir"></a>
        </div>
        {!! Html::script( 'js/main.min.js' ) !!}
    </body>
</html>