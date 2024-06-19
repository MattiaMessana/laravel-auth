@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mt-4">Inserisci un nuovo proggetto</h2>

        <form action="{{ route('admin.project.store')}}" method="POST">
            @csrf

            <div class="my-3">
                <label for="title" class="form-label">Titolo</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="my-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div class="my-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug">
            </div>

            <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk fa-lg"></i></button>
        </form>
    </div>

@endsection