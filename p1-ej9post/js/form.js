$("#formulario").submit(function(){
    event.preventDefault();
    var data = $(this).serialize();
    console.log(data);
    $.post("ecuacionCuadratica.php",data,function(response) {
        $("#data").html(response);
    });
});
