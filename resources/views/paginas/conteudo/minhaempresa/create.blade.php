@include('paginas.base.topo.topo')



<div class="panel-header panel-header-sm">
</div>

<div class="container-fluid py-4">

    <div class="row mb-5">
        <div class="col-12">
            <div class="multisteps-form mb-5">

                <div class="row">
                    <div class="col-6 col-lg-6 mx-auto my-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active text-bold" type="button"
                                        title="User Info">
                                        <span>Informações da sua empresa</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn text-bold" type="button"
                                        title="Endereço">Endereço</button>
                                    <button class="multisteps-form__progress-btn text-bold" type="button"
                                        title="Social">Social</button>
                                    <button class="multisteps-form__progress-btn" type="button"
                                        title="Profile">Logomarca</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        {!! Form::open([
                            'route' => 'minhaempresa.store',
                            'method' => 'POST',
                            'enctype' => 'multipart/form-data',
                            'class' => 'multisteps-form__form mb-8',
                        ]) !!}

                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                            data-animation="FadeIn">
                            <h5 class="font-weight-bolder mb-0">Informações da sua empresa</h5>
                            <p class="mb-0 text-sm">Mandatory informations</p>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Nome da Empresa</label>
                                        {!! Form::text('Nome_Empresa', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>CNPJ</label>
                                        {!! Form::text('Cnpj', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Chave Pix</label>
                                        {!! Form::text('Chave_Pix', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>E-mail</label>
                                        {!! Form::text('Email', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Telefone</label>
                                        {!! Form::text('Telefone', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                    <div class="col-6 col-sm-6">
                                        <label>Descrição</label>
                                     
                                        {!! Form::textarea('Descricao', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                </div>

                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                        title="Next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Endereço</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col">
                                        <label>Endereço:</label>
                                        {!! Form::text('Endereco', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Cidade</label>
                                        {!! Form::text('Cidade', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                    <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                        <label>Estado</label>
                                        <select name="Estado" id="Estado"
                                            class="multisteps-form__select form-control">
                                            <option value="">Selecione um estado</option>
                                            <option value="Acre">Acre</option>
                                            <option value="Alagoas">Alagoas</option>
                                            <option value="Amapá">Amapá</option>
                                            <option value="Amazonas">Amazonas</option>
                                            <option value="Bahia">Bahia</option>
                                            <option value="Ceará">Ceará</option>
                                            <option value="Distrito Federal">Distrito Federal</option>
                                            <option value="Espírito Santo">Espírito Santo</option>
                                            <option value="Goiás">Goiás</option>
                                            <option value="Maranhão">Maranhão</option>
                                            <option value="Mato Grosso">Mato Grosso</option>
                                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                            <option value="Minas Gerais">Minas Gerais</option>
                                            <option value="Pará">Pará</option>
                                            <option value="Paraíba">Paraíba</option>
                                            <option value="Paraná">Paraná</option>
                                            <option value="Pernambuco">Pernambuco</option>
                                            <option value="Piauí">Piauí</option>
                                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                            <option value="Rondônia">Rondônia</option>
                                            <option value="Roraima">Roraima</option>
                                            <option value="Santa Catarina">Santa Catarina</option>
                                            <option value="São Paulo">São Paulo</option>
                                            <option value="Sergipe">Sergipe</option>
                                            <option value="Tocantins">Tocantins</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                        <label>CEP</label>

                                        {!! Form::text('CEP', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                        title="Prev">Voltar</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                        title="Next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Social</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label>Site</label>
                                        {!! Form::text('Site', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Facebook</label>
                                        {!! Form::text('facebook_url', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Instagram</label>
                                        {!! Form::text('instagram_url', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Linkedin</label>
                                        {!! Form::text('linkedin_url', null, ['class' => 'multisteps-form__input form-control']) !!}

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                            title="Prev">Voltar</button>
                                        {{-- <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                type="button" title="Next">Próximo</button> --}}
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                            title="Next">Próximo</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100"
                            data-animation="FadeIn">
                            <h5 class="font-weight-bolder"></h5>
                            <div class="multisteps-form__content mt-3">
                                <div class="row">
                                    <div class="col-7">
                                        <label>Sua Logomarca</label>
                                        <input class="multisteps-form__input form-control" name="Logo" type="file"
                                            placeholder="" />
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                        title="Prev">Voltar</button>
                                    <button type="submit"
                                        class="btn bg-gradient-primary ms-auto mb-0 js-btn-next">Salvar</button>

                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/pdv/js/plugins/multistep-form.js') }}"></script>
{{-- 

<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl">



                    <section id="multiple-column-form">
                        <div class="row match-height">
                            <div class="col-12">
                                <div class="card">

                                    <br>
                                    <div class="text-center mb-5">
                                        <img src="{{ asset('/images/empresa.png') }}" height="160" class='mb-4'>
                                        <h3>SUA EMPRESA</h3>
                                        <p>Cadastre as inforamções da sua empresa aqui.</p>
                                    </div>

                                    <div class="row gy-4">
                                        <div class="col-12 col-lg-12">
                                            <div
                                                class="app-card app-card-account shadow-sm  flex-column align-items-start">
                                                <div class="app-card-header p-3 border-bottom-0">


                                                    {!! Form::open(['route' => 'minhaempresa.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


                                                    <div class="row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault01"> <strong> Nome da sua
                                                                    Empresa </strong> </label>
                                                            {!! Form::text('Nome_Empresa', null, ['class' => 'form-control']) !!}

                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault02">
                                                                <strong>CNPJ</strong></label>
                                                            {!! Form::text('Cnpj', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault02"> <strong>
                                                                    Telefone</strong></label>
                                                            {!! Form::text('Telefone', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault02"> <strong> Chave
                                                                    Pix</strong></label>
                                                            {!! Form::text('Chave_Pix', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault02"> <strong>
                                                                    E-mail</strong></label>
                                                            {!! Form::text('Email', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault02"> <strong>
                                                                    Site</strong></label>
                                                            {!! Form::text('Site', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault02"> <strong>
                                                                    Facebook</strong></label>
                                                            {!! Form::text('facebook_url', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault02"> <strong>
                                                                    Instagram</strong></label>
                                                            {!! Form::text('instagram_url', null, ['class' => 'form-control']) !!}
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationDefault02"> <strong>
                                                                    Linkedin</strong></label>
                                                            {!! Form::text('linkedin_url', null, ['class' => 'form-control']) !!}
                                                        </div>


                                                        <br>

                                                        <div class="form-group">
                                                            <div class="form-check">




                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary me-1 mb-1">Salvar</button>
                                                            </form>
 --}}


@include('paginas.base.rodape.rodape') --}}
