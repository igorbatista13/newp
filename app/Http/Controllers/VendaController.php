<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Produto;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {

        $titulo = 'Recibos';
        $produto  = Produto::all();
        $venda = Venda::all(); // Substitua $id pelo ID da venda que você está recuperando

        // Verifique se a venda foi encontrada


        return view('paginas.conteudo.vendas.vendas', compact(
            'produto',
            'titulo',
            'venda'
        ));
    }


    // public function finalizarCompra(Request $request)
    // {
    //     $nomeCliente = $request->input('Nome_Cliente');
    //     $formaPagamento = $request->input('Forma_Pagamento');
    //     $observacoes = $request->input('Observacoes');
    //     $total = $request->input('total');
    //     $produtos = $request->input('produtos');

    //     // Criar a venda
    //     $venda = new Vendas();
    //     $venda->Nome_Cliente = $nomeCliente;
    //     $venda->Forma_Pagamento = $formaPagamento;
    //     $venda->Observacoes = $observacoes;
    //     $venda->total = $total;
    //     $venda->save();

    //     // Salvar os produtos associados à venda na tabela pivot
    //     foreach ($produtos as $produto) {
    //         $vendaPivot = new VendasPivot();
    //         $vendaPivot->Quantidade = $produto['quantidade'];
    //         $vendaPivot->vendas_id = $venda->id;
    //         $vendaPivot->produto_id = $produto['id'];
    //         $vendaPivot->save();
    //     }

    //     return response()->json(['message' => 'Venda criada com sucesso', 'venda' => $venda], 201);
    // }

    public function atcfinalizarVenda(Request $request)
{
    // Validação dos dados do formulário, se necessário

    dd($request);
    // Crie uma nova instância de Venda e atribua os valores recebidos do formulário
    $venda = new Venda();
    $venda->nome_cliente = $request->Nome_Cliente;
    $venda->forma_pagamento = $request->Forma_Pagamento;
    $venda->observacoes = $request->Observacoes; // Se você tiver o campo Observacoes
    // Atribua outros campos da venda, se houver
    // Salve a venda no banco de dados
    $venda->save();

    // Agora, você precisa anexar os produtos vendidos à venda
    foreach ($request->produtos as $produto_id => $quantidade) {
        $venda->produtos()->attach($produto_id, ['quantidade' => $quantidade]);
    }

    // Redirecione para uma página de confirmação, por exemplo
    return redirect()->route('pagina_de_confirmacao');
}


    public function finalizarCompra(Request $request)
    {
        try {
            // Código que pode gerar exceções
            $venda = Venda::create($request->all());

            // Debugando o conteúdo de $venda
            //    dd($venda);
            $products = $request->input('products', []);
            $quantities = $request->input('quantities', []);
            for ($product=0; $product < count($products); $product++) {
                if ($products[$product] != '') {
                    $venda->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
                }
            }


            return response()->json(['message' => 'Venda finalizada com sucesso', 'data' => $venda], 200);
        } catch (\Exception $e) {
            // Captura e trata a exceção
            return response()->json(['message' => 'Ocorreu um erro ao finalizar a venda', 'error' => $e->getMessage()], 500);
        }
    }


    public function invoice($id)
    {
        $venda        = Venda::findOrFail($id);
        $vendas = Venda::all();

        return view('paginas.conteudo.vendas.invoice', [
            'venda' => $venda, 'vendas' => $vendas
        ]);
    }
   }
