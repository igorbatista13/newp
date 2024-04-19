<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal" data-bs-target="#Create" type="button">
    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
    <span class="btn-inner--text"> Novo Produto</span>
</button>




<div class="modal fade" id="Create" tabindex="-1" aria-labelledby="Create" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="Create"> Você está editando o Produto: <b>
                    </b> </h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Fechar
                    (X)</button>
            </div>
            <div class="modal-body">


                <div class="card-body">
                    <div class="container-fluid py-2">

                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="font-weight-bolder"></h5>
                                        <div class="row">
                                            <div class="col-12">
                                                <img class="w-40 border-radius-lg shadow-lg mt-3" src=""
                                                    alt="product_image" width="200px">
                                            </div>

                                            <div class="col-lg-12 mt-5">

                                                {!! Form::open(['route' => 'produtos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                                <div class="d-flex">
                                                    {!! Form::file('image', ['class' => 'form-control ']) !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-8 mt-lg-0 mt-4">
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="font-weight-bolder">Informação de Produto</h5>
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label>Código de Barras</label>
                                                {!! Form::text('Codigo_barra', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Nome do produto</label>
                                                {!! Form::text('Nome_Produto', null, ['class' => 'form-control valid']) !!}
                                            </div>
                                            <div class="col-2 col-sm-2 mt-3 mt-sm-0">
                                                <label>Quantidade</label>
                                                {!! Form::text('Quantidade_Produto', null, ['class' => 'form-control']) !!}
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-3">
                                                <label class="mt-4">Categoria do Produto</label>
                                                {!! Form::text('Categoria_Produto', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-3">
                                                <label class="mt-4">Peso Líquido</label>
                                                {!! Form::text('Peso_Liquido', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-3">
                                                <label class="mt-4">Peso Bruto</label>
                                                {!! Form::text('Peso_Bruto', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-2">
                                                <label class="mt-4">Marca</label>
                                                {!! Form::text('Marca', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Unidade de Medida</label>
                                                {!! Form::text('Unidade_Medida', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Vencimento</label>
                                                {!! Form::date('Data_Vencimento', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Lote </label>
                                                {!! Form::date('Data_Lote', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Localização</label>
                                                {!! Form::text('Localizacao', null, ['class' => 'form-control']) !!}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="font-weight-bolder"> Fornecedor
                                              {{-- BOTÃO ADICIONAR FORNECEDOR --}}
                                        <button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal"
                                        data-bs-target="#CreateFornecedor" type="button">
                                        <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                                        <span class="btn-inner--text">Novo  Fornecedor</span>
                                    </button>
                                        </h5>
                                  
                                      

                                        <select name="Fornecedor_id" id="Fornecedor_id" class="form-control">
                                            <option value="" disabled> Selecione o Fornecedor</option>
                                            @foreach ($fornecedor as $fornecedores)
                                                <option value=" {{ $fornecedores->id }}"> {{ $fornecedores->id }} -
                                                    {{ $fornecedores->Nome_fantasia }} <small> </i></small></option>

                                                {{-- {!! Form::text('Fornecedor_id', $produtos->Nome_fantasia . ' ' . $produtos->Nome_responsavel, ['class' => 'form-control']) !!} --}}
                                            @endforeach
                                        </select>



                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-8 mt-sm-0 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h5 class="font-weight-bolder">Preços</h5>
                                            <div class="col-3">
                                                <label>Preço de Venda</label>
                                                {!! Form::text('Preco_Venda', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-4">
                                                <label>Preço de Custo</label>
                                                {!! Form::text('Preco_Custo', null, ['class' => 'form-control']) !!}

                                            </div>
                                            <div class="col-5">
                                                <label>SKU</label>
                                                <input class="form-control" type="text" value="71283476591" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 mt-sm-2 mt-4">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="Status_Produto" value="Sim">
                                                    <label class="form-check-label" for="site">Produto disponível no
                                                        Site?</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 mt-sm-1 mt-4">
                                                <div class="form-check form-switch">

                                                    <input class="form-check-input" type="checkbox"
                                                        name="Estoque_Produto" value="Sim">
                                                    <label class="form-check-label" for="Estoque">Produto em
                                                        Estoque?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Salvar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
