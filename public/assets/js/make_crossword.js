$(document).ready(function () {


    $('#create-field-btn').on('click', function () {

        let counter = 0;

        $('#creating-field').empty();
        let x = Number($('#x').val());
        let y = Number($('#y').val());

        if (x > 100 || y > 100) {
            return;
        }
        $('#creating-field').append('<div class="row d-flex"></div>');
        $('#creating-field .row:last').append('<div class="crossword-item" style="border: solid 1px white"></div>');
        for (let x_counter = 0; x_counter < x; x_counter++){

            $('#creating-field .row:last').append('<div class="crossword-item" style="border: solid 1px white">' + x_counter + '</div>');
        }
        for (let y_counter = 0; y_counter < y; y_counter++) {
            $('#creating-field').append('<div class="row d-flex"></div>');
            $('#creating-field .row:last').append('<div class="crossword-item" style="border: solid 1px white">' + y_counter + '</div>');
            for (x_counter = 0; x_counter < x; x_counter++, counter++) {
                $('#creating-field .row:last').append('<div class="crossword-item" id="' + counter + '"></div>\n' +
                    '                    <input type="hidden" name="crossword-item-' + counter + '" id="crossword-item-' + counter + '" value="0">');
            }
        }
        $('#creating-field').append('<input type="submit" value="Send" className="mt-2">');
    });


    $('body').on('click', '.crossword-item', function (e) {

        $(this).toggleClass('crossword-item-pressed');
        let id = $(this).attr('id')
        if ($('#crossword-item-' + id).val() == '0') {
            $('#crossword-item-' + id).val('1');
        } else {
            $('#crossword-item-' + id).val('0')
        }
    });


});
