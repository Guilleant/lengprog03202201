@extends('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('head')
    <style>
        .puntero{
            cursor: pointer;
        }

        .ocultar{
            display: none;
        }
    </style>
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
                        {!! Form::select('tblpersona_id', $personas, null, ['class' => 'form-control' ] ) !!}
                    </div>

                    <div class="col-md-4">
                        <label>Forma de pago</label>
                        {!! Form::select('tblformapago_id', $formaspago, null, ['class' => 'form-control' ] ) !!}
                    </div>

                    <div class="col-md-2">
                        <label></label>
                        <div class="btn btn-primary mt-4" id="agregar">Otro +</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-row clonar">
                            <div class="form-group col-md-6">
                                <label>Dirección</label>
                                <input name="direccion[]" type="text" class="form-control" />
                            </div>

                            <div class="form-group col-md-6">
                                <label>Barrio</label>
                                <input name="barrio[]" type="text" class="form-control"/>
                            </div>
                            <span class="badge badge-pill badge-danger puntero ocultar ml-2">Eliminar</span>
                        </div>
                        <div id="contenedor"></div>
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
    @include('layouts.scriptsnavbar')

    <script>
        let bagregar = document.getElementById('agregar');
        let contenedor = document.getElementById('contenedor');

        agregar.addEventListener('click', e => {
            e.preventDefault();

            let clonar = document.querySelector('.clonar');
            let clon = clonar.cloneNode(true);

            contenedor.appendChild( clon ).classList.remove('clonar');

            //console.log( contenedor.lastChild.childNodes[5] );
            //console.log( contenedor.lastChild.querySelectorAll('span') );

            //let remover = contenedor.lastChild.childNodes[5]; //contenedor.lastChild.childNodes[1].querySelectorAll('span');
            let remover = contenedor.lastChild.querySelectorAll('span'); //contenedor.lastChild.childNodes[1].querySelectorAll('span');

            //remover.classList.remove('ocultar');
            remover[0].classList.remove('ocultar');
        });

        //Para cuando se de clic sobre eliminar
        contenedor.addEventListener( 'click', e => {
            e.preventDefault();

            if(e.target.classList.contains('puntero')){
                //console.log( e.target.parentNode );
                let fila = e.target.parentNode;
                fila.parentNode.removeChild( fila );
            }
        });

    </script>
@endsection
