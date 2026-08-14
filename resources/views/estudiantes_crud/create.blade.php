@extends('layouts.admin')

@section('title', 'Nuevo Estudiante')

@section('titulo', 'Nuevo Estudiante')

@section('content')

<div class="card">

    <div class="card-header">

        <h3 class="card-title">

            <i class="fas fa-user-plus text-primary"></i>

            Registrar Estudiante

        </h3>

    </div>

    <form action="{{ route('estudiantes.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="card-body">

            <div class="row">

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Nombre</label>

                        <input
                            type="text"
                            name="nombre"
                            class="form-control"
                            placeholder="Ingrese el nombre"
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
                            placeholder="Ingrese el apellido"
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
                            placeholder="Ingrese el DNI"
                            required>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">

                        <label>Fecha de nacimiento</label>

                        <input
                            type="date"
                            name="fecha_nacimiento"
                            class="form-control">

                    </div>

                </div>

            </div>

            <div class="form-group">

                <label>Foto de perfil</label>

                <input
                    type="file"
                    name="foto_perfil"
                    class="form-control">

            </div>

        </div>

        <div class="card-footer">

            <button type="submit" class="btn btn-primary">

                <i class="fas fa-save"></i>

                Guardar

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