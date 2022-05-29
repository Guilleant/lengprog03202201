@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Crear Casas</h5>

            <form action="{{ route('casa.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <label>Propietario</label>
                        <select name="tblpersona_id" class="form-control" >
                            @foreach ( $personas as $llave => $valor )
                                <option value={{ $llave }}>{{ $valor }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Dirección</label>
                        <input name="direccion" type="text" class="form-control" />
                    </div>

                    <div class="col-md-6">
                        <label>Barrio</label>
                        <input name="barrio" type="text" class="form-control"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary mt-5">Guardar</button>
                        <a href="{{ route('casa.index') }}" class="btn btn-secondary mt-5">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
  </div>


@endsection

@section('scriptsnavbar')

@endsection
