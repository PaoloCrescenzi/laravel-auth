@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="list-unstyled">
        <li class="media">
            <img class="mr-3 img-thumbnail rounded" src="{{ asset('/storage/' . $project->cover_img)}}">
            <div class="media-body">
                <h1 class="mt-0 mb-1">Progetto N.{{$project->id}}</h1>
                <p class="card-text">Descrizione: {{$project->description}}</p>
                <p class="card-text">Link: {{$project->github_link}}</p>
            </div>
        </li>
    </ul>
    <div class="text-center">
        <a href="{{route('admin.projects.index')}}" class="btn btn-primary"><i class="fa-solid fa-house"></i></a>
    </div>
</div>
@endsection