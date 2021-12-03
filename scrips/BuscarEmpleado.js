$(buscarEmpleado());

function buscarEmpleado(consultaR){
    $.ajax({
        url: '../scrips/BuscarEmpleado.php',
        type: 'POST',
        dataType:'html',
        data:{consulta: consultaR},
    })
    .done(function(respuesta){
        $("#buscar").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })
}

$(document).on('keyup','#IdEmpleado', function(){
    var valor = $(this).val() ;

    if(valor!=""){
        buscarEmpleado(valor);
    }
    else{
        console.log("Esta vacio el campo");
    }
});