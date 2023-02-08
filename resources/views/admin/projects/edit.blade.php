@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="text-center p-2">
            <h1>Modifica progetto #{{$project->id }}</h1>
        </div>
        <form action="{{route('admin.projects.update', $project->id)}}" method="POST" enctype='multipart/form-data'>
            @method("PUT")
            @csrf

            <label class="form-label">Title: </label>
            <input type="text" name="name" class="form-control" value="{{$project->name}}">

            <label class="form-label">Description: </label>
            <input type="text" name="description" class="form-control" value="{{$project->description}}">

            <label class="form-label">Thumb: </label>
            <input type="text" name="cover_img" class="form-control" value="{{$project->cover_img}}">

            <label class="form-label">GitHub: </label>
            <input type="text" name="github_link" class="form-control" value="{{$project->github_link}}">

            <div class="mt-4">
                <button type="submit" class="btn btn-primary me-3">Salva</button>
            </div>
        </form>

        <div class="buttons-containr d-flex justify-content-center">
            <div class="mt-4">
                <a href="{{route('admin.projects.index')}}"><button class="btn btn-danger">Anulla</button></a>
            </div>
        </div>
    </div>
</div>
@endsection