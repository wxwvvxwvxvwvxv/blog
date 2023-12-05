@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
            {{ auth()->user()->name }}
            </div>
          </div>
    </div>
@endsection
