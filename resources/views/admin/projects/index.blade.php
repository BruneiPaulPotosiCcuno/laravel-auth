@extends('layouts.admin')

@section('content')
    <h1>Projects</h1>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Listato dei projects</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">CLIENT NAME</th>
                            <th scope="col">CREATED AT</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->client_name }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>
                                <a href="{{route('admin.projects.show', ['project'=> $project->id]) }}" class="btn btn-info">Apri</a>
                                <a href="{{route('admin.projects.edit', ['project'=> $project->id]) }}" class="btn btn-primary">Modica</a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
