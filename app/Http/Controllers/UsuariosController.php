<?php

namespace App\Http\Controllers;

use App\Models\Recurso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('welcome',['usuarios'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $usuarioBuscado)
    {
        //
        $data = User::find($usuarioBuscado);
        $usuarioBuscado  = $usuarioBuscado->selectUsuarios;
        $dataEjercicio = Recurso::all()
                            ->where('user_id','=',$usuarioBuscado)
                            ->where('commentable_type','=','Ejercicio');

        $dataNutricion = Recurso::all()
                            ->where('user_id','=',$usuarioBuscado)
                            ->where('commentable_type','=','Nutricion');

        return view('show', ["usuario"=>$data,"dataEjercicio"=>$dataEjercicio,"dataNutricion"=>$dataNutricion]);
        // return $dataEjercicio;
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
    }
}
