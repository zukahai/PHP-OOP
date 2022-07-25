$(document).ready(function() {
    $.ajax({
        url: 'solve.php',
        type: 'GET',
        dataType: 'html',
        data: {

        }
    }).done(function(result) {
        $('.data').html(result);
    });
    $('#find').click(function(e) {
        $search = $('#search').val();

        e.preventDefault;

        $.ajax({

            url: 'solve.php',
            type: 'GET',
            dataType: 'html',
            data: {
                search: $search
            }
        }).done(function(result) {
            $('.data').html(result);
        });
    })

})