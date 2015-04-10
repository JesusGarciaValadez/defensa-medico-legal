@extends( 'app' )

@section( 'title', 'Beneficios' )

@section( 'section-class', 'beneficios' )

@section( 'content' )
            <section class="internal clearfix content bit-1">
                <article class="clearfix bit-1">
                    <h1 class="bit-1">Beneficios</h1>
                    <article class="bit-2 clearfix">
                        <h2 class="bit-1">Respaldo y protección</h2>
                        <p class="bit-1">No solo es pertenecer a un gremio poderoso, es formar parte de una Asociación que velará por nuestros derechos.</p>
                        <p class="bit-1">Años de trabajo y preparación que has tenido tienen que ser respaldados, nosotros te protegemos, orientamos y ayudamos.</p>
                        <h2 class="bit-1">No importa tu especialidad</h2>
                        <p class="bit-1">Todos y cada uno de los médicos mexicanos debemos actuar en consecuencia de manera rápida y en consecuencia tratar a toda costa, junto con las universidades de México, que de un plumazo no se nos borren tantos años de trabajo, esfuerzo y dedicación.</p>
                    </article>
                    <article class="bit-2 clearfix">
                        {!! Html::image( 'img/beneficios/junta-de-conciliacion.jpg', 'Junta de conciliación y arbitraje', [ 'class' => 'bit-1' ] ) !!}
                    </article>
            </section>
@stop