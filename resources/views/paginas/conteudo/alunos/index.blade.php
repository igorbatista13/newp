{{-- ALUNOS --}}
@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')

<div class="card shadow-lg mx-4 card-profile">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="https://yata.s3-object.locaweb.com.br/b1da36362690140b82f2615336181d34f58abf5a5fadf78cb182f5aafb43242e"
                        alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h-100">
                    <h5 class="mb-1">
                        Alunos </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                    <h4 class="font-weight-bolder"><span class="small"></span>
                        <span class="badge bg-success" id="state1" >Cadastrados</span>
                    </h4>

                    </p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav  nav-fill p-1" role="tablist">
                        <li class="nav-item">


                            @include('/paginas/conteudo/alunos/modal/create')


                        </li>


                        <li class="nav-item">
                            <div class="input-group">
                                <span class="input-group-text text-body">
                                    <i class="fas fa-search" aria-hidden="true"></i> </span>
                                <input type="text" id="search" name="search" class="form-control"
                                    placeholder="Código ou Nome do produto">
                                <button type="submit" class="btn app-btn-secondary">Procurar</button>

                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@include('paginas.base.rodape.rodape')
