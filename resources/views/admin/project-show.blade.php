@extends('layouts.admin')

@section('content')
    <div class="container my-3">
        <h2 class="mb-3">Dettaglio Proggetto</h2>
        <ul>
            <li class="mb-3"><strong>Titolo:</strong> {{$project->title}}</li>
            <li class="mb-3"><strong>Descrizione:</strong> {{$project->description}}</li>
            <li class="mb-3"><strong>Slug:</strong> {{$project->slug}}</li>
        </ul>
    </div>
@endsection