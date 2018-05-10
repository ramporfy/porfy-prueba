<?php

namespace App\Http\Controllers;

use App\Puerta;
use Illuminate\Http\Request;

class PuertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puertas=Puerta::paginate();
        return view('puertas.index', compact('puertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('puertas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puerta =Puerta::create($request->all());

        return redirect()->Route('puertas.edit', $puerta->id)
            ->with ('info', 'Puerta Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Puerta  $puerta
     * @return \Illuminate\Http\Response
     */
    public function show(Puerta $puerta)
    {
      //para conseguir el error
        //tenemos que verificar tres cosas cuando no funcionaa
        //  1 revisar la vista
        //  2 revisar el controlador
        //  3 revisar la ruta
        //dd($puerta->id);
        return view('puertas.show', compact('puerta'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Puerta  $puerta
     * @return \Illuminate\Http\Response
     */
    public function edit(Puerta $puerta)
    {
        //
        return view('puertas.edit', compact('puerta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Puerta  $puerta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puerta $puerta)
    {//primero se actualiza
          $puerta->update($request->all());

        return redirect()->Route('puertas.edit', $puerta->id)
            ->with ('info', 'Puerta Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Puerta  $puerta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puerta $puerta)
    {
         $puerta->delete();

        return back()->with('info','Eliminado correctamente');
    }
}
