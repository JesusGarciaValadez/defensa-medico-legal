@extends( 'app' )

@section( 'title', 'Defensa Médico Legal' )

@section( 'section-class', 'home' )

@section( 'content' )
            <section class="internal clearfix content bit-1">
                {!! Html::image( 'img/home/libros-de-derecho.jpg', 'Con determinación buscamos la Justicia', [ 'class' => 'bit-1' ] ) !!}
                <section class="clearfix advance first bit-3">
                    <p class="bit-1">
                        <a href="http://www.dof.gob.mx/nota_detalle.php?codigo=5386686&fecha=25/03/2015" target="_blank" title="¡Te quieren obligar a pagar año con año por ejercer tu profesión de por vida!" class="clearfix bit-1">
                            {!! Html::image( 'img/home/protegete-con-nosotros.jpg', 'Gente revisando documentos', [ 'class' => 'bit-1' ] ) !!}
                            <span class="bit-1">¡Te quieren obligar a pagar año con año por ejercer tu profesión de por vida!<br />PROTEGETE CON NOSOTROS</span>
                        </a>
                    </p>
                </section>
                <section class="clearfix advance second bit-3">
                    <p class="bit-1">
                        {!! Html::image( 'img/home/suprema-corte-de-justicia-de-la-nacion.jpg', 'Escudo de la Suprema Corte de Justicia de la Nación', [ 'class' => 'bit-3' ] ) !!}
                        <span class="bit-666">Las instancias más altas nos respaldan. La Ley es igual para todos y la justicia no tiene miramientos.</span>
                    </p>
                </section>
                <section class="clearfix advance third bit-3">
                    <p class="bit-1">
                        <a href="" target="_blank" title="Conoce los derechos y regulaciones que la comisión Interamericana ha desarrollado en pro de nosotros." class="clearfix bit-1">
                            {!! Html::image( 'img/home/corte-interamericana-de-derechos-humanos.png', 'Escudo de la Corte Interamericana de Derechos Humanos', [ 'class' => 'bit-3' ] ) !!}
                            <span class="bit-666">Conoce los derechos y regulaciones que la comisión Interamericana ha desarrollado en pro de nosotros.</span>
                        </a>
                    </p>
                </section>
                <section class="clearfix sign bit-1">
                    <p class="bit-80">Último día 13 de abril para realiza tu amparo individual. <a href="" title="!regístrate ahora!" target="_blank">¡Regístrate ahora!</a></p>
                </section>
                <aside class="cleafix bit-1">
                    {!! Html::image( 'img/home/gente-revisando-documentos.jpg', 'Gente revisando documentos', [ 'class' => 'bit-3' ] ) !!}
                    <p class="bit-666">AIDDEM busca proteger todos los intereses de los médicos de manera individual o de manera colectiva.</p>
                </aside>
                <p class="bit-1 bit-80">Individualmente  podemos conseguirte una suspensión de esta ley para que todo este tiempo que dura el amparo, tú no seas molestado y que cuando ganemos este amparo, definitivamente tú serás de los médicos que gocen que la ley no sea aplicada para ti.</p>
                <hr class="bit-1">
                <section class="clearfix affiliation bit-1 clearfix">
                    <aside class="bit-3 clearfix">
                        <figure class="bit-1 clearfix">
                            <figcaption class="bit-1 clearfix"><p class="bit-1">Afíliate</p></figcaption>
                            {!! Html::image( 'img/home/manos-entrelazadas-en-equipo.jpg', 'Manos entrelazadas en equipo', [ 'class' => 'bit-1' ] ) !!}
                        </figure>
                        <p class="bit-80">No permitas que se violenten tus derechos</p>
                    </aside>
                    <section class="commission bit-666 clearfix">
                        <figure class="bit-1 clearfix">
                            <p class="bit-1 clearfix">
                                <a href="" title="Con determinación buscamos la Justicia" target="_blank" class="clearfix">
                                    {!! Html::image( 'img/home/aiddem.jpg', 'Con determinación buscamos la Justicia', [ 'class' => 'bit-1' ] ) !!}
                                </a>
                            </p>
                            <figcaption class="clearfix bit-1">La Corte Interamericana de Derechos Humanos es un órgano judicial de la Organización de los Estados Americanos (OEA) que goza de autonomía frente a los demás órganos de aquella y que tiene su sede en San José de Costa Rica, cuyo propósito es aplicar e interpretar la Convención Americana sobre Derechos Humanos y otros tratados de derechos humanos a los cuales se somete el llamado sistema interamericano de protección de derechos humanos.</figcaption>
                        </figure>
                    </section>
                </section>
            </section>
@stop