@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

{{--   conteudo   --}}
<div class="card shadow-lg mx-4 card-profile">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://yata.s3-object.locaweb.com.br/b1da36362690140b82f2615336181d34f58abf5a5fadf78cb182f5aafb43242e"
                        alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        Produtos Cadastrados </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                    <h4 class="font-weight-bolder"><span class="small"></span>
                        <span class="badge bg-success" id="state1" countTo={{ $produtoqtd }}>Cadastrados</span>
                    </h4>

                    </p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav  nav-fill p-1" role="tablist">
                        <li class="nav-item">

                            @include('/paginas/conteudo/produtos/modal/create/modal')



                        </li>


                        <li class="nav-item">
                            <div class="input-group">
                                <span class="input-group-text text-body">
                                    <i class="fas fa-search" aria-hidden="true"></i> </span>
                                <input type="text" id="search" name="search" class="form-control"
                                    placeholder="Código ou Nome do produto">
                                <button type="submit" class="btn app-btn-secondary">Procurar</button>

                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
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
                                                            class="avatar avatar-xl me-3">
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
                                                <p class="text-xs font-weight-bold mb-0">
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


                                                </p>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                @if ($produtos->Status_Produto == '')
                                                    <span class="badge bg-warning">Não</span>
                                                @elseif($produtos->Status_Produto == 'Sim')
                                                    <span class="badge bg-success">
                                                        Sim </span>
                                                @endif
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                @if ($produtos->Estoque_Produto == '')
                                                    <span class="badge bg-warning">Não</span>
                                                @elseif($produtos->Estoque_Produto == 'Sim')
                                                    <span class="badge bg-success">
                                                        Sim </span>
                                                @endif

                                            </td>

                                            <td class="align-middle text-center">
                                                {{-- Botão de Editar  --}}
                                                @include('/paginas/conteudo/produtos/modal/edit/modal')
                                                {{-- Botão de Deletar  --}}
                                                @include('/paginas/conteudo/produtos/modal/delete/modal')
                                            </td>
                                        </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('paginas.base.rodape.rodape')
