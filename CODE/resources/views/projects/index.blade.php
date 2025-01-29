@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Projects Summary</h2>

    @foreach($projects as $p)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$p->project_title}}</h5>
                <a class="btn btn-sm btn-primary" href="{{route('project.edit',$p)}}" role="button">Edit</a>
                <form action="{{route('project.destroy',$p)}}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </div>
        </div>
        
    @endforeach
        <a class="text-decoration-none mt-3 " href="{{route('project.create')}}">+ Add Another project</a>
        <div class="text-end">
            <a class="btn btn-outline-dark btn-sm" href="{{route('certification.index')}}" role="button">Next Section</a>
        </div>
</div>
@endsection