@extends('layouts.admin')

@section('title', 'Editar Estudiante')

@section('titulo', 'Editar Estudiante')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            <i class="fas fa-user-edit text-warning"></i>

            Editar Estudiante

        </h3>

    </div>

    <form action="{{ route('estudiantes.update', $estudiante->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="card-body">

            @if($estudiante->foto_perfil)

                <div class="text-center mb-4">

                    <img src="{{ asset('storage/'.$estudiante->foto_perfil) }}"
                         width="120"
                         height="120"
                         class="rounded-circle border shadow">

                    <br>

                    <small class="text-muted">

                        Foto actual

                    </small>

                </div>

            @endif

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Nombre</label>

                        <input
                            type="text"
                            name="nombre"
                            class="form-control"
                            value="{{ $estudiante->nombre }}"
                            required>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Apellido</label>

                        <input
                            type="text"
                            name="apellido"
                            class="form-control"
                            value="{{ $estudiante->apellido }}"
                            required>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label>DNI</label>

                        <input
                            type="text"
                            name="dni"
                            class="form-control"
                            value="{{ $estudiante->dni }}"
                            required>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Fecha de nacimiento</label>

                        <input
                            type="date"
                            name="fecha_nacimiento"
                            class="form-control"
                            value="{{ $estudiante->fecha_nacimiento }}">

                    </div>

                </div>

            </div>

            <div class="form-group">

                <label>Cambiar foto</label>

                <input
                    type="file"
                    name="foto_perfil"
                    class="form-control">

                <small class="text-muted">

                    Dejá este campo vacío si querés conservar la foto actual.

                </small>

            </div>

        </div>

        <div class="card-footer">

            <button type="submit" class="btn btn-warning">

                <i class="fas fa-save"></i>

                Actualizar

            </button>

            <a href="{{ route('estudiantes.index') }}"
               class="btn btn-secondary">

                <i class="fas fa-arrow-left"></i>

                Volver

            </a>

        </div>

    </form>

</div>

@endsection