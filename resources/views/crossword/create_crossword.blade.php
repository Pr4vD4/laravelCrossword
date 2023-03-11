@extends('layout.app')
@section('content')
    <div class="container d-flex flex-column ">
        <h2 class="align-self-center mb-5">Create Your crossword</h2>
        <div class="container w-75">
            <form action="{{ route('store_crossword') }}" method="post">
                @csrf
                @method('post')
                <div class="input-group mb-5">
                    <span class="input-group-text">Field size</span>
                    <input type="number" aria-label="X" class="form-control" placeholder="X" min="2" max="100" id="x">
                    <input type="number" aria-label="Y" class="form-control" placeholder="Y" min="2" max="100" id="y">
                    <button class="btn btn-outline-secondary" type="button" id="create-field-btn">Create Filed</button>
                </div>
                <div class="container" id="creating-field">

                </div>

                <input type="submit" value="Send">
                
            </form>
        </div>

    </div>



    <script src="{{asset('public/assets/js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/make_crossword.js')}}"></script>

@endsection
