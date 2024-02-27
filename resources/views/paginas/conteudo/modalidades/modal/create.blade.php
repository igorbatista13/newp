{{-- Nova Modalidade   --}}
  


            <button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal"
            data-bs-target="#CreateModalidades" type="button">
                <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                <span class="btn-inner--text"> Modalidades</span>
                </button>





    <div class="modal fade" id="CreateModalidades" tabindex="-1" aria-labelledby="CreateModalidades" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="" id="Create"> Novo Modalidade <b>
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

                                                    {!! Form::open(['route' => 'modalidades.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

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
                                                    <label>Nome Modalidade</label>
                                                    {!! Form::text('Nome_Modalidade', null, ['class' => 'form-control']) !!}
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <label>Tipo</label>
                                                    {!! Form::text('Tipo', null, ['class' => 'form-control valid']) !!}
                                                </div>
                                                <div class="col-2 col-sm-2 mt-3 mt-sm-0">
                                                    <label>Observação</label>
                                                    {!! Form::text('Obs', null, ['class' => 'form-control']) !!}
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="col-3">
                                                    <label class="mt-4">Situação</label>
                                                    <div class="form-check form-switch">

                                                        <input class="form-check-input" type="checkbox" name="Situacao"
                                                            value="Sim">
                                                        <label class="form-check-label" for="Estoque"> Ativo?</label>
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
