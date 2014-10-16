<html>
    <head>
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    <body class="container">
        <select class="Province">
           <?php foreach ($Provinces as $prov) :?>
           <option><?php echo $prov->getName()?></option>
           <?php endforeach?>
        </select>
        <select class="City">

        </select>
        <script>
            $(".Province").change(function() {
                $(".City").show();
               $.ajax({
                url: 'City.php',
                data: {'provincia': $(".Province").val()},
                type: 'GET',
                beforeSend: function(){
                    
                },
                success: function(data) {
                    console.log(data)
                        $('.City').append($('<option></option>').text(data));
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