$(document).ready(function() {
    $('#submit').click(function(e) {

        $username = $('#username').val();
        $password = $('#password').val();

        e.preventDefault;

        $.ajax({
            url: 'solve.php',
            type: 'GET',
            dataType: 'html',
            data: {
                username: $username,
                password: $password
            }
        }).done(function(result) {
            if (result == "admin") {
                document.cookie = "username=" + $username + "; path=/";
                document.cookie = "password=" + $password + "; path=/";
                console.log("Hello");
                window.location = "../";
            }
            $('.message').html(result);
        });
    })

})