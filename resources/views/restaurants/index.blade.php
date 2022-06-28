@extends('layouts.app', ['title' => __('Restaurantes'), 'class' => 'bg-secondary'])

@section('content')
    <div class="container" style="padding-top: 5em; ">
        <div class="row">
            <div class="col-12 order-first col-xl-3 order-xl-last">
                <div class="card my-5">
                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Filtros</h5>
                        <hr>
                        <form method="get" action="{{ route('restaurants.index') }}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control js-example-disabled-results"
                                                id="exampleFormControlSelect1" name="establishment">
                                                <option value="" selected disabled>Tipo de local</option>
                                                @foreach ($establishments as $establishment)
                                                    <option value="{{ $establishment->id }}">
                                                        {{ $establishment->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1" name="food">
                                                <option value="" selected disabled>Tipo de comida</option>
                                                @foreach ($foods as $food)
                                                    <option value="{{ $food->id }}">{{ $food->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1" name="environment">
                                                <option value="" selected disabled>Ambiente</option>
                                                @foreach ($environments as $environment)
                                                    <option value="{{ $environment->id }}">{{ $environment->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1" name="price">
                                                <option value="" selected disabled>Gama de precio</option>
                                                @foreach ($prices as $price)
                                                    <option value="{{ $price->id }}">{{ $price->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1" name="city">
                                                <option value="" selected disabled>Ciudad</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <select class="form-control" id="exampleFormControlSelect1" name="order">
                                                <option value="" selected disabled>Ordenar por..</option>
                                                <option value="1">Calificación más alta</option>
                                                <option value="2">Calificación más baja</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid d-flex justify-content-center">
                                <div class="input-group-append">
                                    <button class="btn  btn-primary" type="submit">
                                        Aplicar Filtros
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-9">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5">
                        <h1 class="my-4">Restaurantes
                            {{-- <small>Secondary Text</small> --}}
                        </h1>
                        <div class="row">
                            @foreach ($restaurants as $restaurant)
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="card h-100">
                                        <a href="{{ route('restaurants.show', $restaurant) }}"><img class="card-img-top"
                                                src="{{ $restaurant->img }}" alt=""
                                                style=" width: 100%; height: 10em; object-fit: cover;"></a>
                                        <div class="card-body">
                                            <h4>
                                                <a
                                                    href="{{ route('restaurants.show', $restaurant) }}">{{ $restaurant->name }}</a>
                                            </h4>
                                            <div class="d-flex justify-content-start">
                                                @for ($i = 0; $i < round($restaurant->evaluations->avg('score'), 0); $i++)
                                                    <span class="fa fa-star text-primary"></span>
                                                @endfor
                                                @for ($i = round($restaurant->evaluations->avg('score'), 0); $i < 5; $i++)
                                                    <span class="fa fa-star"></span>
                                                @endfor
                                            </div>
                                            <p class="card-text py-1">{{ Str::limit($restaurant->description, 50) }}</p>
                                            <p class="card-text">
                                                <span class="badge badge-primary">{{ $restaurant->cities->name }}</span>
                                                <span
                                                    class="badge badge-success">{{ 'Gama ' . $restaurant->prices->name }}</span>
                                                <span
                                                    class="badge badge-info">{{ 'Comida ' . $restaurant->foods->name }}</span>
                                            </p>
                                            <a type="button" class="btn btn-outline-primary btn-sm"
                                                href="{{ route('restaurants.show', $restaurant) }}">
                                                Ver detalles
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- /.row -->

                    </div>
                    <div class="card-footer p-5">
                        <!-- Pagination -->
                        <div class="pagination justify-content-center">
                            {{ $restaurants->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
