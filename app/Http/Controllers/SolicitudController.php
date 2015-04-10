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
        $mail = new \PHPMailer(true); // notice the \  you have to use root namespace here
        try
        {
            $mail->isSMTP(); // tell to use smtp
            $mail->CharSet = "utf-8"; // set charset to
            $mail->SMTPDebug = 1;
            $mail->SMTPAuth = true;  // use smpt auth
            $mail->SMTPSecure = "ssl"; // or ssl
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // most likely something different for you. This is the mailtrap.io port i use for testing.
            $mail->Username = "contactodefensamedicolegal@gmail.com";
            $mail->Password = "Ra87-@tfg";
            $mail->setFrom( "contactodefensamedicolegal@gmail.com", "Defensa Medico Legal" );
            $mail->Subject = "Datos de tu solicitud";
            $mail->isHTML(true);// Set email format to HTML
            $mail->Body    = '<h1>Recibimos tu solicitud ¡Muchas gracias!</h1><p>Recuerda, los datos de depósito son a la cuenta número: 4041280041, clabe: 021180040412800414 de HSBC, a nombre de Arroyo Abogados S.C.</p><p><b>Contáctanos</b></p><ul><li>Montecito 38, piso 8 oficina 29. Col. Napoles. World trade center.</li><li>03810 México D.F.</li><li>Teléfonos. 52944965, fax 55899147 ext. 11</li><li>Conmutador. 90002640 ext. 47</li><li>Correo electrónico. <a href="mailto:contactodefensamedicolegal@gmail.com" title="contactodefensamedicolegal@gmail.com" target="_blank">contactodefensamedicolegal@gmail.com</a></li>';
            $mail->addAddress( $email, $doctor );
            $mail->send();
        }
        catch ( phpmailerException $e )
        {
            dd( $e );
        }
        catch ( Exception $e )
        {
            dd( $e );
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
