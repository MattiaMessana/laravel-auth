@extends('layouts.admin')

@section('content')
    <div class="mt-4">
        <h2>Lista Proggetti</h2>
        <table class="table">
            <thead class="striped">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Slug</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projectArray as $project)
                    <tr>
                        <th scope="row">{{ $project->id}}</th>
                        <td>{{ $project->title}}</td>
                        <td>{{ $project->description}}</td>
                        <td>{{ $project->slug}}</td>
                    </tr>
                @endforeach
            </tbody>
    </div>
@endsection