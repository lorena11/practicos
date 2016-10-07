$("#formulario").submit(function(){
    event.preventDefault();
    var data = $(this).serialize();
    console.log(data);
    $.post("cargarArreglo.php",data,function(response) {
        $("#data").html(response);
    });
});
