<button type="button" class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal"
    data-bs-target="#EDITAR{{ $produtos->id }}"><i class="fas fa-pencil-alt text-dark me-2"
        aria-hidden="true"></i>Editar</button>

<div class="modal fade" id="EDITAR{{ $produtos->id }}" tabindex="-1" aria-labelledby="EDITAR{{ $produtos->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="EDITAR{{ $produtos->id }}"> Você está editando o Produto: <b>
                        {{ $produtos->Nome_Produto }} </b> </h5>
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
                                                <img class="w-40 border-radius-lg shadow-lg mt-3"
                                                    src="{{ asset('/images/produtos/') }}/{{ $produtos->image }}"
                                                    alt="product_image" width="200px">
                                            </div>

                                            <div class="col-lg-12 mt-5">

                                                {!! Form::model($produto, [
                                                    'method' => 'PATCH',
                                                    'route' => ['produtos.update', $produtos->id],
                                                    'enctype' => 'multipart/form-data',
                                                ]) !!}
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
                                                {!! Form::text('Codigo_barra', $produtos->Codigo_barra, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Nome do produto</label>
                                                {!! Form::text('Nome_Produto', $produtos->Nome_Produto, ['class' => 'form-control valid']) !!}
                                            </div>
                                            <div class="col-2 col-sm-2 mt-3 mt-sm-0">
                                                <label>Quantidade</label>
                                                {!! Form::text('Quantidade_Produto', $produtos->Quantidade_Produto, ['class' => 'form-control']) !!}
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-3">
                                                <label class="mt-4">Categoria do Produto</label>
                                                {!! Form::text('Categoria_Produto', $produtos->Categoria_Produto, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-3">
                                                <label class="mt-4">Peso Líquido</label>
                                                {!! Form::text('Peso_Liquido', $produtos->Peso_Liquido, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-3">
                                                <label class="mt-4">Peso Bruto</label>
                                                {!! Form::text('Peso_Bruto', $produtos->Peso_Bruto, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-2">
                                                <label class="mt-4">Marca</label>
                                                {!! Form::text('Marca', $produtos->Marca, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Unidade de Medida</label>
                                                {!! Form::text('Unidade_Medida', $produtos->Unidade_Medida, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Vencimento</label>
                                                {!! Form::date('Data_Vencimento', $produtos->Data_Vencimento, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Lote </label>
                                                {!! Form::date('Data_Lote', $produtos->Data_Lote, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Localização</label>
                                                {!! Form::text('Localizacao', $produtos->Localizacao, ['class' => 'form-control']) !!}

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
                                        <h5 class="font-weight-bolder">Fornecedor</h5>
                                        <select name="Fornecedor_id" id="Fornecedor_id" class="form-control">
                                            <option value="" disabled> Selecione o Fornecedor</option>
                                            @foreach ($fornecedor as $fornecedores)
                                                <option value=" {{ $fornecedores->id }}"> {{ $fornecedores->id }} -
                                                    {{ $fornecedores->Nome_fantasia }} <small> <b> <i> CNPJ:
                                                                {{ $fornecedores->Cnpj }} <b> </i></small></option>
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
                                                {!! Form::text('Preco_Venda', $produtos->Preco_Venda, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-4">
                                                <label>Preço de Custo</label>
                                                {!! Form::text('Preco_Custo', $produtos->Preco_Custo, ['class' => 'form-control']) !!}

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
                                                        name="Status_Produto" value="Sim"
                                                        {{ $produtos->Status_Produto == 'Sim' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="site">Disponível no
                                                        site?</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 mt-sm-1 mt-4">
                                                <div class="form-check form-switch">

                                                    <input class="form-check-input" type="checkbox"
                                                        name="Estoque_Produto" value="Sim"
                                                        {{ $produtos->Estoque_Produto == 'Sim' ? 'checked' : '' }}>
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
