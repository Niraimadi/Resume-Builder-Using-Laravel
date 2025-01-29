@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Experience</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="{{route('experience.update',$experience)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="job_title">Job Title:</label>
            <input class="form-control" type="text" name="job_title" value="{{$experience->job_title}}">               
        </div>
        
        <div class="mb-3">
            <label for="employer">Employer:</label>
            <input class="form-control" type="text" name="employer" value="{{$experience->employer}}">
        </div>
        
        <div class="mb-3">
            <label for="city">City:</label>
            <input class="form-control" type="text" name="city" value="{{$experience->city}}">
        </div>

        <div class="mb-3">
            <label for="state">State:</label>
            <input class="form-control" type="text" name="state" value="{{$experience->state}}">
        </div>

        <div class="mb-3">
            <label for="start_date">Start Date:</label>
            <input class="form-control" type="date" name="start_date" value="{{$experience->start_date}}">
        </div>

        <div class="mb-3">
            <label for="end_date">End Date:</label>
            <input class="form-control" type="date" name="end_date" value="{{$experience->end_date}}">
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        </form>
    </div>

   
</div>


@endsection