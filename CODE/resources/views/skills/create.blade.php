@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Skills Details</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="/skill" method="POST">
            @csrf
        <div class="mb-3">
            <label for="name">Skill:</label>
            <input class="form-control" type="text" name="name" autofocus required>               
        </div>
        
        <div class="mb-3">
            <label for="rating">Rating:</label>
            <input class="form-control" type="text" name="rating">
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        </form>
    </div>

   
</div>


@endsection