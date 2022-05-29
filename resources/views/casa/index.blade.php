@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Casas</h5>
            <a href="{{ route('casa.create') }}" class="btn btn-primary">Crear</a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Propietario</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Barrio</th>
                    <th scope="col">Forma Pago</th>
                    <th scope="col">Acciones</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ( $casas as $item )
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->persona->apellidos . ' ' . $item->persona->nombres }}</td>
                            <td>{{ $item->direccion }}</td>
                            <td>{{ $item->barrio }}</td>
                            <td>{{ $item->formapago->descripcion }}</td>
                            <td>
                                <form action="{{route('casa.destroy', $item->id ) }}" method="POST" style="margin-bottom: 0px !important;" >
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('casa.show', $item->id) }}" class="btn btn-sm btn-success" data-placement="top" title="Mostrar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('casa.edit', $item->id) }}" class="btn btn-sm btn-success" data-placement="top" title="Editar">
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
