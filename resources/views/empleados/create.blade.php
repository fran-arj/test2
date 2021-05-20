<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'empleados.store','method' => 'post']) !!}

                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingresar Nombre']) !!}
                        @error('nombre')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('apellido', 'Apellido') !!}
                        {!! Form::text('apellido', null, ['class' => 'form-control','placeholder' => 'Ingresar Apellido']) !!}
                        @error('apellido')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('direccion', 'Dirección') !!}
                        {!! Form::text('direccion', null, ['class' => 'form-control','placeholder' => 'Ingresar Dirección']) !!}
                        @error('direccion')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('localidad', 'Localidad') !!}
                        {!! Form::text('localidad', null, ['class' => 'form-control','placeholder' => 'Ingresar Localidad']) !!}
                        @error('localidad')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('id_tipo_documento', 'Tipo Documento') !!}
                        {!! Form::select('id_tipo_documento', $documentos, null, ['class' => 'form-control']) !!}
                        @error('id_tipo_documento')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('nro_documento', 'NRO Documento') !!}
                        {!! Form::text('nro_documento', null, ['class' => 'form-control','placeholder' => 'NRO Documento']) !!}
                        @error('nro_documento')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('codigopostal', 'C.P.') !!}
                        {!! Form::text('codigopostal', null, ['class' => 'form-control','placeholder' => 'Código postal']) !!}
                        @error('codigopostal')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('id_provincia', 'Provincia') !!}
                        {!! Form::select('id_provincia', $provincias, null, ['class' => 'form-control']) !!}
                        @error('id_provincia')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                    </div>


                    {!! Form::submit('Agregar empleado', ['class' => 'btn btn-primary']) !!}


                {!! Form::close() !!}
            </div>
        </div>

    </div>
</x-app-layout>