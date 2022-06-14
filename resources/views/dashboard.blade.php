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
                                <a href="#!" class="btn btn-sm btn-primary">Agregar</a>
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
                                <tr>
                                    <th scope="row">
                                        Restaurant 1
                                    </th>
                                    <td>
                                        restaurant.com
                                    </td>
                                    <td>
                                        restaurant.com/menu
                                    </td>
                                    <td>
                                        +56912345678
                                    </td>
                                    <td>
                                        Esto es un restaurante
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Restaurant 1
                                    </th>
                                    <td>
                                        restaurant.com
                                    </td>
                                    <td>
                                        restaurant.com/menu
                                    </td>
                                    <td>
                                        +56912345678
                                    </td>
                                    <td>
                                        Esto es un restaurante
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Restaurant 1
                                    </th>
                                    <td>
                                        restaurant.com
                                    </td>
                                    <td>
                                        restaurant.com/menu
                                    </td>
                                    <td>
                                        +56912345678
                                    </td>
                                    <td>
                                        Esto es un restaurante
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Ver todo</a>
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
                                <tr>
                                    <th scope="row">
                                        Usuario 1
                                    </th>
                                    <td>
                                        correo@correo.com
                                    </td>
                                    <td>
                                        Descripcion generica
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Usuario 1
                                    </th>
                                    <td>
                                        correo@correo.com
                                    </td>
                                    <td>
                                        Descripcion generica
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Usuario 1
                                    </th>
                                    <td>
                                        correo@correo.com
                                    </td>
                                    <td>
                                        Descripcion generica
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                                <a href="#!" class="btn btn-sm btn-primary">Agregar</a>
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
                                <tr>
                                    <td scope="row">
                                        Santiago
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        Valparaíso
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        La Serena
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                                <a href="#!" class="btn btn-sm btn-primary">Agregar</a>
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
                                <tr>
                                    <td scope="row">
                                        RestoBar
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        Pub
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        Restaurante Gourmet
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                                <a href="#!" class="btn btn-sm btn-primary">Agregar</a>
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
                                <tr>
                                    <td scope="row">
                                        China
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        Italiana
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        Mexicana
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                                <a href="#!" class="btn btn-sm btn-primary">Agregar</a>
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
                                <tr>
                                    <td scope="row">
                                        Familiar
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        Nocturno
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        Romantico
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-info">Editar</a>
                                        <a href="#" class="badge badge-danger">Eliminar</a>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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