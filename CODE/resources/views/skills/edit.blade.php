@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Skills</h2>

    <div class="container my-3">
        <form class="form-horizontal" action="{{route('skill.update',$skill)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="name">Skill:</label>
            <input class="form-control" type="text" name="name" value="{{$skill->name}}">               
        </div>
        
        <div class="mb-3">
            <label for="rating">Rating:</label>
            <input class="form-control" type="text" name="rating" value="{{$skill->rating}}">
        </div>

        <div class="text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        </form>
    </div>

@endsection