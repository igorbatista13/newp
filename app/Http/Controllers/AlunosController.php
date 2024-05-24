<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\modalidades;
use App\Models\Matricula;
use App\Models\Planos;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class AlunosController extends Controller
{

    public function index(Request $request)
    {
        $alunos = Alunos::orderBy('created_at', 'desc')->take(5)->get();
        $usuarios = Alunos::where('Perfil','=', 'Aluno')->get();
        $professores = Alunos::where('Perfil','=', 'Professor')->get();
        $funcionarios = Alunos::where('Perfil','=', 'Funcionario')->get();
      //  $alunos = Alunos::get();
        $badgeClasses = [
            'bg-primary',
            'bg-secondary',
            'bg-info',
            'bg-success',
            'bg-warning',
            'bg-danger',
        ];

        $badgeAvatar = [
            'bg-gradient-primary',
            'bg-gradient-dark',
            'bg-gradient-info',
            'bg-gradient-success',
            'bg-gradient-warning',
            'bg-gradient-danger',
        ];

        $colorIndex = 0;
        $colorAvatar = 0;

       

        // Obter todas as modalidades
        $modalidades = modalidades::where('Situacao', 'Sim')->get();
    
        // Obter a contagem de modalidades
        $qtdmodalidades = modalidades::count();
    
        // Obter a contagem de alunos por perfil
        $qtdalunos = Alunos::where('perfil', 'Aluno')->count();
        $qtdprofessor = Alunos::where('perfil', 'Professor')->count();
        $qtdfunc = Alunos::where('perfil', 'Funcionario')->count();
        $qtdplanos = Planos::count();
        // Obter todas as matrículas e planos
        $matricula = Matricula::all();
        $plano = Planos::where('Status', 'Ativo')->get();
    
        return view('paginas.conteudo.alunos.index', compact(
            'alunos',
            'modalidades',
            'qtdalunos',
            'qtdprofessor',
            'qtdfunc',
            'qtdmodalidades',
            'matricula',
            'plano',
            'badgeClasses',
            'qtdplanos',
            'usuarios',
            'professores',
            'funcionarios',
            'colorIndex',
            'badgeAvatar',
            'colorAvatar'
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
        // Verificar se já existe uma matrícula para o aluno especificado
        $matriculaExistente = Matricula::where('alunos_id', $request->alunos_id)->first();

        if ($matriculaExistente) {
            // Se já existe uma matrícula, atualize o plano associado a ela
            $matriculaExistente->planos_id = $request->planos_id;
            $matriculaExistente->save();
            return back()->with('success', 'Matrícula atualizada com sucesso!');
        } else {
            // Se não existe uma matrícula, crie um novo registro
            $matricula = new Matricula();
            $matricula->alunos_id = $request->alunos_id;
            $matricula->planos_id = $request->planos_id;
            $matricula->save();
            return back()->with('success', 'Aluno Matriculado com sucesso!');
        }
    }

public function professores(Request $request)
{

    $professores = Alunos::where('Perfil', 'Professor')->get();
    $alunos = Alunos::orderBy('created_at', 'desc')->take(5)->get();
        $usuarios = Alunos::where('Perfil','=', 'Aluno')->get();
        $professores = Alunos::where('Perfil','=', 'Professor')->get();
        $funcionarios = Alunos::where('Perfil','=', 'Funcionario')->get();
      //  $alunos = Alunos::get();
        $badgeClasses = [
            'bg-primary',
            'bg-secondary',
            'bg-info',
            'bg-success',
            'bg-warning',
            'bg-danger',
        ];

        $badgeAvatar = [
            'bg-gradient-primary',
            'bg-gradient-dark',
            'bg-gradient-info',
            'bg-gradient-success',
            'bg-gradient-warning',
            'bg-gradient-danger',
        ];

        $colorIndex = 0;
        $colorAvatar = 0;

       

        // Obter todas as modalidades
        $modalidades = modalidades::where('Situacao', 'Sim')->get();
    
        // Obter a contagem de modalidades
        $qtdmodalidades = modalidades::count();
    
        // Obter a contagem de alunos por perfil
        $qtdalunos = Alunos::where('perfil', 'Aluno')->count();
        $qtdprofessor = Alunos::where('perfil', 'Professor')->count();
        $qtdfunc = Alunos::where('perfil', 'Funcionario')->count();
        $qtdplanos = Planos::count();
        // Obter todas as matrículas e planos
        $matricula = Matricula::all();
        $plano = Planos::where('Status', 'Ativo')->get();
    
        return view('paginas.conteudo.professor.index', compact(
            'alunos',
            'modalidades',
            'qtdalunos',
            'qtdprofessor',
            'qtdfunc',
            'qtdmodalidades',
            'matricula',
            'plano',
            'badgeClasses',
            'qtdplanos',
            'usuarios',
            'professores',
            'funcionarios',
            'colorIndex',
            'badgeAvatar',
            'colorAvatar'
   
        ));

}

public function listalunos(){

    $professor = Alunos::where('Perfil', 'Professor')->get();
    return view('paginas.conteudo.professor.index', compact(
        'professor',
   
        ));

}

private function processarImagem(Request $request, $aluno)
{
    // Verificar se a imagem foi enviada
    if ($request->has('image')) {
        $imageData = $request->input('image');

        // Decodificar a imagem da base64
        list($type, $imageData) = explode(';', $imageData);
        list(, $imageData) = explode(',', $imageData);
        $imageData = base64_decode($imageData);

        // Definir o caminho e nome do arquivo
        $imageName = md5($aluno->Nome_Completo . strtotime("now")) . '.png';
        $path = public_path('images/usuarios/' . $imageName);

        // Salvar a imagem no diretório público
        File::put($path, $imageData);

        // Atualizar o campo image do aluno
        $aluno->image = $imageName;
    }

    // Salvar as alterações do aluno
    $aluno->save();
}

// Método para criar um novo aluno
public function store(Request $request)
{
    // Criação do aluno
    $aluno = Alunos::create($request->except('image'));
    $aluno->Nome_Completo = $request->input('Nome_Completo');
    $aluno->Email = $request->input('Email');
    $aluno->Sexo = $request->input('Sexo');
    $aluno->modalidade_id = json_encode($request->input('modalidade_id'));

    // Processar a imagem capturada pela webcam
    $this->processarImagem($request, $aluno);

    return back()->with('success', 'Aluno adicionado com sucesso!');
}

    public function update(Request $request, Alunos $aluno)
    {
        // Atualizar outros campos do aluno, se necessário
        $aluno->update($request->except('image'));

        // Processar a imagem capturada pela webcam
        if ($request->has('image')) {
            $imageData = $request->input('image');

            // Decodificar a imagem da base64
            list($type, $imageData) = explode(';', $imageData);
            list(, $imageData) = explode(',', $imageData);
            $imageData = base64_decode($imageData);

            // Definir o caminho e nome do arquivo
            $imageName = md5($aluno->Nome_Completo . strtotime("now")) . '.png';
            $path = public_path('images/usuarios/' . $imageName);

            // Salvar a imagem no diretório público
            File::put($path, $imageData);

            // Atualizar o campo image do aluno
            $aluno->image = $imageName;
            $aluno->save();
        }

        return back()->with('edit', 'Aluno atualizado com sucesso!');
    }
}
