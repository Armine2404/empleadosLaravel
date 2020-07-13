<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{
    public function index()
    {  
        $empresas = Empresa::all();
        return view('empresas.index',compact('empresas'));
    }
    public function edit(Empresa $empresa)
    {  
      
        return view('empresas.editar',compact('empresa'));
    }
    public function update(Request $request,Empresa $empresa)
    { 
        $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]); 
       $empresa->update([
           "name" => $request->name,
           "email" => $request->email,
           "website" => $request->website,
           "logo" => $request->logo,
       ]);
    return redirect()->back()->with('message','EPMRESA MODIFICADA CORRECTAMENTE');

    }
    public function create()
    {
        return view('empresas.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
        ]);
        Empresa::create($request->all());
        $empresas = Empresa::all();
        return redirect()->back()->with("message","EMPRESA SE HA CREADO CORRECTAMENTE");
    }
    public function destroy(Empresa $empresa)
    {
        
        $empresa->delete();
        return redirect()->back()->with("message", "EMPRESA ELIMINADA");
    }
}
