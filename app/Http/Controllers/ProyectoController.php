<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = DB::table('Proyectos') -> get();
        return view('proyecto.index', ['proyectos' => $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|max:255',
            'descripcion'=>'required',
        ]);

        Proyecto::create($request->all());
        return redirect()->route('proyecto.index')
        -> with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    //public function edit(Proyecto $proyecto)
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, Proyecto $proyecto)
    public function update(Request $request, $id)
    {
        $request -> validate([
            'nombre' => 'required|max:255',
            'descripcion'=> 'required',
        ]);
        $proyecto = Proyecto::find($id);
        $proyecto->update($request->all());
        return redirect()->route('proyecto.index')
        -> with('success','Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    //public function destroy(Proyecto $proyecto)
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return redirect()->route('proyecto.index') 
         -> with('success','proyecto deleted successfully.');
    }
}