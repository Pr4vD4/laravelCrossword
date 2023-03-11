$( document ).ready(function() {
    let counter = 0
    $('#create-field-btn').on('click', function (){
        $('#creating-field').append('<input name="filed_item['+ counter +']" type="checkbox" class="btn-check " id="btn-check-outlined'+ counter + '" autocomplete="off">\n' +
            '                    <label class="btn btn-outline-primary crossword-item" for="btn-check-outlined'+ counter+ '"></label>')
        counter += 1;
    });
});
