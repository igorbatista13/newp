{{-- CREATE --}}
{{-- NOVO PLANO  --}}



<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal"
    data-bs-target="#EditPlanos_{{ $planos->id }}" type="button">
    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
    <span class="btn-inner--text"> Editar Planos</span>
</button>






<div class="modal fade" id="EditPlanos_{{ $planos->id }}" tabindex="-1" aria-labelledby="EditPlanos_{{ $planos->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="Create"> Editar Plano <b>
                    </b> </h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Fechar
                    (X)</button>
            </div>
            <div class="modal-body">

                {!! Form::model($planos, [
                    'method' => 'PATCH',
                    'enctype' => 'multipart/form-data',
                    'route' => ['planos.update', $planos->id],
                ]) !!}

                <div class="col-lg-12 mt-lg-0 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Informação do Plano</h5>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label>Nome do Plano</label>
                                    {!! Form::text('Nome_Plano', $planos->Nome_Plano, ['class' => 'form-control', 'required']) !!}
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Preço</label>
                                    {!! Form::text('Preco', $planos->Preco, ['class' => 'form-control', 'required']) !!}
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Vigência</label>
                                    <select name="Vigencia" id="Vigencia" class="form-select" required>
                                        <option value="Mensal">Diária</option>
                                        <option value="Mensal">Mensal</option>
                                        <option value="Trimestral">Trimestral</option>
                                        <option value="Semestral">Semestral</option>
                                        <option value="Anual">Anual</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Benefícios</label>
                                    {!! Form::text('Beneficos', $planos->Beneficos, ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Observação</label>
                                    {!! Form::text('Obs', $planos->Obs, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label class="mt-4">Plano Ativo?</label>
                                    <div class="form-check form-switch">

                                        <input class="form-check-input" type="checkbox" name="Status" required
                                            value="Ativo" checked>
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
