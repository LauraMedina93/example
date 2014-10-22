<html>
    <head>
        <meta charset="utf-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title> Ejercicio Ajax </title>
        <style>
            .container{
                position: absolute; /* or absolute */
                top: 50%;
                left: 50%;
            }
            .City{
                display: none
            }
        </style>
        
    </head>
    <body class="container">
        <select class="Provinces">
           
            <option value="">Seleccione una Provincia</option>
            <option>Chaco</option>
            <option>Corrientes</option>
        </select>
        
        <select class="City">
            <?php foreach ($Provinces as $prov) :?>
           <option><?php echo $output?></option>
           <?php endforeach?>
        </select>
        <script>
            $(".Provinces").change(function() {
               $(".City").show();
               $.ajax({
                url: './main.php',
                data: {'provincia': $(".Provinces").val()},
                type: 'GET',
                beforeSend: function(){
                    
                },
                success: function(data) {
                    console.log(data)
                        $('.City').append($('<p> </p>').text(data));
                },
                    error: function (error){
                    $('body').append('<div>'+ error + '</div>');
                        },
                                complete: function (status){
                            
                                }
            });
            });
        </script>
    </body>
</html>