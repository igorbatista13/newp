@include('paginas.base.topo.topo')

{{--      --}}

<div class="card shadow-lg mx-3 card-profile ">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://yata.s3-object.locaweb.com.br/b1da36362690140b82f2615336181d34f58abf5a5fadf78cb182f5aafb43242e"
                        alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-lg-3 my-auto">

                <h2>Produtos</h2>
                <input type="text" id="termo" class="form-control" placeholder="Digite o termo de busca">
                <div id="resultado"></div>
            </div>

            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG54.png" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div id="carrinho" class="col-lg-5">
                <h2>Carrinho</h2>

                <ul id="lista-carrinho" class="list-group"></ul>
            </div>

            <div class="col-lg-2 my-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG54.png" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm">
                </div>
                <div id="total"> Total: R$ </div>
                <button id="finalizarCompra" class="btn btn-primary mt-3">Finalizar Venda</button>
            </div>

        </div>



        <!-- Modal de Pagamento -->
        <!-- Modal de Pagamento -->
        {{-- <div class="modal fade" id="modalPagamento" tabindex="-1" aria-labelledby="modalPagamentoLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPagamentoLabel">Selecionar Forma de Pagamento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formPagamento" action="{{ route('vendas.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nomeCliente" class="form-label">Nome do Cliente</label>
                                <input type="text" class="form-control" id="nomeCliente" name="Nome_Cliente">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipoPagamento" id="pix"
                                        value="pix">
                                    <label class="form-check-label" for="pix">
                                        Pix
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipoPagamento"
                                        id="cartaoCredito" value="cartaoCredito">
                                    <label class="form-check-label" for="cartaoCredito">
                                        Cartão de Crédito
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipoPagamento" id="dinheiro"
                                        value="dinheiro">
                                    <label class="form-check-label" for="dinheiro">
                                        Dinheiro
                                    </label>
                                </div>

                           
                                <button type="submit" class="btn btn-primary">Finalizar Pagamento</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 --}}


        <!-- Modal de Pagamento -->
        <div class="modal fade" id="modalPagamento" tabindex="-1" aria-labelledby="modalPagamentoLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalPagamentoLabel">Selecionar Forma de Pagamento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formPagamento">
                            @csrf
                            <div class="mb-3">
                                <label for="Nome_Cliente" class="form-label">Nome do Cliente</label>
                                <input type="text" class="form-control" id="Nome_Cliente" name="Nome_Cliente">
                            </div>
                            <div class="mb-3">
                                <label for="formaPagamento" class="form-label">Forma de Pagamento</label>
                                <select class="form-select" id="formaPagamento" name="Forma_Pagamento">
                                    <option value="Pix">Pix</option>
                                    <option value="Cartão de Crédito">Cartão de Crédito</option>
                                    <option value="Dinheiro">Dinheiro</option>
                                </select>
                                <div class="mb-3">
                                    <label for="Observacoes" class="form-label">Observação</label>
                                    <input type="text" class="form-control" id="Observacoes" name="Observacoes">
                                </div>
                            </div>
                            <!-- Aqui você pode incluir outros campos necessários, como Taxa, Desconto, Mensagem para Cliente, etc. -->
                            <button type="submit" class="btn btn-primary">Finalizar Pagamento</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($venda as $vendas)

        <p><strong>Cliente:</strong> {{ $vendas->Nome_Cliente }}</p>
        <p><strong>Quantidade:</strong> {{ $vendas->Quantidade }}</p>
        <p><strong>Forma de Pagamento:</strong> {{ $vendas->Forma_Pagamento }}</p>
      TOTAL:   {{ $vendas->total }}
        <!-- Outras informações da venda -->
        @endforeach

        <h2>Itens da Venda</h2>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço Unitário</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($venda->produtos as $produto)
                <tr>
                    <td>{{ $produto->Nome_Produto }}</td>
                    <td>{{ $produto->pivot->Quantidade }}</td>
                    <td>{{ $produto->Preco_Venda }}</td>
                    <td>{{ $produto->Preco_Venda * $produto->pivot->Quantidade }}</td>
                </tr>
                @endforeach   --}}
            </tbody>
        </table>
        
        {{-- <p><strong>Total da Venda:</strong> R$ {{ $venda->total }}</p> --}}
        


        @include('paginas.base.rodape.rodape')
