@include('paginas.base.topo.topo')

@if (!$empresaExists)
    <div class="col-12 col-md-6 col-xl-6 mt-md-0 mt-4">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h5 class="font-weight-bolder mb-0">
                            <a class="btn btn-warning" href="minhaempresa/create"> Configurar minha empresa</a>
                        </h5>
                    </div>
                </div>
@endif

@foreach ($minhaempresa as $minhaempresas)
    <div class="col-12 col-md-6 col-xl-6 mt-md-0 mt-4">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h5 class="font-weight-bolder mb-0">
                            {{ $minhaempresas->Nome_Empresa ?? 'Não informado' }}
                        </h5>
                        <h6 class="mb-0">
                        </h6>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="{{ route('minhaempresa.edit', $minhaempresas->id) }}">
                            <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Edit Profile"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <p class="text-sm">
                    Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult
                    paths, choose the one more painful in the short term (pain avoidance is creating an illusion of
                    equality).
                </p>
                <hr class="horizontal gray-light my-4">
                <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">CNPJ:</strong>
                        &nbsp; {{ $minhaempresas->Cnpj ?? 'Não informado' }} </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">E-mail:</strong> &nbsp;
                        {{ $minhaempresas->Email ?? 'Não informado' }} </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Site:</strong> &nbsp;
                        {{ $minhaempresas->Site ?? 'Não informado' }}
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Telefone:</strong>
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

@include('paginas.base.rodape.rodape')
