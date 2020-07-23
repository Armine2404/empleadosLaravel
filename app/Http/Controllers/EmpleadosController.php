<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;
use App\Empresa;
class EmpleadosController extends Controller
{

    public function _constract()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $empleados = Empleados::select("empresas.name","empleados.id","empleados.firstName","empleados.lastName",
        "empleados.email","empleados.phone")->
        join('empresas', 'empresas.id', '=', 'empleados.empresas_id')->paginate(5);
        
       
        // $empleados = Empleados::all();
        return view('empleados.index', compact('empleados'));
    }
    public function edit(Empleados $empleados)
    {
       
        $empleado = Empleados::select("empresas.name","empleados.empresas_id","empleados.id","empleados.firstName","empleados.lastName",
        "empleados.email","empleados.phone")->
        join('empresas', 'empresas.id', '=', 'empleados.empresas_id')->
        where('empleados.id', '=', $empleados->id)->
        get();
        $empresas = Empresa::all();//para el select de empresas
        return view('empleados.edit', compact('empleado','empresas'));
    }
    public function update(Request $request,Empleados $empleados)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'email',
        ]);
       $empleados->update([
           'firstName' => $request->firstName,
           'lastName' => $request->lastName,
           'email' => $request->email,
           'phone' => $request->phone,
           'empresas_id' => $request->empresas_id]);
           return redirect()->back()->with('message','EMPLEADO MODIFICADO CORRECTAMENTE');
    }

    public function create()
    {
      
        $empresas = Empresa::all();
        return view('empleados.create', compact('empresas'));
    }
    public function destroy(Empleados $empleados)
    { 
     
       $empleados->delete();
       return redirect()->back()->with("message", "EMPLEADO ELIMINADO");
    }
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'email',
        ]);
        Empleados::create($request->all());
        return redirect()->back()->with("message","EMPLEADO CREADO CORRECTAMENTE");
    }
}
