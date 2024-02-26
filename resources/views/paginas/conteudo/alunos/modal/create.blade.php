{{-- ALUNOS MODAL CRIAR --}}
<div class="card h-100">
    <div class="card-body d-flex flex-column justify-content-center text-center">
        <button type="button" class="btn btn-link text-dark px-3 mb-0 Create" data-bs-toggle="modal"
        data-bs-target="#Create">
            
            <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
            <h5 class="text-secondary"> Alunos </h5>
        </button>
    </div>
</div>



<div class="modal fade" id="Create" tabindex="-1" aria-labelledby="Create" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="Create"> Novo Aluno: <b>
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

                                                {!! Form::open(['route' => 'alunos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

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

                                        <h5 class="font-weight-bolder">Informação do Aluno</h5>
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label>Nome Completo</label>
                                                {!! Form::text('Nome_Completo', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>E-mail</label>
                                                {!! Form::text('Email', null, ['class' => 'form-control valid']) !!}
                                            </div>
                                            <div class="col-2 col-sm-2 mt-3 mt-sm-0">
                                                <label>CPF</label>
                                                {!! Form::text('CPF', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-2 col-sm-2 mt-3 mt-sm-0">
                                                <label>RG</label>
                                                {!! Form::text('Quantidade_Produto', null, ['class' => 'form-control']) !!}
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-3">
                                                <label class="mt-4">Sexo</label>
                                                {!! Form::text('Categoria_Produto', null, ['class' => 'form-control']) !!}
                                            </div>

                                            <Select></Select>


                                            <div class="col-3">
                                                <label class="mt-4">Data de Nascimento</label>
                                                {!! Form::date('Data_Nascimento', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-3">
                                                <label class="mt-4">Telefone</label>
                                                {!! Form::text('Telefone', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-2">
                                                <label class="mt-4">Profissão</label>
                                                {!! Form::text('Profissao', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="mt-4">Empresa</label>
                                                {!! Form::text('Unidade_Medida', null, ['class' => 'form-control']) !!}
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
                                        <h5 class="font-weight-bolder">Modalidade</h5>
                                        <select name="modalidade_id" id="modalidade_id" class="form-control">
                                            <option value="" disabled> Selecione o Fornecedor</option>
                                             @foreach ($alunos as $aluno)
                                                <option value=" {{ $aluno->modalidades->id }}">
                                                   
                                                        {{ $aluno->modalidades->Nome_Modalidade }} </option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 mt-sm-0 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <h5 class="font-weight-bolder">Endereço</h5>
                                            <div class="col-3">
                                                <label>CEP</label>
                                                {!! Form::text('CEP', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-4">
                                                <label>Endereço</label>
                                                {!! Form::text('Endereco', null, ['class' => 'form-control']) !!}

                                            </div>
                                            <div class="col-5">
                                                <label>Numero</label>
                                                {!! Form::text('Numero', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-5">
                                                <label>Complemento</label>
                                                {!! Form::text('Complemento', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-5">
                                                <label>Bairro</label>
                                                {!! Form::text('Bairro', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-5">
                                                <label>Cidade</label>
                                                <input class="form-control" type="text" value="71283476591" />
                                            </div>
                                            <div class="col-5">
                                                <label>Estado</label>
                                                <select name="" id=""></select>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-sm-8 mt-sm-2 mt-4">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="Status_Produto" value="Sim">
                                                    <label class="form-check-label" for="site">Disponível no
                                                        site?</label>
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
                                        </div> --}}
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
