$(document).ready(function(){
	$('#color').click(function(){
            if ($('#color').prop('checked')==true){ 
                textos = "CONTENIDO_TABLA";
                for (var i=1;i < document.getElementById('tablaProd').rows.length ; i++){
                    for (var j=0; j<4; j++){
                        if(j==3){
                            //textos = textos + document.getElementById('tablaProd').rows[i].cells[j].innerHTML + " -> ";
                            if(document.getElementById('tablaProd').rows[i].cells[j].innerHTML<10)
                            {
                                //alert(document.getElementById('tablaProd').rows[i].cells[j].innerHTML);
                                celda = document.getElementById('tablaProd').rows[i].cells[j];
                                celda.style.backgroundColor="#ffff00";
                            }
                        }
                    }
                } 
                //alert(textos);
            }
            else{
                for (var i=1;i < document.getElementById('tablaProd').rows.length ; i++){
                    for (var j=0; j<4; j++){
                        if(j==3){
                            //textos = textos + document.getElementById('tablaProd').rows[i].cells[j].innerHTML + " -> ";
                            if(document.getElementById('tablaProd').rows[i].cells[j].innerHTML<10)
                            {
                                //alert(document.getElementById('tablaProd').rows[i].cells[j].innerHTML);
                                celda = document.getElementById('tablaProd').rows[i].cells[j];
                                celda.style.backgroundColor="#fff";
                            }
                        }
                    }
                } 
            }
	});
});
