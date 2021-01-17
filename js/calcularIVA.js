$(document).ready(function(){
	$('#calcula').click(function(){
            if ($('#calcula').prop('checked')==true){ 
                var valor= $("#precio").val();
                if(valor!=null && valor!="")
                {
                    var parametros = {
                            "valor" : valor
                    };
                    $.ajax({
                        data:  parametros,
                        url:   'ajax.php',
                        type:  'post',
                        beforeSend: function () {
                            $("#resultado").html("Calculando...");
                        },
                        success: function(response){
                            //$('#calcula').prop( "checked", true );
                            $('#resultado').html(response);
                        },
                        error: function(data){
                            alert( "Ajax failed: " + data['responseText'] );
                        }
                    });
                }else
                {
                    //$('#calcula').prop( "checked", false );
                    $('#resultado').html("0");
                    alert("Ingresar un valor en el campo Precio para el calculo!");

                }
            }
            else{
                $('#resultado').html("0");
            }
	});
        
});