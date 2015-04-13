@extends( 'app' )

@section( 'title', 'Contácta con nosotros' )

@section( 'section-class', 'contacto' )

@section( 'content' )
            <section class="internal clearfix content bit-1">
                <article class="clearfix bit-1">
                    <h1 class="bit-1">Contácto</h1>
                    {!! Form::open( [ 'action' => 'ContactoController@send' ], [ 'class' => 'bit-1 clearfix' ] ) !!}
                        <fieldset class="bit-1 clearfix">
                            <p class="bit-1">Llena correctamente como se te indica</p>
                            <div class="input bit-1">
                                {!! Form::label( 'nombre', 'Nombre', [ 'class' => 'bit-1' ] ) !!}
                                {!! Form::text( 'nombre', null, [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1">
                                {!! Form::label( 'email', 'Email' ) !!}
                                {!! Form::email( 'email', null, [ 'class' => 'bit-1', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1">
                                {!! Form::label( 'mensaje', 'Mensaje' ) !!}
                                {!! Form::textarea( 'mensaje', null, [ 'class' => 'bit-1 clearfix', 'required' => 'required' ] ) !!}
                            </div>
                            <div class="input bit-1">
                                {!! Form::submit('Enviar') !!}
                            </div>
                        </fieldset>
                    {!! Form::close() !!}
                </article>
            </section>
@stop