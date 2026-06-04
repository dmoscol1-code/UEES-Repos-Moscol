<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();

        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos/new');
    }

    public function edit($id)
    {
        $proyecto=Proyecto::find($id);
        return view("proyectos/update", compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);
        $proyecto = Proyecto::find($id);
        $proyecto->update($request->all());
        return redirect('proyectos')
            ->with('success', 'Proyecto actualizado exitosamente');
    }

    public function show($id)
    {
        $proyecto=Proyecto::find($id);
        return view("proyectos/show", ['proyecto' => $proyecto]);
    }

    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect('proyectos')
            ->with('success', 'Proyecto creado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     * @param int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $proyecto=Proyecto::find($id);
        $proyecto->delete();
        return redirect('proyectos')
        ->with('success','proyecto eliminado con exito');
    }
}
