@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card border-0 rounded-3 shadow-lg">
            <div class="card-header bg-primary text-white py-3">
                <h1 class="mb-0">Modifica Progetto: {{ $project->name }}</h1>
            </div>
            <div class="card-body">
                <form  action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del Progetto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="client_name" class="form-label">Nome del Cliente</label>
                        <input type="text" class="form-control" id="client_name" name="client_name" value="{{ $project->client_name }}">
                    </div>

                    <div class="mb-3">
                        <label for="summary" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="summary" name="summary" rows="10">{{ $project->summary }}</textarea>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg">Salva Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
