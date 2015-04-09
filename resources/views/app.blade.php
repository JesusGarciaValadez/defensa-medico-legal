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
        <script type="text/javascript">

        </script>
    </head>

    <body class="@yield('section-class')" begin>
        <div class="wrapper clearfix">
            <header class="central clearfix">
                <h1>Asociación Internacional en Defesa de los Derechos del Médico<img src="" alt=""></h1>
                <nav class="clearfix">
                    <ul class="clearfix">
                        <li><a href="" title="Inicio">Inicio</a></li>
                        <li>
                            ¿Quiénes Sómos?
                            <ul class="clearfix">
                                <li>AIDDEM</li>
                                <li>¿Qué hace la AIDDEM?</li>
                            </ul>
                        </li>
                        <li><a href="">Art. 272 LGS</a></li>
                        <li><a href="">Art. 81 LGS</a></li>
                        <li><a href="">Servicios</a></li>
                        <li>
                            Servicios
                            <ul class="clearfix">
                                <li>Corte Interamericana de Derechos Humanos</li>
                                <li>respaldo Internacional</li>
                            </ul>
                        </li>
                        <li><a href="">Afíliate</a></li>
                    </ul>
                </nav>
            </header>
            @yield('content')
            <footer class="central clearfix">
                <div class="clearfix contact">
                    <p class="contact-title">Contáctanos</p>
                    <ul>
                        <li><a href="mailto:informes@aiddem.com" target="_blank" title="informes@aiddem.com">informes@aiddem.com</a></li>
                        <li><a href="mailto:pagos@aiddem.com" title="pagos@aiddem.com" target="_blank">pagos@aiddem.com</a></li>
                        <li><a href="mailto:documentos@aiddem.com" title="documentos@aiddem.com" target="_blank">documentos@aiddem.com</a></li>
                        <li>Tel: +52 55 8421 5531</li>
                    </ul>
                </div>
                <div class="clearfix privacy-policy">
                    <p>&copy; 2014 Asociación Internacional en Defensa de los derechos del Médico</p>
                    <p><a href="/aviso-de-privacidad" title="Aviso de Privacidad" target="_blank">Aviso de Privacidad</a></p>
                </div>
            </footer>
            <a href="#begin" title="Subir">Subir</a>
        </div>
        {!! Html::script( 'js/main.min.js' ) !!}
    </body>
</script>