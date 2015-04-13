<?php namespace DefensaMedicoLegal\Http\Controllers;

use DefensaMedicoLegal\Http\Requests;
use DefensaMedicoLegal\Http\Controllers\Controller;

//use DefensaMedicoLegal\Contacto;
use Illuminate\Support\Facades\Request;

class ContactoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view( 'contacto' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function send( )
    {
        $nombre  = Request::input( 'nombre' );
        $email   = Request::input( 'email' );
        $mensaje = Request::input( 'mensaje' );

        $mail = new \PHPMailer( true ); // notice the \  you have to use root namespace here

        $mail->isSMTP(); // tell to use smtp
        $mail->CharSet = "utf-8"; // set charset to
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;  // use smpt auth
        $mail->SMTPSecure = "ssl"; // or ssl
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // most likely something different for you. This is the mailtrap.io port i use for testing.
        $mail->Username = env( 'EMAIL_USER', '' );
        $mail->Password = env( 'EMAIL_PASSWORD', '' );
        $mail->setFrom( "contactodefensamedicolegal@gmail.com", "Defensa Medico Legal" );
        $mail->isHTML( true );// Set email format to HTML
        try
        {
            $mail->Subject = "Datos de contacto";
            $mail->Body    = "<h1>Recibimos datos de contacto</h1><p><strong>Nombre: </strong>${nombre}</p><p><strong>Correo: </strong>${email}</p><p><strong>Mensaje: </strong>${mensaje}</p>";
            $mail->addAddress( 'contactodefensamedicolegal@gmail.com', 'Contacto Defensa Medico Legal' );
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

}
