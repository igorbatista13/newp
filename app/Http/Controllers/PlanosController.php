<?php

namespace App\Http\Controllers;

use App\Models\Alunos;

use App\Models\Planos;


use Illuminate\Http\Request;

class PlanosController extends Controller
{
    public function index(Request $request)
    {
        $titulo = 'Planos';
        $alunos = Alunos::get();


        $plano = Planos::orderBy('id', 'DESC')->paginate(20);
        return view('paginas.conteudo.planos.index', compact(
            'plano',
            'titulo',
            'alunos',
        ))
            ->with('i', ($request->input('page', 1) - 1) * 5);
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
        $plano = new Planos();
        $plano = Planos::create($request->all());

        //   dd($matricula);
        $plano->save();
        return back()->with('success', 'Novo Plano criado com sucesso!');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planos $plano)
    {
        $plano->update($request->all());
        $plano->update();
        return back()->with('success', 'Plano atualizado com sucesso!');

       
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
