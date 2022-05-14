@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Personas</h5>
            <a href="{{ route('persona.create') }}" class="btn btn-primary">Crear</a>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nro. Identificacion</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Acciones</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ( $personas as $persona )
                        <tr>
                            <th scope="row">{{ $persona->id }}</th>
                            <td>{{ $persona->NroIdentificacion }}</td>
                            <td>{{ $persona->apellidos }}</td>
                            <td>{{ $persona->nombres }}</td>
                            <td>{{ $persona->telefono }}</td>
                            <td>
                                <form action="{{route('persona.destroy', $persona->id ) }}" method="POST" style="margin-bottom: 0px !important;" >
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('persona.show', $persona->id) }}" class="btn btn-sm btn-success" data-placement="top" title="Mostrar">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('persona.edit', $persona->id) }}" class="btn btn-sm btn-success" data-placement="top" title="Editar">
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
    @include('layouts.scriptsnavbar')
@endsection
