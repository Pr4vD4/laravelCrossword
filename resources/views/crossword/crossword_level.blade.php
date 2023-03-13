@extends('layout.app')
@section('content')

    <div class="container-fluid d-flex flex-column align-items-center" id="creating-field">

    </div>

    <script src="{{asset('public/assets/js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{asset('public/assets/js/crossword_check.js')}}"></script>
    <script>

        let image = JSON.parse(@json($crossword).image
        )
        ;

        console.log(image)

        $(document).ready(function () {

            let matrix = Array(2);
            for (let i = 0; i < image.length; i++) {
                matrix[i] = [];
                for (let j = 0; j < image[i].length; j++) {
                    matrix[i].push('0');
                }
            }

            console.log(matrix)

            $('body').on('click', '.crossword-item', function (e) {

                $(this).toggleClass('crossword-item-pressed');
                let x = $(this).data().x;
                let y = $(this).data().y;

                if (matrix[y][x] == 0) {
                    matrix[y][x] = '1';
                } else {
                    matrix[y][x] = '0';
                }

                if (JSON.stringify(image) == JSON.stringify(matrix)) {
                    console.log('win');
                }

                console.log(matrix)

            });

            let counter = 0;
            for (let y_counter = 0; y_counter < image.length; y_counter++) {
                $('#creating-field').append('<div class="row d-flex"></div>');
                for (let x_counter = 0; x_counter < image[y_counter].length; x_counter++, counter++) {
                    $('#creating-field .row:last').append('<div class="crossword-item" id="' + counter + '" data-y="' + y_counter + '" data-x="' + x_counter + '"></div>');
                }
            }

        });

    </script>
@endsection
