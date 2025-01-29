@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Project Details</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="/project" method="POST">
            @csrf
        <div class="mb-3">
            <label for="project_title">Project Title:</label>
            <input class="form-control" type="text" name="project_title" autofocus required>               
        </div>
        
        <div class="mb-3">
            <label for="project_description">Summary:</label>
            <textarea class="form-control" name="project_description" cols="30" rows="4"></textarea>
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        </form>
    </div>

   
</div>


@endsection