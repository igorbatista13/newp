@include('paginas.base.topo.topo')






<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="../../../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                Informações da sua Empresa
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">

                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                <i class="ni ni-app"></i>
                                <span class="ms-2">App</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="ni ni-email-83"></i>
                                <span class="ms-2">Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="ni ni-settings-gear-65"></i>
                                <span class="ms-2">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Passos iniciais</h6>
                    {{-- <p class="text-sm">
                        <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                        <span class="font-weight-bold">24%</span> this month
                    </p> --}}
                </div>
                <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                        <div class="timeline-block mb-3">
                            <span class="timeline-step">
                                @if (!$empresaExists)
                                    <i class="fas fa-minus text-danger"></i>
                            </span>
                            <div class="timeline-content">
                                <h6 class="text-dark text-sm font-weight-bold mb-0">Configurar Empresa <a
                                        href="minhaempresa/create">
                                        <button class="btn btn-sm btn-primary"> Configurar </button> </a> </h6>
                            @else
                                <i class="fas fa-check text-success"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Empresa Configurada!</h6>
                                    @endif
                                </div>
                            </div>

                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    @if (!$planoExists)
                                        <i class="fas fa-minus text-danger"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Configurar meu Perfil <a
                                            href="minhaempresa/create">
                                            <button class="btn btn-sm btn-primary"> Configurar </button> </a> </h6>
                                @else
                                    <i class="fa fa-user text-success"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0">Perfil configurado</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @foreach ($minhaempresa as $minhaempresas)
                    <div class="col-12 col-md-6 col-xl-4 mt-md-0 mt-4">
                        <div class="card h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-md-8 d-flex align-items-center">
                                        <h5 class="font-weight-bolder mb-0">
                                            <b> Nome da Empresa: </b>
                                            {{ $minhaempresas->Nome_Empresa ?? 'Não informado' }}
                                        </h5>
                                        <h6 class="mb-0">
                                        </h6>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="{{ route('minhaempresa.edit', $minhaempresas->id) }}">
                                            <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Editar Empresa"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <p class="text-sm">
                                    {{ $minhaempresas->Descricao ?? 'Não informado' }}

                                </p>
                                <hr class="horizontal gray-light my-4">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                            class="text-dark">CNPJ:</strong>
                                        &nbsp; {{ $minhaempresas->Cnpj ?? 'Não informado' }} </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">E-mail:</strong>
                                        &nbsp;
                                        {{ $minhaempresas->Email ?? 'Não informado' }} </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Site:</strong>
                                        &nbsp;
                                        {{ $minhaempresas->Site ?? 'Não informado' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong
                                            class="text-dark">Telefone:</strong>
                                        &nbsp; {{ $minhaempresas->Telefone ?? 'Não informado' }}
                                    </li>
                                    <li class="list-group-item border-0 ps-0 pb-0">
                                        <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                        <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0"
                                            href="https://facebook.com/{{ $minhaempresas->facebook_url ?? 'Não informado' }}">
                                            <i class="fab fa-facebook fa-lg"></i>
                                        </a>
                                        <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0"
                                            href="https://instagram.com/{{ $minhaempresas->instagram_url ?? 'Não informado' }}">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </a>
                                        <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0"
                                            href="https://linkedin.com/{{ $minhaempresas->linkedin_url ?? 'Não informado' }}">
                                            <i class="fab fa-instagram fa-lg"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 col-xl-4 mt-xl-0 mt-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Acesso rápido</h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <i class="fa fa-user text-primary"></i>

                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Usuários</h6>
                                        <p class="mb-0 text-xs"></p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="/usuarios">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center">
                                            <i class="ni ni-curved-next opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <i class="fa fa-user text-primary"></i>

                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Alunos</h6>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="/alunos">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center">
                                            <i class="ni ni-curved-next opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <i class="fa fa-user text-primary"></i>

                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Professores</h6>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="/professores">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center">
                                            <i class="ni ni-curved-next opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <i class="ni ni-satisfied text-primary"></i>

                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Modalidades</h6>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="/modalidades">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center">
                                            <i class="ni ni-curved-next opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0">
                                    <div class="avatar me-3">
                                        <i class="fa fa-user text-primary"></i>

                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Planos</h6>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="/planos">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center">
                                            <i class="ni ni-curved-next opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0">
                                    <div class="avatar me-3">
                                        <i class="ni ni-cart text-success"></i>

                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Produtos</h6>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="/produtos">
                                        <div class="icon icon-shape bg-gradient-primary shadow text-center">
                                            <i class="ni ni-curved-next opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            @include('paginas.base.rodape.rodape')
