<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>
<body>
    
    
    <center>    
        <h3>CONSULTA DNI</h3>
        <input type="text" id="documento" class="form">

        <button type="button" id="buscar">Buscar</button><br/><br/>

        Apellido Paterno:
        <input type="text" id="apellidoP"><br/><br/>
        Apellido Materno:
        <input type="text" id="apellidoM"><br/><br/>
        Nombre:
        <input type="text" id="nombre"><br/><br/>
    </center>


</body>

<script>
    $('#buscar').click(function(){
        dni=$('#documento').val();
        $.ajax({
           url:'controlador/consultaDNI.php',
           type:'post',
           data: 'dni='+dni,
           dataType:'json',
           success:function(r){
            if(r.numeroDocumento==dni){
                $('#apellidoP').val(r.apellidoPaterno);
                $('#apellidoM').val(r.apellidoMaterno);
                $('#nombre').val(r.nombres);
            }else{
                alert(r.error);
            }
            console.log(r)
           }
        });
    });
</script>




</html>