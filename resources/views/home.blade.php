@extends( 'app' )

@section( 'title', 'Defensa Médico Legal' )

@section( 'section-class', 'home' )

@section( 'content' )
            <section class="internal clearfix content bit-1">
                {!! Html::image( 'img/home/libros-de-derecho.jpg', 'Con determinación buscamos la Justicia', [ 'class' => 'bit-90' ] ) !!}
                <section class="clearfix sign bit-90">
                    <p class="bit-90">Último día 16 de abril a las 15:00 hrs. para realizar tu amparo individual… <a href="/solicitud" title="¡Solicítalo ahora!" target="_blank">¡Solicítalo ahora!</a></p>
                </section>
                <section class="clearfix advance second bit-3">
                    <p class="bit-1">
                        {!! Html::image( 'img/home/suprema-corte-de-justicia-de-la-nacion.jpg', 'Escudo de la Suprema Corte de Justicia de la Nación', [ 'class' => 'bit-2' ] ) !!}
                        <span class="bit-1">Las instancias más altas nos respaldan. La Ley es igual para todos y la justicia no tiene miramientos.</span>
                    </p>
                </section>
                <section class="clearfix advance third bit-3">
                    <p class="bit-1">
                        <a href="/legislacion-internacional" target="_blank" title="Conoce los derechos y regulaciones que la comisión Interamericana ha desarrollado en pro de nosotros." class="clearfix bit-1">
                            {!! Html::image( 'img/home/corte-interamericana-de-derechos-humanos.png', 'Escudo de la Corte Interamericana de Derechos Humanos', [ 'class' => 'bit-40' ] ) !!}
                            <span class="bit-1">Conoce los derechos y regulaciones que la comisión Interamericana ha desarrollado en pro de nosotros.</span>
                        </a>
                    </p>
                </section>
                <section class="clearfix advance first bit-3">
                    <p class="bit-1">
                        <a href="http://www.dof.gob.mx/nota_detalle.php?codigo=5386686&fecha=25/03/2015" target="_blank" title="¡Te quieren obligar a pagar año con año por ejercer tu profesión de por vida!" class="clearfix bit-1">
                            {!! Html::image( 'img/home/protegete-con-nosotros.jpg', 'Gente revisando documentos', [ 'class' => 'bit-1' ] ) !!}
                            <span class="bit-1"><strong>¡NOTICIA!</strong> En este momento es importante iniciar la defensa de los interés y Derechos Humanos de los Médicos, a fin de que se impida la aplicación en su perjuicio de los Lineamientos a que se sujetarán el Comité Normativo Nacional de Consejos de Especialidades Médicas y los Consejos de Especialidades Médicas a los que se refiere el artículo 81 y 272 Bis de la Ley General de Salud. (Poner la liga que remita a la publicación en el diario oficial de la federación)</span>
                        </a>
                    </p>
                </section>
                <aside class="cleafix bit-1">
                    {!! Html::image( 'img/home/abogados.jpg', 'Abogados', [ 'class' => 'bit-3' ] ) !!}
                    <p class="bit-666">El Consejo Mexicano de la Defensa Médico Legal cuenta con un importante grupo de Abogados altamente calificados para la defensa de los intereses y Derechos Humanos de los médicos.</p>
                </aside>
                <p class="bit-1 bit-80">Individualmente  podemos conseguirte una suspensión de esta ley para que todo este tiempo que dura el amparo, tú no seas molestado y que cuando ganemos este amparo, definitivamente tú serás de los médicos que gocen que la ley no sea aplicada para ti.</p>
                <hr class="bit-1">
                <section class="clearfix affiliation bit-1 clearfix">
                    <section class="commission bit-1 clearfix">
                        <figure class="bit-1 clearfix">
                            <p class="bit-1 clearfix">
                                <a href="" title="Con determinación buscamos la Justicia" target="_blank" class="clearfix">
                                    {!! Html::image( 'img/home/banderas.jpg', 'Banderas', [ 'class' => 'bit-1' ] ) !!}
                                </a>
                            </p>
                            <figcaption class="clearfix bit-1">En caso necesario para la mejor defensa de tus intereses el Consejo Mexicano de la Defensa Médico Legal te representará en las Instancias Internacionales necesarias tales como la Corte Interamericana de Derechos Humanos.</figcaption>
                        </figure>
                    </section>
                </section>
            </section>
@stop