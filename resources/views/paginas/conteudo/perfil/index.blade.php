@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

<div class="container-fluid my-5 py-2">
    <div class="row mb-5">
        <div class="col-lg-3">
            <div class="card position-sticky top-1">
                <ul class="nav flex-column bg-white border-radius-lg p-3">
                    <li class="nav-item">
                        <a class="nav-link text-body d-flex align-items-center" data-scroll href="#profile">
                            <i class="ni ni-spaceship me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Perfil</span>
                        </a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="nav-link text-body d-flex align-items-center" data-scroll href="#basic-info">
                            <i class="ni ni-books me-2 text-dark opacity-6"></i>
                            <span class="text-sm">informações básicas</span>
                        </a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="nav-link text-body d-flex align-items-center" data-scroll href="#password">
                            <i class="ni ni-atom me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Social</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item pt-2">
                        <a class="nav-link text-body d-flex align-items-center" data-scroll href="#2fa">
                            <i class="ni ni-ui-04 me-2 text-dark opacity-6"></i>
                            <span class="text-sm">2FA</span>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item pt-2">
                        <a class="nav-link text-body d-flex align-items-center" data-scroll href="#accounts">
                            <i class="ni ni-badge me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Accounts</span>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item pt-2">
                        <a class="nav-link text-body d-flex align-items-center" data-scroll href="#notifications">
                            <i class="ni ni-bell-55 me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="nav-link text-body d-flex align-items-center" data-scroll href="#sessions">
                            <i class="ni ni-watch-time me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Sessions</span>
                        </a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="nav-link text-body d-flex align-items-center" data-scroll href="#delete">
                            <i class="ni ni-settings-gear-65 me-2 text-dark opacity-6"></i>
                            <span class="text-sm">Delete Account</span>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="col-lg-9 mt-lg-0 mt-4">

            <div class="card card-body" id="profile">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-auto col-4">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../../../assets/img/team-3.jpg" alt="bruce"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-sm-auto col-8 my-auto">
                        <div class="h-100">
                            <h5 class="mb-1 font-weight-bolder">
                                {{ Auth::user()->name }}
                             </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                CEO / Co-Founder
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                        <label class="form-check-label mb-0">
                            <small id="profileVisibility">
                                Switch to invisible
                            </small>
                        </label>
                        <div class="form-check form-switch ms-2">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked
                                onchange="visible()">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4" id="basic-info">
                <div class="card-header">
                    <h5>Informações básicas</h5>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Nome</label>
                            <div class="input-group">
                                {!! Form::text('Nome', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Sobrenome</label>
                            <div class="input-group">
                                {!! Form::text('Sobrenome', null, ['class' => 'form-control']) !!}


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <label class="form-label mt-4">Gênero</label>
                            <select class="form-control" name="Sexo" id="Sexo">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-5 col-5">
                                    <label class="form-label mt-4">Data nascimento</label>
                                    {!! Form::date('Data_Nascimento', null, ['class' => 'form-control']) !!}

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <label class="form-label mt-4">E-mail</label>
                            <div class="input-group">
                                {!! Form::email('Email', null, ['class' => 'form-control']) !!}


                            </div>
                        </div>
                        {{-- <div class="col-6">
                            <label class="form-label mt-4">Confirmation Email</label>
                            <div class="input-group">
                                <input id="confirmation" name="confirmation" class="form-control" type="email"
                                    placeholder="example@email.com">
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <label class="form-label mt-4">Estado</label>
                            <div class="input-group">
                                <input id="location" name="Estado" class="form-control" type="text"
                                    placeholder="Sydney, A">
                            </div>
                        </div>
                        <div class="col-4">
                            <label class="form-label mt-4">Cidade</label>
                            <div class="input-group">
                                {!! Form::text('Cidade', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-4">Telefone</label>
                            <div class="input-group">
                                {!! Form::text('Telefone', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-6 align-self-center">
                            <label class="form-label mt-4">Language</label>
                            <select class="form-control" name="choices-language" id="choices-language">
                                <option value="English">English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label mt-4">Skills</label>
                            <input class="form-control" id="choices-skills" type="text"
                                value="vuejs, angular, react" placeholder="Enter something" />
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="card mt-4" id="password">
                <div class="card-header">
                    <h5>Social</h5>
                </div>
                <div class="card-body pt-0">
                    <label class="form-label">Facebook</label>
                    <div class="form-group">
                        {!! Form::text('Facebook', null, ['class' => 'form-control']) !!}
                    </div>
                    <label class="form-label">Instagram</label>
                    <div class="form-group">
                        {!! Form::text('Instagram', null, ['class' => 'form-control']) !!}
                    </div>
                    <label class="form-label">Linkedin</label>
                    <div class="form-group">
                        {!! Form::text('Linkedin', null, ['class' => 'form-control']) !!}
                    </div>
                    <label class="form-label">Site</label>
                    <div class="form-group">
                        {!! Form::text('Site', null, ['class' => 'form-control']) !!}
                    </div>
                    <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Salvar</button>
                </div>
            </div>





            <div class="card mt-4" id="notifications">
                <div class="card-header">
                    <h5>Notifications</h5>
                    <p class="text-sm">Choose how you receive notifications. These notification settings apply to the
                        things you’re watching.</p>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="ps-1" colspan="4">
                                        <p class="mb-0">Activity</p>
                                    </th>
                                    <th class="text-center">
                                        <p class="mb-0">Email</p>
                                    </th>
                                    <th class="text-center">
                                        <p class="mb-0">Push</p>
                                    </th>
                                    <th class="text-center">
                                        <p class="mb-0">SMS</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-1" colspan="4">
                                        <div class="my-auto">
                                            <span class="text-dark d-block text-sm">Mentions</span>
                                            <span class="text-xs font-weight-normal">Notify when another user mentions
                                                you in a comment</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" checked type="checkbox"
                                                id="flexSwitchCheckDefault11">
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckDefault12">
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckDefault13">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-1" colspan="4">
                                        <div class="my-auto">
                                            <span class="text-dark d-block text-sm">Comments</span>
                                            <span class="text-xs font-weight-normal">Notify when another user comments
                                                your item.</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" checked type="checkbox"
                                                id="flexSwitchCheckDefault14">
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" checked type="checkbox"
                                                id="flexSwitchCheckDefault15">
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckDefault16">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-1" colspan="4">
                                        <div class="my-auto">
                                            <span class="text-dark d-block text-sm">Follows</span>
                                            <span class="text-xs font-weight-normal">Notify when another user follows
                                                you.</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckDefault17">
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" checked type="checkbox"
                                                id="flexSwitchCheckDefault18">
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" type="checkbox"
                                                id="flexSwitchCheckDefault19">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-1" colspan="4">
                                        <div class="my-auto">
                                            <p class="text-sm mb-0">Log in from a new device</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" checked type="checkbox"
                                                id="flexSwitchCheckDefault20">
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" checked type="checkbox"
                                                id="flexSwitchCheckDefault21">
                                        </div>
                                    </td>
                                    <td>
                                        <div
                                            class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                                            <input class="form-check-input" checked type="checkbox"
                                                id="flexSwitchCheckDefault22">
                                        </div>
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
