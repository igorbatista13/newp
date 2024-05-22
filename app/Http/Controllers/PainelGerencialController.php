<?php

namespace App\Http\Controllers;

use App\Models\Empresa_Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Contrato;
use App\Models\Recibo;
use App\Models\Fornecedor;
use App\Models\MinhaEmpresa;



use Illuminate\Http\Request;

class PainelGerencialController extends Controller
{



    public function dashboard()
    {

        $titulo = 'Dashboard';
        $contratos = Contrato::with('empresa_cliente')->orderBy('id', 'DESC')->paginate(5);
        $recibos   = Recibo::with('empresa_cliente')->orderBy('id', 'DESC')->paginate(5);
        $clientes = Empresa_Cliente::all();
        $produto  = Produto::count();
        $contrato = Contrato::count();
        $recibo   = Recibo::count();
        $fornecedor   = Fornecedor::count();
        $empresaExists = MinhaEmpresa::where('id', '>=', 1)->exists();
        $empresa = MinhaEmpresa::get();

        return view('paginas.conteudo.dashboard.index', compact(
    //    return view('painel.index', compact(
            'clientes',
            'produto',
            'contrato',
            'recibo',
            'contratos',
            'recibos',
            'titulo',
            'fornecedor',
            'empresaExists',
            'empresa'


        ));
    }

    public function produtos()
    {
        $titulo = 'Produtos';
        $produtoqtd  = Produto::count();

        $produto = Produto::get();

        $search = request('search');

        if($search) {
            $produto = Produto::where([['Nome_Produto', 'like', '%'.$search. '%' ]])->get();

             } else {
                $produto = Produto::all();
            }
        return view('paginas.conteudo.produtos.produtos',compact('produto','search', 'titulo', 'produtoqtd'));
       
    }
    
    public function vendas()
    {

        $titulo = 'Recibos';
        $contratos = Contrato::with('empresa_cliente')->orderBy('id', 'DESC')->paginate(5);
        $recibos   = Recibo::with('empresa_cliente')->orderBy('id', 'DESC')->paginate(5);
        $clientes = Empresa_Cliente::count();
        $produto  = Produto::count();
        $contrato = Contrato::count();
        $recibo   = Recibo::count();
        $user   = User::count();
        $fornecedor   = Fornecedor::count();

        return view('paginas.conteudo.vendas.vendas', compact(
            'clientes',
            'produto',
            'contrato',
            'recibo',
            'contratos',
            'recibos',
            'titulo',
            'user',
            'fornecedor'
        ));
    }


    public function index()
    {
        // $userCount  =  FICHA::where('status_id', '=', auth()->id())
        // ->count();
        return view('paginas.conteudo.dashboard.index');
    }

    public function consulta_aluno()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.consulta_aluno', compact('userCount'));
    }

    public function consulta_ficha()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.consulta_ficha', compact('userCount'));
    }

    //// Cadastro
    public function cadastro_menu()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.index', compact('userCount'));
    }

    public function cadastro_aluno()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.cadastro_aluno', compact('userCount'));
    }
    public function cadastro_categoria()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.cadastro_categoria', compact('userCount'));
    }
    public function cadastro_conselho()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.cadastro_conselho', compact('userCount'));
    }

    public function cadastro_escola()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.cadastro_escola', compact('userCount'));
    }

    public function cadastro_ministerio()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.cadastro_ministerio', compact('userCount'));
    }

    public function cadastro_polo()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.cadastro_polo', compact('userCount'));
    }

    public function cadastro_prazo()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.cadastro_prazo', compact('userCount'));
    }

    public function cadastro_serie()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
            ->count();
        return view('painel.cadastro.cadastro_serie', compact('userCount'));
    }
}
