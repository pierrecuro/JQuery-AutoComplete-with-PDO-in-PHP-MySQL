<?php
  print_r($_POST);
?>
<!doctype html>
<html>
<head>
    <title>AJAX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='jquery-ui.min.css' type='text/css' rel='stylesheet' >
    <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="jquery-ui.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function(){
                $(document).on('keydown', '.articulo', function() {
                    var codigoArticulo = this.id;
                    var splitid = codigoArticulo.split('_');
                    var index = splitid[1];
                            $( '#'+codigoArticulo ).autocomplete({
                                source: function( request, response ) {
                                    $.ajax({
                                        url: "getDetails.php",
                                        type: 'post',
                                        dataType: "json",
                                        data: {
                                            search: request.term,request:1
                                        },
                                        success: function( data ) {
                                            response( data );
                                        }
                                    });
                                },
                                select: function (event, ui) {
                                    $(this).val(ui.item.label); // display the selected text
                                    var varCodigoArticulo = ui.item.value; // selected id to input
                                    // AJAX
                                    $.ajax({
                                        url: 'getDetails.php',
                                        type: 'post',
                                        data: {varCodigoArticulo:varCodigoArticulo,request:2},
                                        dataType: 'json',
                                        success:function(response){
                                            var len = response.length;
                                            if(len > 0){
                                                var codigoArticulo = response[0]['codigoArticulo'];
                                                var articulo = response[0]['articulo'];
                                                document.getElementById('articulo_'+index).value = articulo;
                                                document.getElementById('codigoArticulo_'+index).value = codigoArticulo;
                                            }
                                        }
                                    });
                                    return false;
                                }
                            });
                });
    });
    </script>
    
</head>
<body>
    <div class="container"> 
            <form action="" method="post"  > 
                    <table border='1' style='border-collapse: collapse;'>
                        <thead>
                        <tr>
                            <th>articulo</th>
                            <th>codigoArticulo</th> 
                        </tr>
                        </thead>
                        <tbody>
                        <tr class='tr_input'>
                            <td><input type='text' name='articulo' class='articulo' id='articulo_1' placeholder='Enter articulo'></td>
                            <td><input type='text' name='codigoArticulo' class='codigoArticulo' id='codigoArticulo_1' ></td> 
                        </tr>
                        </tbody>
                    </table>
                    <br> 
                    <input type="submit" value="enviar">
            </form> 
    </div>
</body>
</html>

