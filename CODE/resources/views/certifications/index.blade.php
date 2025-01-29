@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Certifications Summary</h2>

    @foreach($certificates as $c)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$c->title}} {{$c->issuer}} {{$c->date}}</h5>
                <a class="btn btn-sm btn-primary" href="{{route('certification.edit',$c)}}" role="button">Edit</a>
                <!-- <a name="" id="" class="btn btn-sm btn-danger" href="#" role="button">Delete</a> -->
                <form action="{{route('certification.destroy',$c)}}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </div>
        </div>
        
    @endforeach
        <a class="text-decoration-none mt-3 " href="{{route('certification.create')}}">+ Add Another certificate</a>
        <!-- <div class="text-end">
            <a class="btn btn-outline-dark btn-sm" href="" role="button">Next Section</a>
        </div> -->
</div>
@endsection