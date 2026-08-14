@extends('layouts.admin')

@section('title', 'Estudiantes')

@section('titulo', 'Gestión de Estudiantes')

@section('content')

<div class="card shadow">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h3 class="card-title">
            <i class="fas fa-user-graduate text-primary"></i>
            Listado de Estudiantes
        </h3>

        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            Nuevo Estudiante
        </a>

    </div>

    <div class="card-body p-0">

        @if($estudiantes->count())

        <table class="table table-hover table-striped mb-0">

            <thead class="bg-dark">

                <tr>

                    <th width="90">Foto</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th width="250" class="text-center">Acciones</th>

                </tr>

            </thead>

            <tbody>

            @foreach($estudiantes as $e)

                <tr>

                    <td class="align-middle">

                        @if($e->foto_perfil)

                            <img src="{{ asset('storage/'.$e->foto_perfil) }}"
                                 width="55"
                                 height="55"
                                 class="rounded-circle border">

                        @else

                            <img src="https://via.placeholder.com/55"
                                 class="rounded-circle border">

                        @endif

                    </td>

                    <td class="align-middle">

                        <strong>

                            {{ $e->apellido }}, {{ $e->nombre }}

                        </strong>

                    </td>

                    <td class="align-middle">

                        {{ $e->dni }}

                    </td>

                    <td class="text-center align-middle">

                        <a href="{{ route('estudiantes.show',$e->id) }}"
                           class="btn btn-info btn-sm">

                            <i class="fas fa-eye"></i>

                        </a>

                        <a href="{{ route('estudiantes.edit',$e->id) }}"
                           class="btn btn-warning btn-sm">

                            <i class="fas fa-edit"></i>

                        </a>

                        <form action="{{ route('estudiantes.destroy',$e->id) }}"
                              method="POST"
                              class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('¿Desea eliminar este estudiante?')"
                                class="btn btn-danger btn-sm">

                                <i class="fas fa-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>

        @else

        <div class="text-center p-5">

            <i class="fas fa-user-graduate fa-4x text-secondary mb-3"></i>

            <h4>

                No existen estudiantes registrados

            </h4>

            <br>

            <a href="{{ route('estudiantes.create') }}"
               class="btn btn-primary">

                <i class="fas fa-plus"></i>

                Agregar primer estudiante

            </a>

        </div>

        @endif

    </div>

</div>

@endsection