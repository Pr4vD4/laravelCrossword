@extends('layout.app')
@section('content')
    <div class="container">
        <ul>
            <li>{{ \Illuminate\Support\Facades\Auth::user()->name}}</li>
            <li>{{ \Illuminate\Support\Facades\Auth::user()->email}}</li>
        </ul>
    </div>
@endsection
