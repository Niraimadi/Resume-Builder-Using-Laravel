@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Work Details</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="\experience" method="POST">
            @csrf
        <div class="mb-3">
            <label for="job_title">Job Title:</label>
            <input class="form-control" type="text" name="job_title" autofocus required>               
        </div>
        
        <div class="mb-3">
            <label for="employer">Employer:</label>
            <input class="form-control" type="text" name="employer" required>
        </div>
        
        <div class="mb-3">
            <label for="city">City:</label>
            <input class="form-control" type="text" name="city" required>
        </div>

        <div class="mb-3">
            <label for="state">State:</label>
            <input class="form-control" type="text" name="state" required>
        </div>

        <div class="mb-3">
            <label for="start_date">Start Date:</label>
            <input class="form-control" type="date" name="start_date" required>
        </div>

        <div class="mb-3">
            <label for="end_date">End Date:</label>
            <input class="form-control" type="date" name="end_date" required>
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        </form>
    </div>

   
</div>


@endsection