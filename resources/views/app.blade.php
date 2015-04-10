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
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-61784403-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>

    <body class="@yield('section-class')" id="begin">
        <div class="wrapper central clearfix bit-1">
            <header class="internal clearfix bit-1">
                <h1 class="bit-30 clearfix">
                    <a href="/" target="_self" title="Consejo Mexicano de la Defensa Médico Legal" class="clearfix">
                        {!! Html::image( 'img/home/consejo-mexicano-de-la-defensa-medico-legal.png', 'Consejo Mexicano de la Defensa Médico Legal' ) !!}
                    </a>
                </h1>
                <nav class="clearfix bit-70 desktop">
                    <ul class="clearfix bit-1">
                        <li><a href="/" target="_self" title="Inicio">Inicio</a></li>
                        <li><a href="/quienes-somos" target="_self" title="¿Quiénes Sómos?">¿Quiénes Somos?</a></li>
                        <li><a href="/art-272" target="_self" title="Art. 272 LGS">Art. 272 LGS</a></li>
                        <li><a href="/art-81" target="_self" title="Art. 81 LGS">Art. 81 LGS</a></li>
                        <li><a href="/servicios" target="_self" title="Servicios">Servicios</a></li>
                        <li><a href="/legislacion-internacional" target="_self" title="Legislación Internacional">Legislación Internacional</a></li>
                        <li><a href="/solicitud" target="_self" title="Solicitud">Solicitud</a></li>
                    </ul>
                </nav>
            </header>
            @yield('content')
            <footer class="internal clearfix bit-1">
                <div class="clearfix contact bit-60">
                    <p class="contact-title bit-1">Contáctanos</p>
                    <p class="bit-1">Montecito 38, piso 8 oficina 29. Col. Napoles. World trade center. 03810 México D.F. </p>
                    <p class="bit-1">Teléfonos. 52944965, fax 55899147 ext. 11</p>
                    <p class="bit-1">Conmutador. 90002640 ext. 47</p>
                    <p class="bit-1">Correo electrónico. <a href="mailto:contacto@defensamedicolegal.com.mx" target="_blank" title="contacto@defensamedicolegal.com.mx">contacto@defensamedicolegal.com.mx</a></p>
                </div>
                <div class="clearfix privacy-policy bit-40">
                    <p class="bit-1">&copy; 2014 Consejo Mexicano de la Defensa Médico Legal</p>
                    <p class="bit-1"><a href="/aviso-de-privacidad" title="Aviso de Privacidad" target="_self">Aviso de Privacidad</a></p>
                </div>
            </footer>
            <a href="#begin" title="Subir"></a>
        </div>
        {!! Html::script( 'js/main.min.js' ) !!}
    </body>
</html>