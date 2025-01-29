@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$details->name}} {{$details->email}} {{$details->phone}}</h5>
                <a class="btn btn-sm btn-primary" href="{{ route('user-detail.edit',$details)}}" role="button">Edit</a>
                <form action="{{route('user-detail.destroy',$details)}}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </div>
        </div>
        <div class="text-end mt-3">
            <a class="btn btn-outline-dark btn-sm" href=" {{route('education.index')}} " role="button">Next Section</a>
        </div>
  </div>
@endsection