@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Education Details</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="\education" method="POST">
            @csrf
        <div class="mb-3">
            <label for="institution_name">Institution Name:</label>
            <input class="form-control" type="text" name="institution_name" autofocus required>               
        </div>
        
        <div class="mb-3">
            <label for="institution_location">Institution Location:</label>
            <input class="form-control" type="text" name="institution_location" required>
        </div>
        
        <div class="mb-3">
            <label for="degree">Degree:</label>
            <input class="form-control" type="text" name="degree" required>
        </div>

        <div class="mb-3">
            <label for="field_of_study">Field Of Study:</label>
            <input class="form-control" type="text" name="field_of_study" required>
        </div>

        <div class="mb-3">
            <label for="graduation_start_date">Graduation Start Date:</label>
            <input class="form-control" type="date" name="graduation_start_date" required>
        </div>

        <div class="mb-3">
            <label for="graduation_end_date">Graduation End Date:</label>
            <input class="form-control" type="date" name="graduation_end_date" required>
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save Education</button>
        </div>
        </form>
    </div>

   
</div>


@endsection