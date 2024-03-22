{{-- ALUNOS --}}
@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

{{-- SMENU ALUNOS --}}
@include('paginas.conteudo.alunos.menu_alunos')


<div class="container-fluid py-0">
    <div class="row">
        <div class="col-xl-8">



            <div class="row my-4">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <div class="numbers">
                                        {{-- <p class="text-sm text-success mb-0 text-capitalize font-weight-bold opacity-7">Atualizado
                                        </p> --}}
                                        <h5 class="font-weight-bolder mb-0">
                                            ÚLTIMOS USUÁRIOS CADASTRADOS
                                        </h5>
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
                                      
                                          

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            </th>

                                        <th> Plano </th>
                                        <th>  </th>


                                    </tr>
                                </thead>
                                @foreach ($alunos as $aluno)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('/images/usuarios/') }}/{{ $aluno->image }}"
                                                            class="avatar avatar-sm me-3" alt="avatar image">

                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $aluno->Nome_Completo }}</h6>
                                                        <p class="text-sm text-secondary mb-0">{{ $aluno->Email }}</p>
                                                        <span
                                                        class="badge bg-warning me-0">{{ $aluno->Perfil !== null ? $aluno->Perfil : 'Não informado' }}</span>

                                                    </div>
                                                </div>
                                            </td>
                                 
                             
                                            <td class="align-middle text-center text-sm">
                                                @if (!empty($aluno->modalidade_id))
                                                    @php
                                                        $modalidades = json_decode($aluno->modalidade_id, true);
                                                    @endphp

                                                    @if ($modalidades !== null)
                                                        @foreach ($modalidades as $modalidadeId)
                                                            <div class="d-flex px-0 py-1">
                                                                {{-- <span class="badge bg-warning me-0"> </span> --}}
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <small class="mb-0 text-sm text-bold">
                                                                        <img src="https://img.elo7.com.br/product/zoom/33F8A2D/adesivo-de-parede-academia-fitness-musculacao-crossfit-peso-crossfit.jpg"
                                                                            class="" width="30px"
                                                                            alt="avatar image">

                                                                        {{ \App\Models\Modalidades::find($modalidadeId)->Nome_Modalidade }}
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                @endif

                        </div>
                        </td>
                        <td>                                @foreach ($aluno->matriculas as $matricula)

                            {{-- @foreach ($aluno->matriculas as $matricula) --}}
                            {{-- <b> Matrícula: </b> {{ $aluno->matriculas->id }} --}}
                            <b> {{$matricula->id }}  - {{ $matricula->planos->Nome_Plano }} </b>
                            @endforeach

                            {{-- <p class="text-sm text-secondary mb-0">{{ $aluno->modalidade->Nome_Modalidade }}</p> --}}
                        </td>
                        <td>
                            @include('/paginas/conteudo/alunos/modal/edit')
                            {{-- @include('/paginas/conteudo/planos/modal/edit') --}}
                        </td>
                        </tr>
                        </tbody>
                        @endforeach 

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-4 mt-xl-0 mt-4">
        <div class="container-fluid py-0">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="card overflow-hidden shadow-lg"
                        style="background-image: url('https://png.pngtree.com/png-vector/20230928/ourmid/pngtree-woman-lifts-weights-gym-body-building-png-image_10043037.png');
            background-size: cover;">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body p-3 position-relative">
                            <div class="row">
                                <div class="col-8 text-start">
                                    <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                        <i class="ni ni-circle-08 text-dark text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                        {{ $qtdalunos }}
                                    </h5>
                                    <span class="text-white text-sm">Total de Alunos</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12 mt-4 mt-md-0">
                    <div class="card overflow-hidden shadow-lg"
                        style="background-image: url('https://academiaindside.com.br/wp-content/uploads/2015/12/homem-3-pronto-para-entrar-em-forma-indside-academia-toledo-pr.png');
            background-size: cover;">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body p-3 position-relative">
                            <div class="row">
                                <div class="col-8 text-start">
                                    <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                        <i class="ni ni-active-40 text-dark text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                        {{ $qtdprofessor }}
                                    </h5>
                                    <span class="text-white text-sm">Professores</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="card overflow-hidden shadow-lg"
                        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reports3.jpg');
            background-size: cover;">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body p-3 position-relative">
                            <div class="row">
                                <div class="col-8 text-start">
                                    <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                        <i class="ni ni-cart text-dark text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                        {{ $qtdmodalidades }}
                                    </h5>
                                    <span class="text-white text-sm">Modalidades</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12 mt-4 mt-md-0">
                    <div class="card overflow-hidden shadow-lg"
                        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reports4.jpg');
            background-size: cover;">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body p-3 position-relative">
                            <div class="row">
                                <div class="col-8 text-start">
                                    <div class="icon icon-shape bg-white shadow text-center border-radius-md">
                                        <i class="ni ni-like-2 text-dark text-gradient text-lg opacity-10"
                                            aria-hidden="true"></i>
                                    </div>
                                    <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                        {{ $qtdfunc }}
                                    </h5>
                                    <span class="text-white text-sm">Funcionários</span>
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
{{-- <div class="row mt-4">
    <div class="col-lg-12 ms-auto">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <div class="d-flex align-items-center">
                    <h6 class="mb-0">Consumption by room</h6>
                    <button type="button"
                        class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="See the consumption per room">
                        <i class="fas fa-info"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-5 text-center">
                        <div class="chart">
                            <canvas id="chart-consumption" class="chart-canvas" height="197"></canvas>
                        </div>
                        <h4 class="font-weight-bold mt-n8">
                            <span>310.0</span>
                            <span class="d-block text-body text-sm">WATTS</span>
                        </h4>
                    </div>
                    <div class="col-7">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-0">
                                                <span class="badge bg-primary me-3"> </span>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Living Room</h6>
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
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="col-lg-6 mt-lg-0 mt-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <h6>Consumption per day</h6>
                        <div class="chart pt-3">
                            <canvas id="chart-cons-week" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-sm-0 mt-4">
                <div class="card h-100">
                    <div class="card-body text-center p-3">
                        <h6 class="text-start">Device limit</h6>
                        <round-slider value="21" valueLabel="Temperature"></round-slider>
                        <h4 class="font-weight-bold mt-n7"><span class="text-dark" id="value">21</span><span
                                class="text-body">°C</span></h4>
                        <p class="ps-1 mt-5 mb-0"><span class="text-xs">16°C</span><span
                                class="px-3">Temperature</span><span class="text-xs">38°C</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <hr class="horizontal dark my-4"> --}}


{{-- Incluir a parte inferior de blocos --}}
@include('paginas.conteudo.alunos.blocos')

{{-- Rodapé --}}
@include('paginas.base.rodape.rodape')
