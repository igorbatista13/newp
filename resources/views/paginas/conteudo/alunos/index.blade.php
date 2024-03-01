{{-- ALUNOS --}}
@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://img.elo7.com.br/product/zoom/33F8A2D/adesivo-de-parede-academia-fitness-musculacao-crossfit-peso-crossfit.jpg"
                        alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        Alunos
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        ----
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">

                    <div class="dropdown d-inline">

                        @include('/paginas/conteudo/modalidades/modal/create')



                    </div>
                    @include('/paginas/conteudo/alunos/modal/create')


                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-8">



            <div class="row my-4">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8 my-auto">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold opacity-7">Atualizado
                                        </p>
                                        <h5 class="font-weight-bolder mb-0">
                                            ÚLTIMOS ALUNOS CADASTRADOS
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
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            E-mail</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Sexo</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Modalidade</th>


                                    </tr>
                                </thead>
                                @foreach ($alunos as $aluno)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="https://img.elo7.com.br/product/zoom/33F8A2D/adesivo-de-parede-academia-fitness-musculacao-crossfit-peso-crossfit.jpg"
                                                            class="avatar avatar-sm me-3" alt="avatar image">
                                                        {{-- <img src="https://i.pinimg.com/736x/42/9d/63/429d631659a11a9eb666b103d811470a.jpg" class="avatar avatar-sm me-3"
                                                            alt="avatar image"> --}}
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $aluno->Nome_Completo }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-secondary mb-0">{{ $aluno->Email }}</p>
                                            </td>
                                            <td>
                                                <span class="badge badge-dot me-4">
                                                    <i class="bg-info"></i>
                                                    <span class="text-dark text-xs">{{ $aluno->Sexo }}

                                                    </span>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @foreach (json_decode($aluno->modalidade_id) as $modalidadeId)
                                                    <div class="d-flex px-2 py-0">
                                                        <span class="badge bg-primary me-3"> </span>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ \App\Models\Modalidades::find($modalidadeId)->Nome_Modalidade }}
                                                            </h6>
                                                        </div>
                                                @endforeach
                        </div>
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



        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
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
                                        X alunos
                                    </h5>
                                    <span class="text-white text-sm">Total de Alunos</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-md-0">
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
                                        357
                                    </h5>
                                    <span class="text-white text-sm">Alunos Matriculados</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 col-12">
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
                                        10
                                    </h5>
                                    <span class="text-white text-sm">Modalidades</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-md-0">
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
                                        940
                                    </h5>
                                    <span class="text-white text-sm">Professores</span>
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
<hr class="horizontal dark my-4">

<div class="row">
    <div class="col-lg-2 col-sm-6">
        <div class="card overflow-hidden shadow-lg"
            style="background-image: url('https://i.pinimg.com/474x/14/3a/a3/143aa34f85a3bf11f91908cafe38776e.jpg');
            background-size: cover;">

            <div class="card-body">
                <div class="d-flex mb-0">
                    <p class="mb-0 text-white"></p>
                    <div class="form-check form-switch ms-auto">
                        <button class="btn btn-icon btn-dark ms-2 export" data-bs-toggle="modal"
                            data-bs-target="#CreateAlunos" type="button">
                            <span class="btn-inner--text"> Alunos </span>
                        </button>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h1 class="text-gradient text-primary">
                        <span class="text-lg ms-n2"> </span>
                    </h1>
                    {{-- <h6 class="mb-0 font-weight-bolder">Alunos</h6> --}}
                    <p class="mt-2 mb-0 font-weight-bold text-white">Alunos</p>
                    <p class="opacity-8 mb-0 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
    {{-- Profesores --}}
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
        <div class="card overflow-hidden shadow-lg"
            style="background-image: url('https://blog.totalpass.com.br/wp-content/uploads/2023/01/motivar-os-alunos-para-treinar.jpg');
        background-size: cover;">

            <div class="card-body">
                <div class="d-flex mb-0">
                    <p class="mb-0 text-white"></p>
                    <div class="form-check form-switch ms-auto">
                        <button class="btn btn-icon btn-dark ms-2 export" data-bs-toggle="modal"
                            data-bs-target="#CreateAlunos" type="button">
                            <span class="btn-inner--text"> Professores </span>
                        </button>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h1 class="text-gradient text-primary">
                        <span class="text-lg ms-n2"> </span>
                    </h1>
                    {{-- <h6 class="mb-0 font-weight-bolder">Professores</h6> --}}
                    <p class="mt-2 mb-0 font-weight-bold text-white">Professores</p>
                    <p class="opacity-8 mb-0 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
        <div class="card overflow-hidden shadow-lg"
            style="background-image: url('https://gestaofitness.com.br/files/2021/05/gestaoacademia_foto.png');
        background-size: cover;">

            <div class="card-body">
                <div class="d-flex mb-0">
                    <p class="mb-0 text-white"></p>
                    <div class="form-check form-switch ms-auto">
                        <button class="btn btn-icon btn-dark ms-2 export" data-bs-toggle="modal"
                            data-bs-target="#CreateAlunos" type="button">
                            <span class="btn-inner--text"> Funcionários </span>
                        </button>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h1 class="text-gradient text-primary">
                        <span class="text-lg ms-n2"> </span>
                    </h1>
                    {{-- <h6 class="mb-0 font-weight-bolder">Funcionários</h6> --}}
                    <p class="mt-2 mb-0 font-weight-bold text-white">Funcionários</p>
                    <p class="opacity-8 mb-0 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
        <div class="card overflow-hidden shadow-lg"
            style="background-image: url('https://fitnessone.com.br/wp-content/uploads/2014/04/showroom-1.jpg');
        background-size: cover;">

            <div class="card-body">
                <div class="d-flex mb-0">
                    <p class="mb-0 text-white"></p>
                    <div class="form-check form-switch ms-auto">
                        <button class="btn btn-icon btn-dark ms-2 export" data-bs-toggle="modal"
                            data-bs-target="#CreateAlunos" type="button">
                            <span class="btn-inner--text"> Fornecedores </span>
                        </button>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h1 class="text-gradient text-primary">
                        <span class="text-lg ms-n2"> </span>
                    </h1>
                    {{-- <h6 class="mb-0 font-weight-bolder">Fornecedores</h6> --}}
                    <p class="mt-2 mb-0 font-weight-bold text-white">Fornecedores</p>
                    <p class="opacity-8 mb-0 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
        <div class="card bg-default h-100">
            <div class="card-body">
                <div class="d-flex mb-4">
                    <p class="mb-0 text-white">On</p>
                    <div class="form-check form-switch ms-auto">
                        <input class="form-check-input" type="checkbox" id="flexwifiCheckDefault" checked>
                    </div>
                </div>
                <svg width="45px" viewBox="0 0 41 31" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>wifi</title>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="wifi" transform="translate(3.000000, 3.000000)">
                            <path
                                d="M7.37102658,14.6156105 C12.9664408,9.02476091 22.0335592,9.02476091 27.6289734,14.6156105"
                                stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <circle id="Oval" fill="#FFFFFF" cx="17.5039082" cy="22.7484921" r="4.9082855">
                            </circle>
                            <path d="M0,7.24718945 C9.66583791,-2.41572982 25.3341621,-2.41572982 35,7.24718945"
                                stroke="#FFFFFF" stroke-width="5" opacity="0.398982558" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </g>
                </svg>
                <p class="font-weight-bold mt-4 mb-0 text-white">Wi-fi</p>
                <span class="text-xs text-white">Active</span>
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-lg-2 col-sm-6 mt-sm-0 mt-4">
        <div class="card h-100">
            <div class="card-body d-flex flex-column justify-content-center text-center">
                <a href="javascript:;">
                    <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                    <h5 class="text-secondary"> New device </h5>
                </a>
            </div>
        </div>
    </div> --}}
</div>


@include('paginas.base.rodape.rodape')
