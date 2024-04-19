{{-- ALUNOS --}}
@include('paginas.base.topo.topo')
@include('paginas.mensagens.mensagem')




<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-lg">
                <img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/shapes/pattern-left.png"
                    alt="pattern-lines"
                    class="position-absolute overflow-hidden opacity-4 start-0 top-0 h-100 border-radius-xl">
                <img src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/shapes/pattern-right.png"
                    alt="pattern-lines"
                    class="position-absolute overflow-hidden opacity-4 end-0 top-0 h-100 border-radius-xl">
                <div class="card-body px-5 z-index-1 bg-cover">
                    <div class="row">
                        <div class="col-lg-3 col-12 my-auto">
                            <h4 class="text-body opacity-9 text-center">
                                <h1> {{ $titulo }} </h1>
                            </h4>
                            <hr class="horizontal light mt-1 mb-3">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <h6 class="mb-0 text-body opacity-7">Distance</h6>
                                    <h3 class="text-body">145 <small class="text-sm align-top">Km</small></h3>
                                </div>
                                <div class="ms-lg-6 ms-4 text-center">
                                    <h6 class="mb-0 text-body opacity-7">Average Energy</h6>
                                    <h3 class="text-body">300 <small class="text-sm align-top">Kw</small></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <img class="w-75 w-lg-100 mt-n7 mt-lg-n8 d-none d-md-block"
                                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/tesla.png"
                                alt="car image">
                            <div class="d-flex align-items-center">
                                <h4 class="text-body opacity-7 ms-0 ms-md-auto">Available Range</h4>
                                <h2 class="text-body ms-2 me-auto">47<small class="text-sm align-top"> %</small></h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 my-auto">
                            <h4 class="text-body opacity-9">Nearest Charger</h4>
                            <hr class="horizontal light mt-1 mb-3">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0 text-body">Miclan, DW</h6>
                                    <h6 class="mb-0 text-body">891 Limarenda road</h6>
                                </div>
                                <div class="ms-lg-6 ms-4">
                                    <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 py-0">
                                        <i class="ni ni-map-big" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card bg-primary">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Today's
                                    Trip</p>
                                <h5 class="text-white font-weight-bolder mb-0">
                                    145 Km
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-white shadow text-center rounded-circle">
                                <i class="ni ni-money-coins text-dark text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-4 mt-md-0">
            <div class="card bg-primary">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Battery
                                    Health</p>
                                <h5 class="text-white font-weight-bolder mb-0">
                                    99 %
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-white shadow text-center rounded-circle">
                                <i class="ni ni-controller text-dark text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0">
            <div class="card bg-primary">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Average
                                    Speed</p>
                                <h5 class="text-white font-weight-bolder mb-0">
                                    56 Km/h
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-white shadow text-center rounded-circle">
                                <i class="ni ni-delivery-fast text-dark text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0">
            <div class="card bg-primary">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Music
                                    Volume</p>
                                <h5 class="text-white font-weight-bolder mb-0">
                                    15/100
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-white shadow text-center rounded-circle">
                                <i class="ni ni-note-03 text-dark text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-lg">
                <div class="card-header bg-transparent">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text text-body bg-transparent border-0">
                                    <i class="ni ni-zoom-split-in text-lg" aria-hidden="true"></i>
                                </span>
                                <input type="text" class="form-control bg-transparent border-0"
                                    placeholder="Search anything..." onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 my-auto ms-auto">
                            <div class="d-flex align-items-center">
                                <i class="ni ni-headphones text-lg text-body ms-auto" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Headphones connected"></i>
                                <i class="ni ni-button-play text-lg text-body ms-3" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Music is playing"></i>
                                <i class="ni ni-button-power text-lg text-body ms-3" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Start radio"></i>
                                <i class="ni ni-watch-time text-lg text-body ms-3" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Time tracker"></i>
                                <h4 class="text-body mb-1 ms-4">10:45</h4>
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal light">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="d-flex align-items-center position-relative">
                                <h3 class="text-body mb-1">11:13</h3>
                                <p class="text-body opacity-8 mb-1 ms-3">Estimated arrival time</p>
                                <hr class="vertical light mt-0">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="d-flex align-items-center position-relative">
                                <h3 class="text-body mb-1 ms-md-auto">2.4<small class="align-top text-sm">Km</small>
                                </h3>
                                <p class="text-body opacity-8 mb-1 ms-3 me-auto">Turn right in 2.4 miles</p>
                                <hr class="vertical light mt-0">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 ms-lg-auto">
                            <div class="d-flex align-items-center">
                                <h3 class="text-body mb-1 ms-lg-auto">6.3<small class="align-top text-sm">Km</small>
                                </h3>
                                <p class="text-body opacity-8 mb-1 ms-3">Distance to Creative Tim</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 py-0">
                    <div id="mapid" class="leaflet"></div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="d-flex align-items-center">
                                <div class="position-relative">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/img/bruce-mars.jpg" alt="kal"
                                            class="border-radius-xl rounded-circle shadow">
                                    </div>
                                    <img class="position-absolute w-60 end-0 bottom-0 me-n3 mb-0"
                                        src="../../assets/img/small-logos/logo-spotify.svg" alt="spotify logo">
                                </div>
                                <div class="px-3">
                                    <p class="text-body text-sm font-weight-bold mb-0">
                                        You're Mines Still (feat Drake)
                                    </p>
                                    <p class="text-body text-xs mb-2 opacity-8">
                                        Yung Bleu - Hip-Hop
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 my-auto text-center mt-3 mt-lg-0">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-dark mb-0 ms-auto">
                                    <i class="ni ni-button-play top-0 rotate-180" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-lg btn-icon-only btn-rounded btn-outline-dark mb-0 ms-4">
                                    <i class="ni ni-button-pause top-0" aria-hidden="true"></i>
                                </button>
                                <button
                                    class="btn btn-lg btn-icon-only btn-rounded btn-outline-dark mb-0 ms-4 me-auto">
                                    <i class="ni ni-button-play top-0" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-8 my-auto">
                            <p class="text-body mb-2">Volume</p>
                            <div id="sliderRegular"></div>
                        </div>
                        <div class="col-lg-1 col-md-6 col-4 my-auto ms-auto">
                            <i class="ni ni-bullet-list-67 text-body mt-3 ms-auto" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Hide menu"></i>
                            <i class="ni ni-chat-round text-body ms-3 mt-3" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Track messages"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('paginas.base.rodape.rodape')
