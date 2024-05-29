<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal"
    data-bs-target="#EditModalidades_{{ $modalidade->id }}" type="button">
    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
    <span class="btn-inner--text"> Editar</span>
</button>

<div class="modal fade" id="EditModalidades_{{ $modalidade->id }}" tabindex="-1"
    aria-labelledby="EditModalidades_{{ $modalidade->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="Create"> Editar Modalidade <b>
                    </b> </h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Fechar
                    (X)</button>
            </div>
            <div class="modal-body">


                <div class="card-body">
                    <div class="container-fluid py-2">
                        <div class="row mt-4">
                            {!! Form::model($modalidades, [
                                'method' => 'PATCH',
                                'enctype' => 'multipart/form-data',
                                'route' => ['modalidades.update', $modalidade->id],
                            ]) !!}
                            <div class="col-lg-12 mt-lg-0 mt-4">
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="font-weight-bolder">Informação da Modalidade</h5>
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label>Nome Modalidade</label>
                                                {!! Form::text('Nome_Modalidade', $modalidade->Nome_Modalidade, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Tipo</label>
                                                {!! Form::text('Tipo', $modalidade->tipo, ['class' => 'form-control valid']) !!}
                                            </div>
                                            <div class="col-6 col-sm-12 mt-3 mt-sm-0">
                                                <label>Observação</label>
                                                {!! Form::text('Obs', $modalidade->Obs, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="mt-4">Situação</label>
                                                <div class="form-check form-switch">

                                                    <input class="form-check-input" type="checkbox" name="Situacao"
                                                        value="Sim" checked>
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
