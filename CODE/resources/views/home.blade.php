@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                        <div class="container text-center my-3">
                            <a class="btn btn-primary btn-sm " href="{{url('user-detail')}}" role="button">Create my resume</a>
                        </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/home.js') }}"></script>
@endsection
