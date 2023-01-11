@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2>Modifica il progetto</h2>
        <form action="{{ route('admin.projects.edit', $project->slug) }}" method="POST">

            @csrf
            @method('PUT')
            <div class="form-goup">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
        </form>
    </div>
@endsection
