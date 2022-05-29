@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Formas de Pago</h5>
            <a href="{{ route('formapago.create') }}" class="btn btn-primary">Crear</a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ( $formapagos as $forma )
                        <tr>
                            <th scope="row">{{ $forma->id }}</th>
                            <td>{{ $forma->descripcion }}</td>
                            <td>
                                <form action="{{route('formapago.destroy', $forma->id ) }}" method="POST" style="margin-bottom: 0px !important;" >
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('formapago.show', $forma->id) }}" class="btn btn-sm btn-success" data-placement="top" title="Mostrar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('formapago.edit', $forma->id) }}" class="btn btn-sm btn-success" data-placement="top" title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return confirm('¿Desea borrar?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
  </div>


@endsection

@section('scriptsnavbar')

@endsection
