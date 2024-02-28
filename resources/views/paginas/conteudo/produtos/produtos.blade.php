{{-- ALUNOS --}}
@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="data:image/png;base64,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"
                        alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        Produtos
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        ----
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">

                    <div class="dropdown d-inline">

                        {{-- @include('/paginas/conteudo/modalidades/modal/create') --}}
                        @include('/paginas/conteudo/produtos/modal/create/modal')



                    </div>
                    {{-- @include('/paginas/conteudo/alunos/modal/create') --}}


                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-7">
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
                                            ÚLTIMOS PRODUTOS CADASTRADOS
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
                                            Preço</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Disponível no site
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Estoque
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ação</th>
                                    </tr>
                                </thead>
                                @foreach ($produto as $produtos)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('/images/produtos/') }}/{{ $produtos->image }}"
                                                            class="avatar avatar-sm me-3" alt="avatar image">
                                                        {{-- <img src="https://i.pinimg.com/736x/42/9d/63/429d631659a11a9eb666b103d811470a.jpg" class="avatar avatar-sm me-3"
                                                            alt="avatar image"> --}}
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $produtos->Nome_Produto }}</h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Categoria: ' . $produtos->Categoria_Produto ?? 'Categoria não informada' }}
                                                        </p>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Quantidade: ' . $produtos->Quantidade_Produto ?? 'Quantidade não informada' }}
                                                        </p>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Marca: ' . $produtos->Marca ?? 'Quantidade não informada' }}
                                                        </p>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Fornecedor: ' . $produtos->Nome_fantasia ?? 'Fornecedor não informado' }}
                                                        </p>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ 'Vencimento: ' . $produtos->Data_Vencimento ?? 'Vencimento não informado' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm text-secondary mb-0"> @if ($produtos->Preco_Custo == '')
                                                    <span class="badge bg-warning"> Preço de Custo <small> Não
                                                            Informado
                                                    </span>
                                                @elseif ($produtos->Preco_Custo != '')
                                                    <span class="badge bg-gradient-success">
                                                        Preço de Custo
                                                        {{ "R$ " . number_format($produtos->Preco_Custo, 2, ',', '.') }}
                                                    </span>
                                                    <p> </span>
                                                @endif

                                                @if ($produtos->Preco_Venda == '')
                                                    <span class="badge bg-warning"> Preço de Venda <small> Não
                                                            Informado
                                                    </span>
                                                @elseif ($produtos->Preco_Venda != '')
                                                    <span class="badge bg-gradient-success">
                                                        Preço de Venda
                                                        {{ "R$ " . number_format($produtos->Preco_Venda, 2, ',', '.') }}
                                                    </span>

                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge badge-dot me-4">
                                                    <i class="bg-info"></i>
                                                    <span class="text-dark text-xs">  @if ($produtos->Status_Produto == '')
                                                        <span class="badge bg-warning">Não</span>
                                                    @elseif($produtos->Status_Produto == 'Sim')
                                                        <span class="badge bg-success">
                                                            Sim </span>
                                                    @endif

                                                    </span>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($produtos->Estoque_Produto == '')
                                                <span class="badge bg-warning">Não</span>
                                            @elseif($produtos->Estoque_Produto == 'Sim')
                                                <span class="badge bg-success">
                                                    Sim </span>
                                            @endif
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
    <div class="col-xl-5 ms-auto mt-xl-0 mt-4">



        <div class="container-fluid py-4">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
            <div class="card overflow-hidden shadow-lg" style="background-image: url('https://png.pngtree.com/png-vector/20230928/ourmid/pngtree-woman-lifts-weights-gym-body-building-png-image_10043037.png');
            background-size: cover;">
            <span class="mask bg-gradient-dark"></span>
            <div class="card-body p-3 position-relative">
            <div class="row">
            <div class="col-8 text-start">
            <div class="icon icon-shape bg-white shadow text-center border-radius-md">
            <i class="ni ni-circle-08 text-dark text-lg opacity-10" aria-hidden="true"></i>
            </div>
            <h5 class="text-white font-weight-bolder mb-0 mt-3">
                {{ $produtoqtd }}
            </h5>
            <span class="text-white text-sm">Produtos</span>
            </div>
            <div class="col-4">
            <div class="dropdown text-end mb-6">
            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-ellipsis-h text-white"></i>
            </a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
            <div class="card overflow-hidden shadow-lg" style="background-image: url('https://academiaindside.com.br/wp-content/uploads/2015/12/homem-3-pronto-para-entrar-em-forma-indside-academia-toledo-pr.png');
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
            <span class="text-white text-sm">produtos disponíveis no site</span>
            </div>
            <div class="col-4">
            <div class="dropdown text-end mb-6">
            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-ellipsis-h text-white"></i>
            </a>
           
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-12">
            <div class="card overflow-hidden shadow-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reports3.jpg');
            background-size: cover;">
            <span class="mask bg-gradient-dark"></span>
            <div class="card-body p-3 position-relative">
            <div class="row">
            <div class="col-8 text-start">
            <div class="icon icon-shape bg-white shadow text-center border-radius-md">
            <i class="ni ni-cart text-dark text-lg opacity-10" aria-hidden="true"></i>
            </div>
            <h5 class="text-white font-weight-bolder mb-0 mt-3">
            2300
            </h5>
            <span class="text-white text-sm">Vencimento</span>
            </div>
            <div class="col-4">
            <div class="dropdown text-end mb-6">
            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-ellipsis-h text-white"></i>
            </a>
          
            </div>
            <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+15%</p>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
            <div class="card overflow-hidden shadow-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/reports4.jpg');
            background-size: cover;">
            <span class="mask bg-gradient-dark"></span>
            <div class="card-body p-3 position-relative">
            <div class="row">
            <div class="col-8 text-start">
            <div class="icon icon-shape bg-white shadow text-center border-radius-md">
            <i class="ni ni-like-2 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
            </div>
            <h5 class="text-white font-weight-bolder mb-0 mt-3">
            940
            </h5>
            <span class="text-white text-sm">Likes</span>
            </div>
            <div class="col-4">
            <div class="dropdown text-end mb-6">
            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-ellipsis-h text-white"></i>
            </a>
           
            </div>
            <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+90%</p>
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
            <div class="card overflow-hidden shadow-lg" style="background-image: url('https://i.pinimg.com/474x/14/3a/a3/143aa34f85a3bf11f91908cafe38776e.jpg');
            background-size: cover;">
            
            <div class="card-body">
                    <div class="d-flex mb-0">
                        <p class="mb-0 text-white"></p>
                        <div class="form-check form-switch ms-auto">
                            <button class="btn btn-icon btn-dark ms-2 export" data-bs-toggle="modal"
                                data-bs-target="#CreateAlunos" type="button">
                                <span class="btn-inner--text"> Produtos </span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="text-gradient text-primary"> 
                            <span class="text-lg ms-n2"> </span>
                        </h1>
                        {{-- <h6 class="mb-0 font-weight-bolder">Produtos</h6> --}}
                        <p class="mt-2 mb-0 font-weight-bold text-white">Produtos</p>
                        <p class="opacity-8 mb-0 text-sm"></p>
                    </div>
                </div>
            </div>
    </div>
{{-- Profesores --}}
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
        <div class="card overflow-hidden shadow-lg" style="background-image: url('https://blog.totalpass.com.br/wp-content/uploads/2023/01/motivar-os-alunos-para-treinar.jpg');
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
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
        <div class="card overflow-hidden shadow-lg" style="background-image: url('https://gestaofitness.com.br/files/2021/05/gestaoacademia_foto.png');
        background-size: cover;">
        
        <div class="card-body">
                <div class="d-flex mb-0">
                    <p class="mb-0 text-white"></p>
                    <div class="form-check form-switch ms-auto">
                        <button class="btn btn-icon btn-dark ms-2 export" data-bs-toggle="modal"
                            data-bs-target="#CreateAlunos" type="button">
                            <span class="btn-inner--text"> Clientes </span>
                        </button>
                    </div>
                </div>
                <div class="card-body text-center">
                    <h1 class="text-gradient text-primary"> 
                        <span class="text-lg ms-n2"> </span>
                    </h1>
                    {{-- <h6 class="mb-0 font-weight-bolder">Clientes</h6> --}}
                    <p class="mt-2 mb-0 font-weight-bold text-white">Clientes</p>
                    <p class="opacity-8 mb-0 text-sm"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
        <div class="card overflow-hidden shadow-lg" style="background-image: url('https://fitnessone.com.br/wp-content/uploads/2014/04/showroom-1.jpg');
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
