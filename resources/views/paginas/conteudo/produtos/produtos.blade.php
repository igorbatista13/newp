{{-- ALUNOS --}}
@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

@include('paginas.conteudo.produtos.menu_produtos')


<div class="container-fluid py-0">
    <div class="row">
        <div class="col-xl-9">
            <div class="row my-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-10 my-auto">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold opacity-7">Atualizado
                                        </p>
                                        <h5 class="font-weight-bolder mb-0">
                                            ÚLTIMOS PRODUTOS CADASTRADOS
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                                @foreach ($produto as $produtos)
                                <div class="card mt-4">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-4">
                                                <img src="{{ asset('/images/produtos/') }}/{{ $produtos->image }}"
                                                    alt="kal" class="border-radius-lg shadow w-100">
                                            </div>
                                            <div class="col-4 my-auto">
                                                <p class="text-muted text-sm font-weight-bold">
                                                    {{ $produtos->Nome_Produto }} </p>
                                                <a href="javascript:;" class="btn btn-sm bg-gradient-dark mb-0">Send
                                                    message</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nome</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Preço</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Disponível no site
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Estoque
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ação</th>
                                    </tr>
                                </thead>
                                @foreach ($produto as $produtos)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('/images/produtos/') }}/{{ $produtos->image }}"
                                                            class="avatar avatar-sm me-3" alt="avatar image">
                                                        {{-- <img src="https://i.pinimg.com/736x/42/9d/63/429d631659a11a9eb666b103d811470a.jpg" class="avatar avatar-sm me-3"
                                                            alt="avatar image"> --}}
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $produtos->Nome_Produto }}</h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Categoria: ' . $produtos->Categoria_Produto ?? 'Categoria não informada' }}
                                                        </p>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Quantidade: ' . $produtos->Quantidade_Produto ?? 'Quantidade não informada' }}
                                                        </p>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Marca: ' . $produtos->Marca ?? 'Quantidade não informada' }}
                                                        </p>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Fornecedor: ' . $produtos->Nome_fantasia ?? 'Fornecedor não informado' }}
                                                        </p>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Vencimento: ' . $produtos->Data_Vencimento ?? 'Vencimento não informado' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-secondary mb-0">
                                                    @if ($produtos->Preco_Custo == '')
                                                        <span class="badge bg-warning"> Preço de Custo <small> Não
                                                                Informado
                                                        </span>
                                                    @elseif ($produtos->Preco_Custo != '')
                                                        <span class="badge bg-gradient-success">
                                                            Preço de Custo
                                                            {{ "R$ " . number_format($produtos->Preco_Custo, 2, ',', '.') }}
                                                        </span>
                                                        <p> </span>
                                                    @endif

                                                    @if ($produtos->Preco_Venda == '')
                                                        <span class="badge bg-warning"> Preço de Venda <small> Não
                                                                Informado
                                                        </span>
                                                    @elseif ($produtos->Preco_Venda != '')
                                                        <span class="badge bg-gradient-success">
                                                            Preço de Venda
                                                            {{ "R$ " . number_format($produtos->Preco_Venda, 2, ',', '.') }}
                                                        </span>

                                                        </span>
                                                    @endif
                                            </td>
                                            <td>
                                                <span class="badge badge-dot me-4">
                                                    <i class="bg-info"></i>
                                                    <span class="text-dark text-xs">
                                                        @if ($produtos->Status_Produto == '')
                                                            <span class="badge bg-warning">Não</span>
                                                        @elseif($produtos->Status_Produto == 'Sim')
                                                            <span class="badge bg-success">
                                                                Sim </span>
                                                        @endif

                                                    </span>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($produtos->Estoque_Produto == '')
                                                    <span class="badge bg-warning">Não</span>
                                                @elseif($produtos->Estoque_Produto == 'Sim')
                                                    <span class="badge bg-success">
                                                        Sim </span>
                                                @endif
                        </div>
                        </td>

                        </tr>
                        </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="col-md-3">
        <div class="card-body p-4">
            <div class="card">

                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Resumo</h6>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-mobile-button text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Produtos</h6>
                                    <span class="text-xs">Total: <span class="font-weight-bold">{{ $produtoqtd }}
                                            Cadastrados </span></span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                    <i class="ni ni-tag text-white opacity-10"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Fornecedores:</h6>
                                    <span class="text-xs">Total: <span class="font-weight-bold">{{ $fornecedorqtd }}
                                            Cadastrados </span> </span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="ni ni-bold-right" aria-hidden="true"></i></button>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>


</div>
<hr class="horizontalxw dark my-4">

@include('paginas.conteudo.produtos.blocos')

@include('paginas.base.rodape.rodape')
