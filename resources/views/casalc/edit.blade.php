@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Editar Casa</h5>

            <form action="{{ route('casa.update', $casa->id ) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label>Propietario</label>
                        {!! Form::select('tblpersona_id', $personas, $casa->tblpersona_id, ['class' => 'form-control' ] ) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label>Direccion</label>
                        <input name="direccion" type="text" class="form-control" value="{{ $casa->direccion }}" />
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label>Barrio</label>
                        <input name="barrio" type="text" class="form-control" value="{{ $casa->barrio }}"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <button type="submit" class="btn btn-primary mt-5">Actualizar</button>
                        <a href="{{ route('casa.index') }}" class="btn btn-secondary mt-5">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
  </div>


@endsection

@section('scriptsnavbar')
    @include('layouts.scriptsnavbar')
@endsection
