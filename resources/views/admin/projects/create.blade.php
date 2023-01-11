@extends('layouts.admin')
@section('content')
    <div class="container">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="subjects">Argomenti</label>
                <input type="text" name="subjects" id="subjects" class="form-control">
            </div>
            <div class="form-group">
                <label for="presentation">Presentazione</label>
                <input type="text" name="presentation" id="presentation" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea name="content" id="content" rows="10" class="form-control"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
