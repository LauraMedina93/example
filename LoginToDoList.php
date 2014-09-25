<html>
    <head> jQuery </head>
    <body
    <?php
    session_start();
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['pass'] = $_POST['password'];
    } else {
        echo 'Error! Faltan completar campos';
    }

//funcion anonima
    function myfunction() {
        return 'result';
    }

    $result = myfunction();
    echo(function() {
        return 'result';
    });
    ?>
    <script>
        $(function() {
            $("#name").keyup(function() {
                var inputName = $("#name"); //aca se llama al id name desde jquery
                var nameLength = inputName.val().length; //val() muestra todo lo que se ingresa en el input
                if (nameLength >= 13) {
                    inputName.CSS('background-color', 'FFFAAA');
                } else {
                    inputName.CSS('background-color', '#FFFFFF');
                }
            });
            $("#name").blur(function() {
                var nameLength

            });
        });
        </script>
    </body>
</html>