@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h1 class="mb-0">Progetto N.{{ $project->id }}</h1>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5 class="text-primary">Slug</h5>
                        <p class="border p-3 rounded bg-light">{{ $project->slug }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-primary">Nome del progetto</h5>
                        <p class="border p-3 rounded bg-light">{{ $project->name }}</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5 class="text-primary">Nome del cliente</h5>
                        <p class="border p-3 rounded bg-light">{{ $project->client_name }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-primary">Data di creazione</h5>
                        <p class="border p-3 rounded bg-light">{{ $project->created_at}}</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5 class="text-primary">Data di aggiornamento</h5>
                        <p class="border p-3 rounded bg-light">{{ $project->updated_at}}</p>
                    </div>
                    <div class="col-md-12">
                        <h5 class="text-primary">Riassunto</h5>
                        <p class="border p-3 rounded bg-light">{{ $project->summary }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection