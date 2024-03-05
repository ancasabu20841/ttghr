@extends('adminlte::page')

@section('title', 'TTG RH')

@section('content_header')
    <h1 class="m-0 text-dark">Lista de Candidatos / Aplicaciones</h1>

@stop
@section('content')
<div class="container">
    @if ($applications)
    <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                        <th scope="col">Tiulo</th>
                        <th scope="col">Candidato</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">CV</th>
                        <th scope="col">Recomendaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applications as $application)
                <tr>
                    <td>{{ $application->job->title }}</td>
                    <td>{{ $application->candidate->first_name }} {{ $application->candidate->last_name }}</td>
                    <td>{{ $application->created_at }}</td>
                    <td><a href="{{ asset('storage/cv/'.$application->candidate->cv) }}" download>Download CV</a></td>
                    <td> <a href="#" class="view-references" data-candidate-id="{{ $application->candidate->id }}">Ver referencias</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $applications->links() }}
    @else
        <h1>No existen aplicaciones registradas actualmente</h1>
    @endif
    </div>


<div class="modal"  id="references-modal">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">
            <div class="modal-header">
                <h4 class="modal-title">Referencias</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <ul id="references-list">
                </ul>
            </div>
        </div>

    </div>

</div>
<script>

    var modal = document.getElementById('references-modal');
    var closeBtn = document.getElementsByClassName("close")[0];

    var viewReferenceLinks = document.querySelectorAll('.view-references');
    viewReferenceLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var candidateId = link.getAttribute('data-candidate-id');
            fetchReferences(candidateId);
            modal.style.display = "block";
        });
    });

    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function fetchReferences(candidateId) {
        fetch('https://reqres.in/api/users/'+candidateId)
            .then(response => response.json())
            .then(data => {
                var referencesList = document.getElementById('references-list');
                referencesList.innerHTML = '<li>'+ 'Nombre : '+data.data.first_name +' '+ data.data.last_name +'</li>'
                +'<li> Email:'+data.data.email+'</li>';

            })
            .catch(error => console.error('Error al obtener las referencias:', error));
    }
</script>

@stop

