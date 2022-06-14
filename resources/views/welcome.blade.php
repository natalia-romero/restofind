@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Bienvenido a RestoFind') }}</h1>
                        <p class="text-white">{{ __('¡Encuentra tu restaurant perfecto!') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt--10 pb-5">
            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p> --}}
                    <div class="container">
                        <div class="container">
                            <div class="row row-cols-4">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="" selected disabled>Tipo de local</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="" selected disabled>Tipo de comida</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="" selected disabled>Ambiente</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="" selected disabled>Gama de precio</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row justify-content-md-center">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Buscar restaurantes más cercanos</label>
                                  </div>
                            </div> --}}
                        </div>
                        {{-- <div class="row row-cols-4">
                            <div class="col-sm">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option value="" selected disabled>Tipo de local</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option value="" selected disabled>Tipo de comida</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option value="" selected disabled>Ambiente</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="" selected disabled>Gama de precio</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <hr class="my-3">
                        <a href="#" class="btn btn-primary">Aplicar Filtros</a>

                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
    @endsection
