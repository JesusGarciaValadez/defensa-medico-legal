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
