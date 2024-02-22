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


    public function finalizarCompra(Request $request)
    {

        // $formaPagamento = $request->input('Forma_Pagamento');
        // $nomeCliente = $request->input('Nome_Cliente');
        // $observacoes = $request->input('Observacoes');
   
        // $venda = Venda::create([
        //     'Forma_Pagamento' => $formaPagamento,
        //     'Nome_Cliente' => $nomeCliente,
        //     'Observacoes' => $observacoes,
        // ]);


        $venda = Venda::create($request->all());
        
        
        
        $produtos = $request->input('id', []); // Recebe os IDs dos produtos
        $quantidades = $request->input('quantidade', []); // Recebe as quantidades dos produtos
        
        // Loop pelos produtos e associar cada um à venda
        for ($i = 0; $i < count($produtos); $i++) {
            // Verifica se o ID do produto não está vazio
            if (!empty($produtos[$i])) {
                // Associa o produto à venda com sua quantidade correspondente
                $venda->produtos()->attach($produtos[$i], ['Quantidade' => $quantidades[$i]]);
            }
        }
        // $produtos = $request->input('produtos');
        // dd($produtos);

        // Retorne uma resposta de sucesso
        return response()->json(['message' => 'Venda criada com sucesso', 'venda' => $venda], 201);
    
}


    public function invoice($id)
    {
        $venda        = Venda::findOrFail($id);

        $vendas = Venda::all();

        return view('paginas.conteudo.vendas.invoice', ['venda' => $venda, 'vendas' => $vendas
                            

       ]);

    }
    public function xfinalizarCompra(Request $request)
    {
        // Validar os dados do formulário, se necessário

        // Criar uma nova venda
        // Criar uma nova venda
        $venda = new Venda();
        $venda->Nome_Cliente = $request->input('nome_cliente');
        $venda->Forma_Pagamento = $request->input('forma_pagamento');
        $venda->DataRetirada = $request->input('data_retirada');
        // Adicione os outros campos conforme necessário
        $venda->total = $request->input('total');
        $venda->save();

        // Adicionar produtos à venda
        $produtos = $request->input('produtos');
        foreach ($produtos as $produto) {
            $venda_pivot = new Venda_pivot();
            $venda_pivot->Quantidade = $produto['quantidade'];
            $venda_pivot->vendas_id = $venda->id;
            $venda_pivot->produto_id = $produto['id'];
            $venda_pivot->save();
        }


        // Retornar uma resposta de sucesso (pode redirecionar ou retornar JSON, conforme necessário)
        return response()->json(['success' => true]);
    }
}
