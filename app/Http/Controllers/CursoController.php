<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $texto=trim($request->get('texto'));
        $cursos=DB::table('cursos') // hace referencia al nombre de la tabla en la base de datos.
        ->select('id','codigo_curso','nombre_curso','creditos','horas','nombre_docente')
        ->where('nombre_curso','LIKE','%'.$texto.'%')
        ->orWhere('nombre_docente','LIKE','%'.$texto.'%')
        ->orderBy('nombre_curso','asc')
        ->paginate(4);
        return view('curso.index',compact('cursos','texto'));  


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $curso = new Curso;
        $curso->codigo_curso = $request->input('codigo_curso');
        $curso->nombre_curso = $request->input('nombre_curso');
        $curso->creditos = $request->input('creditos');
        $curso->horas = $request->input('horas');
        $curso->nombre_docente = $request->input('nombre_docente');
        $curso->save();

        return redirect()->route('curso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $curso = Curso::findOrFail($id);
        return view('curso.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $curso = Curso::findOrFail($id);
        $curso->codigo_curso = $request->input('codigo_curso');
        $curso->nombre_curso = $request->input('nombre_curso');
        $curso->creditos = $request->input('creditos');
        $curso->horas = $request->input('horas');
        $curso->nombre_docente = $request->input('nombre_docente');
        $curso->save();

        return redirect()->route('curso.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return redirect()->route('curso.index');

    }
}
