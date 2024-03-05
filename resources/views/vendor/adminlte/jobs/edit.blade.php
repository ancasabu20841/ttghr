@extends('adminlte::page')

@section('title', 'TTG RH')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Empleo</h1>

@stop
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Editar Empleo') }} {{ $job->title }}</h3>
        </div>

        <form action="{{ route('jobs.update', $job->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Titulo:</label>
                    <input type="text"  class="form-control" name="title" value="{{ $job->title }}">
                </div>
                <div class="form-group">
                    <label>Descripción:</label>
                    <textarea name="description" class="form-control" >{{ $job->description }}</textarea>
                </div>
                <div class="form-group">
                    <label>Disponible:</label>
                     <input type="checkbox" name="available" value="1" {{ $job->available ? 'checked' : '' }}>
                </div>

                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
@stop

