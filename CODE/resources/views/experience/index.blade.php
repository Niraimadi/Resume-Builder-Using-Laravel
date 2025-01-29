@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Work Summary</h2>

    @foreach($experiences as $e)

    
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$e->job_title}} ({{$e->start_date}} to {{$e->end_date}})</h5>
                <ul>
                    <li>{{$e->employer}}</li>
                    <li>{{$e->city}}</li>
                    <li>{{$e->state}}</li>
                </ul>
                <a class="btn btn-sm btn-primary" href="{{route('experience.edit',$e)}}" role="button">Edit</a>
                <form action="{{route('experience.destroy',$e)}}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </div>
        </div>
        
    @endforeach
        <a class="text-decoration-none mt-3 " href="{{route('experience.create')}}">+ Add Another Experience</a>
        <div class="text-end">
            <a class="btn btn-outline-dark btn-sm" href="{{route('skill.index')}}" role="button">Next Section</a>
        </div>
</div>
@endsection