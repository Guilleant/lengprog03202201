<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personas = Persona::all();
        //dd( $personas[0]->apellidos );
        return view('persona.index', compact('personas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('persona.create');
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
        $persona = new Persona();

        $persona->NroIdentificacion = $request->nroIdentificacion;
        $persona->apellidos = $request->apellidos;
        $persona->nombres = $request->nombres;
        $persona->telefono = $request->telefono;

        $persona->save();

        return redirect()->route('persona.index');
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

        $persona = Persona::find( $id );
        return view('persona.show', compact('persona') );
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
        $persona = Persona::find( $id );
        return view('persona.edit', compact('persona') );
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
        $persona = Persona::find( $id );

        $persona->NroIdentificacion = $request->nroIdentificacion;
        $persona->apellidos = $request->apellidos;
        $persona->nombres = $request->nombres;
        $persona->telefono = $request->telefono;

        $persona->save();

        return redirect()->route('persona.index');

        dd( $id );
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
        $persona = Persona::find( $id );
        $persona->delete();
        return redirect()->route('persona.index');
    }
}
