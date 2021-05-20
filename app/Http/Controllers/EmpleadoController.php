<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Provincia;
use App\Models\Tipo_documento;


class EmpleadoController extends Controller
{
    public function index(){
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));

    }

    public function create()
    {
        $provincias = Provincia::pluck('provincia', 'id_provincia');
        $documentos = Tipo_documento::pluck('tipo_documento', 'id_tipo_documento');

        return view('empleados.create',compact('provincias','documentos'));
    }
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'id_tipo_documento' => 'required',
            'nro_documento' => 'required',
            'id_provincia' => 'required'
        ]);
        
        $empleado = Empleado::create($request->all());
        return redirect()->route('empleados.create', $empleado)->with('info', 'El Empleado se creó con éxito!'); 

    }
}
