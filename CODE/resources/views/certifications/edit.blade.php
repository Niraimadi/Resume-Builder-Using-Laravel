@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Certifications</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="{{route('certification.update',$certification)}}" method="POST">
            @csrf
            @method('PUT')
        
        <div class="mb-3">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" value="{{$certification->title}}">               
        </div>

        <div class="mb-3">
            <label for="issuer">Issuer:</label>
            <input class="form-control" type="text" name="issuer" value="{{$certification->issuer}}">               
        </div>
        
        <div class="mb-3">
            <label for="date">Date:</label>
            <input class="form-control" type="date" name="date" value="{{$certification->date}}">
        </div>

        <div class="mb-3">
            <label for="summary">Summary:</label>
            <textarea class="form-control" name="summary" cols="30" rows="4">
                    {{$certification->summary}}
            </textarea>
        </div>


        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        </form>
    </div>

@endsection