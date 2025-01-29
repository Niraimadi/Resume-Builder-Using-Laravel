@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Projects</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="{{route('project.update',$project)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="project_title">Project Title:</label>
            <input class="form-control" type="text" name="project_title" value="{{$project->project_title}}">               
        </div>
        
        <div class="mb-3">
            <label for="project_description">Summary:</label>
            <textarea class="form-control" name="project_description" cols="30" rows="4">
                {{$project->project_description}}    
            </textarea>
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        </form>
    </div>

@endsection