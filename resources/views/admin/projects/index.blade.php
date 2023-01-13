@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="bg-light border mt-3 text-center py-3">Lista dei progetti</h2>
        <div class="row justify-content-center">
            <div class="text-end mx-4">
                <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Nuovo
                    progetto</a>
            </div>
            <div class="mt-4">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data di creazione</th>
                            <th scope="col">Argomenti</th>
                            <th scope="col" style="width: 20rem" class="text-center">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td scope="row">{{ $project->title }}</td>
                                <td>{{ $project->created_at }}</td>
                                <td>{{ $project->subject }}</td>
                                <td style="width: 20rem">
                                    <a class="btn btn-warning p-1"
                                        href="{{ route('admin.projects.show', $project->slug) }}">Dettagli
                                        {{-- <i class="fa-solid fa-eye"></i> --}}
                                    </a>
                                    <a class="btn btn-primary p-1"
                                        href="{{ route('admin.projects.edit', $project->slug) }}">Modifica</a>
                                    <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger p-1" type="submit">Cancella</button>
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
