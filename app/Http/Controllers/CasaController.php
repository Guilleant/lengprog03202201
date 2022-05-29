<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa;
use App\Models\FormaPago;
use App\Models\Persona;

class CasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $casas = Casa::all();

        //dd( $casas[0]->formapago->descripcion );

        //dd( $casas[0]->persona->apellidos );
        return view('casa.index', compact('casas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personas = Persona::all()->pluck( 'nombre_completo', 'id');
        $formaspago = FormaPago::all()->pluck( 'descripcion', 'id' );
        //dd( $personas );
        return view('casalc.create', compact('personas', 'formaspago') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd( $request );
        $i = 0;
        foreach ( $request->direccion as $dir ){
            $casa = new Casa();
            $casa->tblpersona_id = $request->tblpersona_id;
            $casa->tblformapago_id = $request->tblformapago_id;
            $casa->direccion = $dir;
            $casa->barrio = $request->barrio[$i++];

            $casa->persona()->associate( $request->tblpersona_id );

            $casa->save();
        }


        return redirect()->route('casa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $casa = Casa::find($id);
        return view('casa.show', compact('casa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //
        $casa = Casa::find($id);
        $personas = Persona::all()->pluck( 'nombre_completo', 'id');
        //dd( $personas );
        return view('casalc.edit', compact('casa', 'personas') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $casa = Casa::find( $id );
        $casa->tblpersona_id = $request->tblpersona_id;
        $casa->direccion = $request->direccion;
        $casa->barrio = $request->barrio;

        $casa->persona()->associate( $request->tblpersona_id );

        $casa->save();

        return redirect()->route('casa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $casa = Casa::find( $id );
        $casa->delete();
        return redirect()->route('casa.index');
    }
}
