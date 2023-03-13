@extends('layout.app')
@section('content')
@foreach($crosswords as $key => $crossword)
    <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $crossword->name }}</h5>
            <a href="{{route('crossword_level', $crossword)}}" class="btn btn-primary" >Go to crossword</a>
        </div>
    </div>
@endforeach
@endsection
