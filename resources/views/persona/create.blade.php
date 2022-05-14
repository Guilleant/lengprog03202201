@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Crear Personas</h5>

            <form action="{{ route('persona.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <label>Nro Identificacion</label>
                        <input name="nroIdentificacion" type="text" class="form-control"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Apellidos</label>
                        <input name="apellidos" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6">
                        <label>Nombres</label>
                        <input name="nombres" type="text" class="form-control"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Teléfono</label>
                        <input name="telefono" type="text" class="form-control"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary mt-5">Guardar</button>
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
