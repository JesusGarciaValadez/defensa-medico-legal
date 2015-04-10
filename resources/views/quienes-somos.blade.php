@extends( 'app' )

@section( 'title', 'AIDDEM - ¿Quiénes Somos?' )

@section( 'section-class', 'quienes-somos' )

@section( 'content' )
            <section class="internal clearfix content bit-1">
                <article class="clearfix bit-1">
                    {!! Html::image( 'img/quienes-somos/martillo-y-estetoscopio.jpg', 'Martillo y estetoscopio', [ 'class' => 'bit-1' ] ) !!}
                    <h1 class="bit-1">¿Quiénes Somos?</h1>
                    <p class="bit-1">El Consejo Mexicano de la Defensa Médico Legal es una agrupación de destacados Abogados e importantes Médicos Especialistas que cuenta con la capacidad, experiencia, personal calificado y las instalaciones necesarias para la defensa de los intereses de los Médicos ante las instancias administrativas y judiciales tanto Nacionales como Internacionales.</p>
                    {!! Html::image( 'img/quienes-somos/balanza-y-serpiente.png', 'Balanza y serpiente' ) !!}
            </section>
@stop