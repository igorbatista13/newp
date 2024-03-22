{{-- CREATE --}}
{{-- NOVO PLANO  --}}
  


<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal"
data-bs-target="#CreatePlanos" type="button">
    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
    <span class="btn-inner--text"> Planos</span>
    </button>





<div class="modal fade" id="CreatePlanos" tabindex="-1" aria-labelledby="CreatePlanos" aria-hidden="true">
<div class="modal-dialog modal-xl">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="" id="Create"> Novo Plano <b>
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

                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        @foreach ($plano as $planos)

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-0">
                                                        <span class="badge bg-primary me-3"> </span>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{$planos->Nome_Plano}}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 15% </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-0">
                                                        <span class="badge bg-secondary me-3"> </span>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Kitchen</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 20% </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-0">
                                                        <span class="badge bg-info me-3"> </span>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Attic</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 13% </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-0">
                                                        <span class="badge bg-success me-3"> </span>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Garage</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 32% </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-0">
                                                        <span class="badge bg-warning me-3"> </span>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Basement</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold"> 20% </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="row">
                              

                                    <div class="col-lg-12 mt-5">

                                        {!! Form::open(['route' => 'planos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

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
                                    {{-- <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Tipo</label>
                                        {!! Form::text('Tipo', null, ['class' => 'form-control valid']) !!}
                                    </div>
                                    <div class="col-2 col-sm-2 mt-3 mt-sm-0">
                                        <label>Observação</label>
                                        {!! Form::text('Obs', null, ['class' => 'form-control']) !!}
                                    </div> --}}

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

      

        <div class="table-responsive">

            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Nome</th>

                    </tr>
                </thead>

                @foreach ($plano as $planos)
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                              
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">        {{$planos->Nome_Plano}}
                                        </h6>
                                      
                                    </div>
                                </div>
                            </td>                
                        </tr>
                    </tbody>
            </table>
        </div>
        @endforeach
       
