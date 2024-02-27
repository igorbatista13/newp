<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\modalidades;

use Illuminate\Http\Request;

class AlunosController extends Controller
{



    public function index()
    {
        $modalidades = modalidades::all();
      //  $alunos = Alunos::all();
        $alunos = Alunos::latest()->take(5)->get();
        return view('paginas.conteudo.alunos.index', compact('alunos', 'modalidades'));
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
    //    $modalidadeIds = $request->input('modalidade_id');
        //dd($modalidadeIds);
        $aluno = new Alunos;
        $aluno = Alunos::create($request->all());
        $aluno->Nome_Completo = $request->input('Nome_Completo');
        $aluno->Email = $request->input('Email');
        $aluno->Sexo = $request->input('Sexo');
        $aluno->modalidade_id = json_encode($request->input('modalidade_id'));
        $aluno->save();
        return back()->with('success', 'Aluno criado com sucesso!');
    }

    public function update(Request $request, Alunos $alunos)
    {
        $alunos->update($request->all());
        $alunos->update();

        return redirect()->route('paginas.conteudo.alunos.index')
            ->with('edit', 'Aluno atualizado com sucesso!');
    }
}
