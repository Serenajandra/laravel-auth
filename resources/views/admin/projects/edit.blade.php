@extends('layouts.admin')
@section('content')
    <div class="container">
        <form action="{{ route('admin.projects.edit') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-goup">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
        </form>
    </div>
@endsection
