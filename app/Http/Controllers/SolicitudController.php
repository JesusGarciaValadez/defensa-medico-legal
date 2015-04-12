<?php namespace DefensaMedicoLegal\Http\Controllers;

use DefensaMedicoLegal\Http\Requests;
use DefensaMedicoLegal\Http\Controllers\Controller;

use DefensaMedicoLegal\Solicitud;
use Illuminate\Support\Facades\Request;

class SolicitudController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view( 'solicitud' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view( 'solicitud' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( )
    {
        $request = Solicitud::create( Request::all() );

        $doctor  = Request::input( 'nombre_doctor' );
        $email   = Request::input( 'email' );
        $cedula1 = Request::input( 'cedula_1' );
        $cedula2 = Request::input( 'cedula_2' ) || 'Ninguna';
        $cedula3 = Request::input( 'cedula_3' ) || 'Ninguna';
        $especialidad = Request::input( 'especialidad' );
        $celular = Request::input( 'telefono_celular' );
        $parteDeLaRepublica = Request::input( 'parte_republica' );
        $direccion = Request::input( 'direccion_calle_1' );
        $direccion2 = Request::input( 'direccion_calle_2' ) || 'Ninguna';
        $ciudad = Request::input( 'direccion_ciudad' );
        $estado = Request::input( 'direccion_estado' );
        $pais = Request::input( 'direccion_pais' );
        $codigoPostal = Request::input( 'direccion_postal' );
        $confirmoContrato = Request::input( 'confirmed_contract' );
        $confirmoPoliticas = Request::input( 'confirmed_policy' );

        $mail = new \PHPMailer(true); // notice the \  you have to use root namespace here

        $mail->isSMTP(); // tell to use smtp
        $mail->CharSet = "utf-8"; // set charset to
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;  // use smpt auth
        $mail->SMTPSecure = "ssl"; // or ssl
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // most likely something different for you. This is the mailtrap.io port i use for testing.
        $mail->Username = env('EMAIL_USER', '');
        $mail->Password = env('EMAIL_PASSWORD', '');
        $mail->setFrom( "contactodefensamedicolegal@gmail.com", "Defensa Medico Legal" );
        $mail->isHTML(true);// Set email format to HTML
        try
        {
            $mail->Subject = "Datos de tu solicitud";
            $mail->Body    = '<h1>Recibimos tu solicitud ¡Muchas gracias!</h1><p>Recuerda, los datos de depósito son a la cuenta número: 4041280041, clabe: 021180040412800414 de HSBC, a nombre de Arroyo Abogados S.C.</p><p><b>Contáctanos</b></p><ul><li>Montecito 38, piso 8 oficina 29. Col. Napoles. World Trade Center.</li><li>C.P. 03810 México D.F.</li><li>Teléfonos. 52944965, fax 55899147 ext. 11</li><li>Correo electrónico. <a href="mailto:contactodefensamedicolegal@gmail.com" title="contactodefensamedicolegal@gmail.com" target="_blank">contactodefensamedicolegal@gmail.com</a></li>';
            $mail->addAddress( $email, $doctor );
            $mail->send();
        }
        catch ( phpmailerException $e )
        {
            return redirect()->route('error');
        }
        catch ( Exception $e )
        {
            return redirect()->route('error');
        }

        try
        {
            $body = 'Nombre del médico:' . $doctor;
            $body.= '<br /><b>Email</b>:' . $email;
            $body.= '<br /><b>Cedula 1</b>: ' . $cedula1;
            $body.= '<br /><b>Cedula 2</b>: ' . $cedula2;
            $body.= '<br /><b>Cedula 3</b>: ' . $cedula3;
            $body.= '<br /><b>Especialidad</b>: ' . $especialidad;
            $body.= '<br /><b>Telefono celular</b>: ' . $celular;
            $body.= '<br /><b>¿En que parte de la Republica te encuentras?</b>: ' . $parteDeLaRepublica;
            $body.= '<br /><b>Direccion</b>: ' . $direccion;
            $body.= '<br /><b>Direccion2</b>: ' . $direccion2;
            $body.= '<br /><b>Ciudad</b>: ' . $ciudad;
            $body.= '<br /><b>Estado</b>: ' . $estado;
            $body.= '<br /><b>Pais</b>: ' . $pais;
            $body.= '<br /><b>Codigo Postal</b>: ' . $codigoPostal;
            $body.= '<br /><b>Acepto términos y condiciones del contrato</b>: ' . $confirmoContrato;
            $body.= '<br /><b>He leído el aviso de privacidad</b>: ' . $confirmoPoliticas;

            $mail->Subject = "Datos nuevos de solicitud";
            $mail->Body    = $body;
            $mail->clearAddresses();
            $mail->clearAllRecipients();
            $mail->addAddress( 'contactodefensamedicolegal@gmail.com', 'Contacto Sitio Defensa Medico Legal' );
            $mail->send();
        }
        catch ( phpmailerException $e )
        {
            return redirect()->route('error');
        }
        catch ( Exception $e )
        {
            return redirect()->route('error');
        }
        //die('success');

        return redirect()->route('agradecimiento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return abort( 404 );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return abort( 404 );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return abort( 404 );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return abort( 404 );
    }

}
