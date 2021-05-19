<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                   <th>
                        <tr>
                            <td>ID</td>
                            <td>Apellido</td>
                            <td>Nombre</td>    
                            <td>documento</td>    
                        </tr>       
                    </th> 
                    <tbody>
                        @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->idlegajo}}</td>
                            <td>{{$empleado->apellido}}</td>
                            <td>{{$empleado->nombre}}</td>
                            <td>{{$empleado->nro_documento}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>