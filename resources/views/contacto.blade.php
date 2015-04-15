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
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                    ">
                    <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </article>
            </section>
@stop