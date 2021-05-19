<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;


class EmpleadoController extends Controller
{
    public function index(){
        $empleados = Empleado::where('idlegajo',17)->get();
        return view('empleados.index', compact('empleados'));

    }
}
