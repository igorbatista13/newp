{{-- EDIT --}}
{{-- PLANO  --}}

{{-- "#EditUsuario_{{ $aluno->id }}" --}}

<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal" data-bs-target="#EditPlanos_{{ $plano->id }}"
    type="button">
    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
    <span class="btn-inner--text"> Editar Planos</span>
</button>


<div class="modal fade" id="#EditPlanos_{{ $plano->id }}" tabindex="-1" aria-labelledby="#EditPlanos_{{ $plano->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="Create"> Editar Plano <b>
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
                                                <img class="w-100 border-radius-lg shadow-lg mt-3"
                                                    src="https://png.pngtree.com/png-vector/20220617/ourmid/pngtree-gym-icon-lifting-vector-weight-png-image_5124835.png"
                                                    alt="product_image" width="200px">
                                            </div>
                                            <div class="col-lg-12 mt-5">
                                                {!! Form::model($plano, [
                                                    'method' => 'PATCH',
                                                    'enctype' => 'multipart/form-data',
                                                    'route' => ['plano.update', $plano->id],
                                                ]) !!}
                                                <div class="d-flex">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-8 mt-lg-0 mt-4">
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="font-weight-bolder">Informação do Plano</h5>
                                        <div class="row">
                                            <div class="col-12 col-sm-4">
                                                <label>Nome do Plano</label>
                                                {!! Form::text('Nome_Plano', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-3">
                                                <label class="mt-4">Plano Ativo?</label>
                                                <div class="form-check form-switch">

                                                    <input class="form-check-input" type="checkbox" name="Status"
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
