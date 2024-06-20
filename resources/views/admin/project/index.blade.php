@extends('layouts.admin')

@section('content')
    <div class="mt-4">
        <h2>Lista Proggetti</h2>

        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

        <table class="table">
            <thead class="striped">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Slug</th>
                <th scope="col">Dettagli</th>
                <th scope="col">Mod</th>
                <th scope="col">Canc</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projectArray as $project)
                    <tr>
                        <th scope="row">{{ $project->id}}</th>
                        <td>{{ $project->title}}</td>
                        <td>{{ $project->description}}</td>
                        <td>{{ $project->slug}}</td>
                        <td> <a href="{{route('admin.project.show', $project)}}"><i class="fa-solid fa-ellipsis-vertical fa-2xl"></i></a></td>
                        <td><a class="btn btn-warning" href="{{route('admin.project.edit', $project )}}"><i class="fa-solid fa-marker fa-lg"></i></a></td>
                        <td>@include('admin.project.partials.delete-project-form')</td>
                    </tr>
                @endforeach
            </tbody>
    </div>
    @include('admin.project.partials.delete-project-modal')
@endsection