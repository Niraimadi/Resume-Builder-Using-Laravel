@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Certification Details</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="/certification" method="POST">
            @csrf
        <div class="mb-3">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" autofocus required>               
        </div>

        <div class="mb-3">
            <label for="issuer">Issuer:</label>
            <input class="form-control" type="text" name="issuer" required>               
        </div>
        
        <div class="mb-3">
            <label for="date">Date:</label>
            <input class="form-control" type="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="summary">Summary:</label>
            <textarea class="form-control" name="summary" id="" cols="30" rows="4"></textarea>
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        </form>
    </div>

   
</div>


@endsection