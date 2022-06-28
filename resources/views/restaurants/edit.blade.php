@extends('layouts.app')


@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Agregar restaurant</h3>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('restaurants.update', $restaurant) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                            id="exampleFormControlInput1" placeholder="Ingrese nombre" name="name"  value="{{old('name', $restaurant->name)}}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                        <textarea class="form-control  @error('description') is-invalid @enderror" id="exampleFormControlTextarea1"
                                            rows="3" placeholder="Ingrese descripción" name="description"">{{old('description', $restaurant->description)}}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Web</label>
                                        <input type="text" class="form-control  @error('web') is-invalid @enderror"
                                            id="exampleFormControlInput1" placeholder="Ingrese web" name="web"  value="{{old('web', $restaurant->web)}}">
                                        @error('web')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Menú</label>
                                        <input type="text" class="form-control  @error('menu') is-invalid @enderror"
                                            id="exampleFormControlInput1" placeholder="Ingrese menú link" name="menu" value="{{old('menu', $restaurant->menu)}}">
                                        @error('menu')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Número teléfono</label>
                                        <input type="text"
                                            class="form-control  @error('phone_number') is-invalid @enderror"
                                            id="exampleFormControlInput1" placeholder="Ingrese número teléfono"
                                            name="phone_number" value="{{old('phone_number', $restaurant->phone_number)}}">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
                                        <select id="select-city" placeholder="Seleccione ciudad" autocomplete="off"
                                            class=" @error('price') is-invalid @enderror" name="city_id">
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}" @selected(isset($restaurant) && $restaurant->city_id == $city->id)>{{$city->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Local</label>
                                        <select id="select-establishment" placeholder="Seleccione tipo de local" autocomplete="off"
                                            class=" @error('price') is-invalid @enderror" name="establishment_id">
                                            @foreach ($establishments as $establishment)
                                                <option value="{{ $establishment->id }}" @selected(isset($restaurant) && $restaurant->establishment_id == $establishment->id)>{{$establishment->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('establishment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Comida</label>
                                        <select id="select-food" placeholder="Seleccione tipo de comida" autocomplete="off"
                                            class=" @error('price') is-invalid @enderror" name="food_id">
                                            @foreach ($foods as $food)
                                                <option value="{{ $food->id }}"  @selected(isset($restaurant) && $restaurant->food_id == $food->id)>{{$food->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('food')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Ambiente</label>
                                        <select id="select-environment" placeholder="Seleccione tipo de ambiente" autocomplete="off"
                                            class=" @error('price') is-invalid @enderror" name="environment_id">
                                            @foreach ($environments as $environment)
                                                <option value="{{ $environment->id }}" @selected(isset($restaurant) && $restaurant->environment_id == $environment->id)>{{$environment->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('environment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Rango de precio</label>
                                        <select id="select-price" placeholder="Seleccione gama de precio" autocomplete="off"
                                            class=" @error('price') is-invalid @enderror" name="price_id">
                                            @foreach ($prices as $price)
                                                <option value="{{ $price->id }}" @selected(isset($restaurant) && $restaurant->price_id == $price->id)>{{ 'Gama ' . $price->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Imagen</label>

                                        <input type="file" class="form-control @error('img') is-invalid @enderror" 
                                            id="formFile" name="img">
                                        @error('img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <!-- /.card-body -->
                            <div class="input-group-append">
                                <button class="btn  btn-primary" type="submit">
                                    <i class="fas fa-save"></i>
                                    Guardar
                                </button>
                            </div>
                        </div>
                        @method('PATCH')
                    </form>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {


            new TomSelect("#select-city", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
            new TomSelect("#select-establishment", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
            new TomSelect("#select-environment", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
            new TomSelect("#select-food", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
            new TomSelect("#select-price", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });

        });
    </script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
