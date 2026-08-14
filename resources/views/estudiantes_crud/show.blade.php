@extends('layouts.admin')

@section('title', 'Detalle del Estudiante')

@section('titulo', 'Detalle del Estudiante')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card">

            <div class="card-header">

                <h3 class="card-title">

                    <i class="fas fa-user text-info"></i>

                    Información del Estudiante

                </h3>

            </div>

            <div class="card-body">

                <div class="text-center mb-4">

                    @if($estudiante->foto_perfil)

                        <img src="{{ asset('storage/'.$estudiante->foto_perfil) }}"
                             width="140"
                             height="140"
                             class="rounded-circle border shadow">

                    @else

                        <img src="https://via.placeholder.com/140"
                             class="rounded-circle border shadow">

                    @endif

                </div>

                <table class="table table-bordered">

                    <tr>
                        <th width="35%">Nombre</th>
                        <td>{{ $estudiante->nombre }}</td>
                    </tr>

                    <tr>
                        <th>Apellido</th>
                        <td>{{ $estudiante->apellido }}</td>
                    </tr>

                    <tr>
                        <th>DNI</th>
                        <td>{{ $estudiante->dni }}</td>
                    </tr>

                    <tr>
                        <th>Fecha de nacimiento</th>
                        <td>{{ $estudiante->fecha_nacimiento }}</td>
                    </tr>

                </table>

                <hr>

                <h5 class="mb-3">

                    <i class="fas fa-book text-primary"></i>

                    Clases

                </h5>

                @if($estudiante->clases->count())

                    <ul class="list-group">

                        @foreach($estudiante->clases as $clase)

                            <li class="list-group-item">

                                <i class="fas fa-book-open text-primary mr-2"></i>

                                {{ $clase->nombre }}

                            </li>

                        @endforeach

                    </ul>

                @else

                    <div class="alert alert-info">

                        Este estudiante no tiene clases asociadas.

                    </div>

                @endif

            </div>

            <div class="card-footer">

                <a href="{{ route('estudiantes.index') }}"
                   class="btn btn-secondary">

                    <i class="fas fa-arrow-left"></i>

                    Volver

                </a>

                <a href="{{ route('estudiantes.edit', $estudiante->id) }}"
                   class="btn btn-warning">

                    <i class="fas fa-edit"></i>

                    Editar

                </a>

            </div>

        </div>

    </div>

</div>

@endsection