@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container my-3">
        <form class="form-horizontal" action="\user-detail" method="POST">
            @csrf
        <div class="mb-3">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" required autofocus>               
        </div>
        
        <div class="mb-3">
            <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" required>
        </div>
        
        <div class="mb-3">
            <label for="phone">Phone:</label>
            <input class="form-control" type="text" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="address">Address:</label>
            <textarea class="form-control" name="address" id="" cols="30" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="summary">Summary:</label>
            <textarea class="form-control" name="summary" id="" cols="30" rows="4" required></textarea>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
        </form>
    </div>

   
</div>


@endsection