@extends('adminlte::page')

@section('title', 'TTG RH')

@section('content_header')
    <h1 class="m-0 text-dark">Lista de Empleos</h1>
    <div class="col-sm-4">
        <a href="{{ route('jobs.create') }}" class="btn btn-primary">Nueva Oferta</a>
    </div>
@stop
@section('content')
<div class="container">
    <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                        <th scope="col">Tiulo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->description }}</td>
                    <td>{{ $job->available ? 'Disponible' : 'No Disponible' }}</td>
                    <td>

                        <a href="{{ route('jobs.edit', $job->id) }}" class="btn  btn-sm btn-primary ">Edit</a>
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  class="btn  btn-sm btn-danger " type="submit">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $jobs->links() }}

    </div>
@stop

