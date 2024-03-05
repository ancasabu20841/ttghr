@extends('adminlte::page')

@section('title', 'TTG RH')

@section('content_header')
    <h1 class="m-0 text-dark">Agregar Nuevo Empleo</h1>

@stop

@section('content')

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('Nuevo Empleo') }}</h3>
            </div>

            <form action="{{ route('jobs.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Titulo:</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción:</label>
                        <textarea name="description" class="form-control" id="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="available">Disponible:</label>
                        <input type="checkbox" name="available" id="available" checked>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
@stop

