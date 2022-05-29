@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Crear Forma de Pago</h5>

            <form action="{{ route('formapago.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <label>Descripcion</label>
                        <input name="descripcion" type="text" class="form-control" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary mt-5">Guardar</button>
                        <a href="{{ route('formapago.index') }}" class="btn btn-secondary mt-5">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
  </div>


@endsection

@section('scriptsnavbar')
    @include('layouts.scriptsnavbar')
@endsection
