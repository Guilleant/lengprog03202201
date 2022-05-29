@extends('layouts.principal')

@section('title')
    Mostrando Casa
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
                        <label>Propietario</label>
                        <input type="text" class="form-control" value="{{ $casa->persona->apellidos }}" disabled/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Dirección</label>
                        <input type="text" class="form-control" value="{{ $casa->direccion }}" disabled/>
                    </div>

                    <div class="col-md-6">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" value="{{ $casa->barrio }}" disabled/>
                    </div>
                </div>

                <a href="{{ route('casa.index') }}" class="btn btn-primary mt-5">Regresar</a>

            </div>
        </div>
    </div>
@endsection

@section('scriptsnavbar')
    @include('layouts.scriptsnavbar')
@endsection
