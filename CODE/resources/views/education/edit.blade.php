@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Education</h2>

    </div>

    <div class="container my-3">
        <form class="form-horizontal" action="{{route('education.update',$education)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="institution_name">Institution Name:</label>
            <input class="form-control" type="text" name="institution_name" value="{{$education->institution_name}}">               
        </div>
        
        <div class="mb-3">
            <label for="institution_location">Institution Location:</label>
            <input class="form-control" type="text" name="institution_location" value="{{$education->institution_location}}">
        </div>
        
        <div class="mb-3">
            <label for="degree">Degree:</label>
            <input class="form-control" type="text" name="degree" value="{{$education->degree}}">
        </div>

        <div class="mb-3">
            <label for="field_of_study">Field Of Study:</label>
            <input class="form-control" type="text" name="field_of_study" value="{{$education->field_of_study}}">
        </div>

        <div class="mb-3">
            <label for="graduation_start_date">Graduation Start Date:</label>
            <input class="form-control" type="date" name="graduation_start_date" value="{{$education->graduation_start_date}}">
        </div>

        <div class="mb-3">
            <label for="graduation_end_date">Graduation End Date:</label>
            <input class="form-control" type="date" name="graduation_end_date" value="{{$education->graduation_end_date}}">
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save Education</button>
        </div>
        </form>
    </div>

   
</div>


@endsection