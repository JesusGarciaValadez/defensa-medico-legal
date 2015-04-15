<?php namespace DefensaMedicoLegal\Http\Controllers;

use DefensaMedicoLegal\Http\Requests;
use DefensaMedicoLegal\Http\Controllers\Controller;

//use DefensaMedicoLegal\Contacto;
use Omnipay\Omnipay;
use Omnipay\Common\CreditCard;
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

    public function payment()
    {
        $gateway    = Omnipay::create( 'PayPal_Express' );
        $gateway->setUsername( 'jesus' );
        $gateway->setPassword( '12345' );
        $gateway->setTestmode( true );
        $gateway->setSignature( 'signature' );
        $gateway->setSolutionType( 'Sole' );
        $gateway->setLandingPage( 'Billing' );
        $gateway->setBrandName( 'Platzi' );
        $gateway->setHeaderImageUrl( 'https://static.platzi.com/static/images/platzi-assets/platzi-app.15e80089d963.png' );
        $gateway->setLogoImageUrl( 'https://static.platzi.com/static/images/platzi-assets/platzi-app.15e80089d963.png' );
        $gateway->setBorderColor( '#0000000' );

        $formInputData = array(
            'firstName' => 'Example',
            'lastName' => 'User',
            'number' => '4111111111111111',
            'expiryMonth' => '12',
            'expiryYear' => '2016',
            'cvv' => '123'
        );
        $card = new CreditCard( $formInputData );

        $gatewayOptions = [
            'card' => $card,
            'token' => 'A015GQlKQ6uCRzLHSGRliANi59BHw6egNVKEWRnxvTwvLr0',
            'amount' => '10.00',
            'currency' => 'MXN',
            'description' => 'Pago de servicio',
            'transactionId' => '0001',
            'clientIp' => '192.168.10.10',
            'returnUrl' => 'http://www.defensamedicolegal.com.mx/agradecimiento',
            'cancelUrl' => 'http://www.defensamedicolegal.com.mx/contacto'
        ];
        $response = $gateway->authorize( $gatewayOptions )->send();

        try
        {
            if ( $response->isSuccessful() )
            {
                // payment is complete
                return redirect()->route( 'agradecimiento' );
            }
            elseif ( $response->isRedirect() )
            {
                $response->redirect(); // this will automatically forward the customer
            }
            else
            {
                // not successful
                //return redirect()->route( 'contacto' );
                exit($response->getMessage());
            }
        }
        catch ( \Exception $e )
        {
            exit( $e->getMessage() );
        }
    }
}
