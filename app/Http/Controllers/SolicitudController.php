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
            $mail->Username = "leroutezero@gmail.com";
            $mail->Password = "*Gm41l-Y1sus01*";
            $mail->setFrom("contacto@defensamedicolegal.com.mx", "Defensa Medico Legal");
            $mail->Subject = "Test";
            $mail->MsgHTML("This is a test");
            $mail->addAddress("jesus.garciav@me.com", "Yisus");
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
        die('success');

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
