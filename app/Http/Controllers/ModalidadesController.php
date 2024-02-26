<?php

namespace App\Http\Controllers;
use App\Models\modalidades;

use Illuminate\Http\Request;

class ModalidadesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:produtos-list|produtos-create|produtos-edit|produtos-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:produtos-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:produtos-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:produtos-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
     //   $alunos = Alunos::get();
        $modalidades = modalidades::with('modalidades')->get();  
        return view('/paginas/conteudo/modalidades/modal/create', compact('modalidades'));
    
    }

    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $modalidades = modalidades::create($request->all());
        $modalidades->save();

        return redirect()->route('modalidades.index')
                        ->with('success','Aluno criado com sucesso!');

    }

     public function update(Request $request, Modalidades $modalidades)
    {
        $modalidades->update($request->all());
        $modalidades->update();

        return redirect()->route('paginas.conteudo.alunos.index')
        ->with('edit','Aluno atualizado com sucesso!');
    }

}
