$("#formulario").submit(function(){
    event.preventDefault();
    var data = $(this).serialize();
    console.log(data);
    $.post("eje1.php",data,function(response) {
        $("#data").html(response);
    });
});
