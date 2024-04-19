{{-- FORNECEDOR --}}

    <button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal" data-bs-target="#CreateFornecedor"
        type="button">
        <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
        <span class="btn-inner--text"> Fornecedor</span>
    </button>




<div class="modal fade" id="CreateFornecedor" tabindex="-1" aria-labelledby="CreateFornecedor" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="CreateFornecedor"> Novo Fornecedor <b>
                    </b> </h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Fechar
                    (X)</button>
            </div>
            <div class="modal-body">


              

                                                <div class="text-center mb-5">
                                                    <img src="{{ asset('/images/fornecedor.png') }}" height="150"
                                                        class='mb-4'>
                                                    <h3>FORNECEDOR</h3>
                                                    <p>Cadastre os fornecedores da sua loja aqui.</p>
                                                </div>

                                                <div class="col-12 col-lg-12">
                                                    <div
                                                        class="app-card app-card-account shadow-sm  flex-column align-items-start">
                                                        <div class="app-card-header p-3 border-bottom-0">

                                                     
                                            {!! Form::open(['route' => 'fornecedor.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="row">

                                                <div class="col-12 col-lg-12">
                                                    <label for=""> <strong> CNPJ</strong></label>
                                                    {!! Form::text('Cnpj', null, ['class' => 'form-control']) !!}



                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for=""> <strong> Nome
                                                            Fantasia</strong></label>
                                                    {!! Form::text('Nome_fantasia', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for=""> <strong> Nome do Responsável pela
                                                            empresa</strong></label>
                                                    {!! Form::text('Nome_responsavel', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for=""> <strong> Telefone</strong></label>
                                                    {!! Form::text('Telefone', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for=""> <strong> E-mail</strong></label>
                                                    {!! Form::text('Email', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationDefault02"> <strong> Endereço</strong></label>
                                                    {!! Form::text('Endereco', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationDefault02"> <strong> CEP</strong></label>
                                                    {!! Form::text('Cep', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationDefault02"> <strong> N°</strong></label>
                                                    {!! Form::text('Numero', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationDefault02"> <strong> Bairro</strong></label>
                                                    {!! Form::text('Bairro', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationDefault02"> <strong> Estado</strong></label>
                                                    {!! Form::select(
                                                        'Estado',
                                                        [
                                                            'AC' => 'AC',
                                                            'AL' => 'AL',
                                                            'AP' => 'AP',
                                                            'AM' => 'AM',
                                                            'BA' => 'BA',
                                                            'CE' => 'CE',
                                                            'DF' => 'DF',
                                                            'ES' => 'ES',
                                                            'GO' => 'GO',
                                                            'MA' => 'MA',
                                                            'MT' => 'MT',
                                                            'MS' => 'MS',
                                                            'MG' => 'MG',
                                                            'PA' => 'PA',
                                                            'PB' => 'PB',
                                                            'PR' => 'PR',
                                                            'PE' => 'PE',
                                                            'PI' => 'PI',
                                                            'RJ' => 'RJ',
                                                            'RN' => 'RN',
                                                            'RS' => 'RS',
                                                            'RO' => 'RO',
                                                            'RR' => 'RR',
                                                            'SC' => 'SC',
                                                            'SP' => 'SP',
                                                            'SE' => 'SE',
                                                            'TO' => 'TO',
                                                            'Estrangeiro' => 'Estrangeiro',
                                                        ],
                                                        null,
                                                        ['class' => 'choices form-select'],
                                                    ) !!}
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for=""> <strong> Cidade:</strong></label>
                                                    {!! Form::text('Cidade', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for=""> <strong> Web Site</strong></label>
                                                    {!! Form::text('Site', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for=""> <strong>
                                                            Instagram</strong></label>
                                                    {!! Form::text('Instagram', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for=""> <strong> Facebok:</strong></label>
                                                    {!! Form::text('Facebook', null, ['class' => 'form-control']) !!}
                                                </div>

                                            </div>

                                        </div>

                                        <button type="submit" class="btn btn-primary me-1 mb-1 text-light">
                                            Salvar</button>
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
</div>
</div>

<script>
    $(document).ready(function() {
        $('.Cnpj').mask('00.000.000/0000-00', {
            reverse: true
        });
    });
</script>
