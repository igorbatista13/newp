<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\modalidades;
use App\Models\Matricula;
use App\Models\Planos;

use Illuminate\Http\Request;

class AlunosController extends Controller
{

    public function index(Request $request)
    {
        $plano = Planos::all();
        $matricula = Matricula::all();

        $alunos = Alunos::orderBy('created_at', 'desc')->take(5)->get();

        $modalidades = modalidades::all();
        // COUNT {
        $qtdmodalidades = modalidades::count();
        $qtdalunos = Alunos::where('Perfil', 'Aluno')->count();
        $qtdprofessor = Alunos::where('Perfil', 'Professor')->count();
        $qtdfunc = Alunos::where('Perfil', 'Funcionario')->count();
        // }
        return view('paginas.conteudo.alunos.index', compact(
            'alunos',
            'modalidades',
            'qtdalunos',
            'qtdprofessor',
            'qtdfunc',
            'qtdmodalidades',
            'matricula',
            'plano'

        ));
    }

    public function buscarAlunos(Request $request)
    {
        $termoAluno = $request->termoAluno;
        $alunos = Alunos::where('Nome_Completo', 'like', '%' . $termoAluno . '%')->get();
        return response()->json($alunos);
    }

    public function matricula(Request $request)
    {
        $matricula = new Matricula();
        // $matricula = Matricula::create($request->all());
  // Atribua os valores aos campos
  $matricula->alunos_id = $request->alunos_id;
  $matricula->planos_id = $request->planos_id;

    //    dd($matricula);
        $matricula->save();
        return back()->with('success', 'Aluno Matriculado com sucesso!');
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

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('images/usuarios'), $imageName);

            $aluno->image = $imageName;
        }
        //   dd($aluno);
        $aluno->save();
        return back()->with('success', 'Aluno adicionado com sucesso!');
    }

    public function update(Request $request, Alunos $alunos)
    {
        $alunos->update($request->all());
        // $alunos->update();

        return back()->with('edit', 'Aluno atualizado com sucesso!');
    }
}
