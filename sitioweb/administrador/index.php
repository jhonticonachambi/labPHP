
<?php
if($_POST){
    header('Location:inicio.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card ">
                  
                  <div class="card-header">
                    Login
                  </div>
                  <div class="card-body">
                    <form method="POST">
                    <div class = "form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Ingresa tu usuario">
                    
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="contraseña" class="form-control" placeholder="Ingrese tu contraseña">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Entrar a administrador</button>
                    </form>
                    
                    

                  </div>



                </div>



            </div>
            
        </div>
    </div>
    c
</body>
</html>