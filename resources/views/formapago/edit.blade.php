@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Editar Personas</h5>

            <form action="{{ route('persona.update', $persona->id ) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label>Nro Identificacion</label>
                        <input name="nroIdentificacion" type="text" class="form-control" value="{{ $persona->NroIdentificacion }}"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label>Apellidos</label>
                        <input name="apellidos" type="text" class="form-control" value="{{ $persona->apellidos }}" />
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label>Nombres</label>
                        <input name="nombres" type="text" class="form-control" value="{{ $persona->nombres }}"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label>Teléfono</label>
                        <input name="telefono" type="text" class="form-control" value="{{ $persona->telefono }}"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <button type="submit" class="btn btn-primary mt-5">Actualizar</button>
                        <a href="{{ route('persona.index') }}" class="btn btn-secondary mt-5">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
  </div>


@endsection

@section('scriptsnavbar')
    @include('layouts.scriptsnavbar')
@endsection
