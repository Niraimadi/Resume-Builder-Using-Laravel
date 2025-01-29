@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Education Summary</h2>

    @foreach($education as $e)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$e->degree}} {{$e->institution_name}} ({{$e->graduation_start_date}}-{{$e->graduation_end_date}})</h4>
                <a name="" id="" class="btn btn-sm btn-primary" href="{{route('education.edit',$e)}}" role="button">Edit</a>
                <form action="{{route('education.destroy',$e)}}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </div>
        </div>
        
    @endforeach
        <a class="text-decoration-none mt-3" href="{{route('education.create')}}" >+ Add Another Education</a>
        <div class="text-end">
            <a class="btn btn-outline-dark btn-sm" href="{{route('experience.index')}}" role="button">Next Section</a>
        </div>
</div>
@endsection