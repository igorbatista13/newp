<?php

namespace App\Http\Controllers;
use App\Models\Alunos;
use App\Models\modalidades;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:produto-list|produto-create|produto-edit|produto-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:produto-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:produto-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:produto-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
     //   $alunos = Alunos::get();
     $alunos = Alunos::with('modalidades')->latest()->take(5)->get();
     return view('paginas.conteudo.alunos.index', compact('alunos'));
    
    }

    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $alunos = Alunos::create($request->all());
        $alunos->save();

        return redirect()->route('alunos.index')
                        ->with('success','Aluno criado com sucesso!');

    }

     public function update(Request $request, Alunos $alunos)
    {
        $alunos->update($request->all());
        $alunos->update();

        return redirect()->route('paginas.conteudo.alunos.index')
        ->with('edit','Aluno atualizado com sucesso!');

    }
}
