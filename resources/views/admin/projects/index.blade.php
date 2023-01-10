@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="bg-success">Lista dei progetti</h2>
        <div class="row justify-content-center">
            <div class="col-8">
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
                                    <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}">
                                        {{-- <i class="fa-solid fa-eye"></i> --}}
                                    </a>
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
