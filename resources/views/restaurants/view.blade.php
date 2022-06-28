@extends('layouts.app', ['title' => __('Restaurantes'), 'class' => 'bg-secondary'])

@section('content')
    <div class="container" style="padding-top: 5em; ">
        <div class="row">
            <div class="col">
                <div class="card border-0 shadow my-5">
                    <div class="card-header">
                        <h1 class="my-4">Restaurant
                            <small> {{ $restaurant->name }}</small>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <img class="img-fluid rounded mb-3 mb-md-0" src="{{ url($restaurant->img) }}"
                                    alt=""
                                    style=" width: 700px !important; height: 300px !important; object-fit: cover !important;">
                            </div>
                            <div class="col-md-5">
                                <p class="card-text">
                                    <span class="badge badge-primary">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ $restaurant->cities->name }}</span>
                                    <span class="badge badge-success">
                                        <i class="fas fa-dollar-sign"></i>
                                        {{ 'Gama ' . $restaurant->prices->name }}
                                    </span>
                                    <span class="badge badge-info">
                                        <i class="fas fa-utensils"></i>
                                        {{ 'Comida ' . $restaurant->foods->name }}
                                    </span>
                                    <span class="badge  badge-secondary">Ambiente
                                        {{ $restaurant->environments->name }}</span>
                                    <span class="badge badge-secondary">Local {{ $restaurant->establishments->name }}
                                    </span>
                                </p>
                                <h3>{{ $restaurant->name }}</h3>
                                <div class="d-flex justify-content-start py-1">
                                    @for ($i = 0; $i < round($restaurant->evaluations->avg('score'), 0); $i++)
                                        <span class="fa fa-star text-primary"></span>
                                    @endfor
                                    @for ($i = round($restaurant->evaluations->avg('score'), 0); $i < 5; $i++)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                </div>
                                <p class="card-text">{{ $restaurant->description }}</p>

                                <a class="btn btn-sm btn-warning" href="{{ url($restaurant->web) }}" target="_blank">
                                    <i class="fas fa-globe"></i>
                                    Visitar web
                                </a>
                                <a class="btn btn-sm btn-warning" href="{{ url($restaurant->menu) }}" target="_blank">
                                    <i class="fas fa-utensils"></i>
                                    Ver menú
                                </a>
                            </div>
                        </div>



                    </div>

                    <div class="card-footer p-5">
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow my-5">
                    <div class="card-header">
                        <h1 class="my-4">Opiniones
                            <small>({{ $evaluations->count() }}) </small>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            @foreach ($evaluations as $evaluation)
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-start align-items-center">
                                                <img class="rounded-circle shadow-1-strong me-3"
                                                    src="{{ url('img/profile.png') }}" alt="avatar" width="60"
                                                    height="60" />
                                                <div class="p-3">
                                                    <h6 class="fw-bold text-primary mb-1">{{ $evaluation->users->name }}
                                                    </h6>
                                                    <p class="text-muted small mb-0">
                                                        Compartido - {{ $evaluation->created_at->format('M Y') }}
                                                    </p>
                                                    <div class="small d-flex justify-content-start">
                                                        @for ($i = 0; $i < $evaluation->score; $i++)
                                                            <span class="fa fa-star text-primary"></span>
                                                        @endfor
                                                        @for ($i = $evaluation->score; $i < 5; $i++)
                                                            <span class="fa fa-star"></span>
                                                        @endfor
                                                    </div>
                                                    @if (Auth::check())
                                                        @if (Auth::user()->id == $evaluation->user_id)
                                                            <div class="small py-2">
                                                                <form
                                                                    action="{{ route('evaluations.destroy', $evaluation) }}"
                                                                    method="post" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-sm badge-secondary">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                        Borrar
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        @endif
                                                    @endif


                                                </div>

                                            </div>
                                            <p class="mt-3 mb-4 pb-2">
                                                {{ $evaluation->review }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            @if (Auth::check())
                                <form method="POST" action="{{ route('evaluations.store') }}">
                                    @csrf
                                    <div class="d-flex flex-start w-100  p-2">
                                        <h3 class="fw-bold text-primary">Escribir comentario</h3>
                                    </div>
                                    <div class="d-flex flex-start w-100  p-2">
                                        <div class="form-outline w-100  p-2">
                                            <label class="form-label" for="textAreaExample">Calificación</label>
                                            <select id="rating" placeholder="Ingrese calificación" autocomplete="off"
                                                name="score">
                                                <option value="" selected disabled>Ingrese calificación</option>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}">{{ $i . ' puntos' }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <input name="restaurant_id" type="hidden" value="{{ $restaurant->id }}">
                                    <input name="user_id" type="hidden" value="{{ Auth::user()->id }}">
                                    <div class="d-flex flex-start w-100  p-2">
                                        <div class="form-outline w-100  p-2">
                                            <label class="form-label" for="textAreaExample">Comentario</label>
                                            <textarea class="form-control" id="textAreaExample" rows="4" placeholder="Ingrese comentario" name="review"></textarea>
                                        </div>
                                    </div>
                                    <div class="float-end mt-2 pt-1">
                                        <button type="submit" class="btn btn-primary btn-sm">Publicar</button>
                                    </div>
                                </form>
                            @else
                            <a href="{{ url('login') }}">
                                <p class="card-text">Para dejar tu comentario inicia sesión.</p>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            new TomSelect("#rating", {
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
        });
    </script>
@endpush
