@extends('layouts.principal')

@section('title')
    Mostrando personas
@endsection

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')
    <div class="card" style="width: 100%;">
        <div class="card-body">
        <h5 class="card-title">Mostrando</h5>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label>Nro Identificacion</label>
                        <input type="text" class="form-control" value="{{ $persona->NroIdentificacion }}" disabled/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" value="{{ $persona->apellidos }}" disabled/>
                    </div>

                    <div class="col-md-6">
                        <label>Nombres</label>
                        <input type="text" class="form-control" value="{{ $persona->nombres }}" disabled/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" value="{{ $persona->telefono }}" disabled/>
                    </div>
                </div>

                <a href="{{ route('persona.index') }}" class="btn btn-primary mt-5">Regresar</a>

            </div>
        </div>
    </div>
@endsection

@section('scriptsnavbar')
    @include('layouts.scriptsnavbar')
@endsection
