$("#formulario").submit(function(){
    event.preventDefault();
    var data = $(this).serialize();
    console.log(data);
    $.get("numeroGet.php",data,function(response) {
        $("#data").html(response);
    });
});
