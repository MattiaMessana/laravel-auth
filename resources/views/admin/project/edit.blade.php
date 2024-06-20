@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        <h2>Modifica Proggetto</h2>
        <form action="{{ route('admin.project.update' , $project )}}" method="POST">
            @csrf
            @method('PUT')

            <div class="my-3">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{ old('title') ?? $project->title }}" class="form-control 
                @error('title')
                    is-invalid
                @enderror" 
                type="text" 
                name="title" id="title">
                @error('title')
                    <div id="title-error" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="my-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description')
                    is-invalid
                @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') ?? $project->description }}</textarea>
                @error('description')
                <div id="description-error" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk fa-lg"></i></button>
        </form>
    </div>
@endsection