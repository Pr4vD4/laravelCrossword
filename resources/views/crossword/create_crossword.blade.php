@extends('layout.app')
@section('content')
    <div class="d-flex flex-column ">
        <h2 class="align-self-center mb-5">Create Your crossword</h2>

        <form action="{{ route('store_crossword') }}" method="post">
            @csrf
            @method('post')
            <div class="container-fluid w-50">
                <div class="input-group mb-5">
                    <span class="input-group-text">Field size</span>
                    <input type="number" aria-label="X" class="form-control" placeholder="X" min="2" max="100" id="x" name="x">
                    <input type="number" aria-label="Y" class="form-control" placeholder="Y" min="2" max="100" id="y" name="y">
                    <button class="btn btn-outline-secondary" type="button" id="create-field-btn">Create Filed</button>
                </div>
            </div>
            <div class="container-fluid d-flex flex-column align-items-center" id="creating-field">

            </div>


        </form>

    </div>



    <script src="{{asset('public/assets/js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/make_crossword.js')}}"></script>

@endsection
