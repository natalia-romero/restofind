@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Restaurantes</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('restaurants.create') }}" class="btn btn-sm btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Web</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Contacto</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($restaurants as $restaurant)
                                    <tr>
                                        <th scope="row">
                                            {{ $restaurant->name }}
                                        </th>
                                        <td>
                                            {{ $restaurant->web }}
                                        </td>
                                        <td>
                                            {{ $restaurant->menu }}
                                        </td>
                                        <td>
                                            {{ $restaurant->phone_number }}
                                        </td>
                                        <td>
                                            {{ Str::limit($restaurant->description, 20) }}
                                        </td>
                                        <td>
                                            <a href="{{ route('restaurants.edit', $restaurant) }}"
                                                class="btn btn-sm badge-info"> <i class="far fa-edit"></i>
                                                Editar</a>
                                            <form action="{{ route('restaurants.destroy', $restaurant) }}" method="post"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm badge-danger">
                                                    <i class="fas fa-trash"></i>
                                                    Borrar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <div class="pagination justify-content-center">
                            {{ $restaurants->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Locales</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('establishments.create') }}" class="btn btn-sm btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($establishments as $establishment)
                                    <tr>
                                        <td scope="row">
                                            {{ $establishment->name }}
                                        </td>
                                        <td>
                                            <a href="{{ route('establishments.edit', $establishment) }}"
                                                class="btn btn-sm badge-info"> <i class="far fa-edit"></i>
                                                Editar</a>
                                            <form action="{{ route('establishments.destroy', $establishment) }}"
                                                method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm badge-danger">
                                                    <i class="fas fa-trash"></i>
                                                    Borrar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <div class="pagination justify-content-center">
                            {{ $establishments->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Tipo de comida</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('foods.create') }}" class="btn btn-sm btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($foods as $food)
                                    <tr>
                                        <td scope="row">
                                            {{ $food->name }}
                                        </td>
                                        <td>
                                            <a href="{{ route('foods.edit', $food) }}" class="btn btn-sm badge-info"> <i
                                                    class="far fa-edit"></i>
                                                Editar</a>
                                            <form action="{{ route('foods.destroy', $food) }}" method="post"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm badge-danger">
                                                    <i class="fas fa-trash"></i>
                                                    Borrar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <div class="pagination justify-content-center">
                            {{ $foods->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Ambiente</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('environments.create') }}" class="btn btn-sm btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($environments as $environment)
                                    <tr>
                                        <td scope="row">
                                            {{ $environment->name }}
                                        </td>
                                        <td>
                                            <a href="{{ route('environments.edit', $environment) }}"
                                                class="btn btn-sm badge-info"> <i class="far fa-edit"></i>
                                                Editar</a>
                                            <form action="{{ route('environments.destroy', $environment) }}"
                                                method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm badge-danger">
                                                    <i class="fas fa-trash"></i>
                                                    Borrar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <div class="pagination justify-content-center">
                            {{ $environments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Usuarios</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">
                                            {{ $user->name }}
                                        </th>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ Str::limit($user->description, 20) }}
                                        </td>
                                        <td>
                                            @if (Auth::user()->id != $user->id)
                                                <form action="{{ route('users.destroy', $user) }}" method="post"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm badge-danger">
                                                        <i class="fas fa-trash"></i>
                                                        Borrar
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <div class="pagination justify-content-center">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Ciudades</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('cities.create') }}" class="btn btn-sm btn-primary">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $city)
                                    <tr>
                                        <td scope="row">
                                            {{ $city->name }}
                                        </td>
                                        <td>
                                            <a href="{{ route('cities.edit', $city) }}" class="btn btn-sm badge-info">
                                                <i class="far fa-edit"></i>
                                                Editar</a>
                                            <form action="{{ route('cities.destroy', $city) }}" method="post"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm badge-danger">
                                                    <i class="fas fa-trash"></i>
                                                    Borrar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <div class="pagination justify-content-center">
                            {{ $cities->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
