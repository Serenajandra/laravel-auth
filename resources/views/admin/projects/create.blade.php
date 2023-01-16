@extends('layouts.admin')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-success">
                @foreach ($errors->all() as $error)
                    <ul>
                        <li>{{ $error }}</li>
                    </ul>
                @endforeach
            </div>
        @endif
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="subject">Argomenti</label>
                <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}">
            </div>
            <div class="form-group">
                <label for="presentation">Presentazione</label>
                <input type="text" name="presentation" id="presentation" class="form-control"
                    value="{{ old('presentation') }}">
            </div>
            <div class="form-group">
                <label for="image">immagine</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea name="content" id="content" rows="10" class="form-control" value="{{ old('title') }}"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
