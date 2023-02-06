@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h1>Projects</h1>
        <a href="{{route('admin.projects.create')}}"><button class="btn btn-primary">Nuovo Progetto</button></a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($projects as $project)
            <div class="col">
            <div class="card">
                <img src="{{$project->cover_img}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$project->name}}</h5>
                    <p class="card-text">{{$project->description}}</p>
                    <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-primary">Modifica</a>
                    <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">Apri</a>
                    <a href="" class="btn btn-danger">Cancella</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection