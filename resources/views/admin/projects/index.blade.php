@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="bg-success">Lista dei progetti</h2>
        <div class="row justify-content-center">
            <div>
                <a class="btn btn-success position-absolute end-0 mx-4" href="{{ route('admin.projects.create') }}">Nuovo
                    progetto</a>
            </div>
            <div class="col-8">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('messagge') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data di creazione</th>
                            <th scope="col">Argomenti</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->created_at }}</td>
                                <td>{{ $project->subject }}</td>
                                <td>
                                    <a class="btn btn-warning"
                                        href="{{ route('admin.projects.show', $project->slug) }}">Dettagli
                                        {{-- <i class="fa-solid fa-eye"></i> --}}
                                    </a>
                                    <a class="btn btn-primary" href="">Modifica</a>
                                    <form action="{{ route('admin.projects.edit', $project->slug) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Cancella</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
