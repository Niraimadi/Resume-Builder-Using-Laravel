@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Skills Summary</h2>

    @foreach($skills as $s)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$s->name}} ({{$s->rating}})</h5>
                <a class="btn btn-sm btn-primary" href="{{route('skill.edit',$s)}}" role="button">Edit</a>
                <form action="{{route('skill.destroy',$s)}}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </div>
        </div>
        
    @endforeach
        <a class="text-decoration-none mt-3 " href="{{route('skill.create')}}">+ Add Another skill</a>
        <div class="text-end">
            <a class="btn btn-outline-dark btn-sm" href="{{route('project.index')}}" role="button">Next Section</a>
        </div>
</div>
@endsection