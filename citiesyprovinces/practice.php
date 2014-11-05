
<html>
    <head>
        <?php include 'dataProv.php';?>
        <meta charset="utf-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title> Ejercicio Ajax </title>
        
        <style>
            .container{
                position: absolute; /* or absolute */
                top: 20%;
                left: 30%;
            }
            .City{
                display: none
            }
        </style>
     <h1 style="background-color: darksalmon"> Ejercicio de Ajax</h1>
    </head>
    <body class="container">
        <select class="Provinces">
            <option value="">Seleccione una Provincia</option>
            <?php foreach ($provincias as $prov):?>
            <option> <?php echo $prov->getName(); ?></option>
            <?php endforeach; ?>
     
        </select>
        
        <select class="City">
           <option value="">Seleccione Ciudad </option> 
           
           </select>
        
        <script>
            $(".Provinces").change(function() {
               $(".City").show();
               $.ajax({
                url: 'main.php',
                data: {'provincia': $(".Provinces").val()},
                type: 'GET',
                beforeSend: function(){
                    
                },
                success: function(data) {
                    $(".City").html('');
                        $('.City').append($('<option> </option>').text(data[i]));
                        for(var i= 0; i<data.length; i++){
                            console.log(data[i]);                        }
               },
                       
//                    error: function (error){
//                    $('body').append('<div>'+ error + '</div>');
//                        },
                                complete: function (status){
                            
                                }
            });
            });
        </script>
    </body>
</html>