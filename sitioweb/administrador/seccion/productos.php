<?php include("../template/cabecera.php") ?>

<div class="col-md-5">
    

    <div class="card">

      <div class="card-header">
        Datos de libros

      </div>
      <div class="card-body">
      
    <form method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
    <label for="txtid">ID:</label>
    <input type="text" class="form-control" id="txtid" name="txtid" placeholder="id">
    </div>
    <br/>
    <div class="form-group">
    <label for="txtnombre">Nombre:</label>
    <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre">
    </div>
    <br/>
    <div class="form-group">
    <label for="txtimagen">Imagen:</label>
    <input type="file" class="form-control" id="txtimagen" name="txtimagen" placeholder="nombre">
    </div>
    <br/>

    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Agregar</button>
        <button type="button" class="btn btn-danger">Modificar</button>
        <button type="button" class="btn btn-success">Cancelar</button>
    </div>
    
    
    </form>

    </div>



    </div>




    
    
    
</div>

<div class="col-md-7">
    Tabla de libros

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>Enviar | Cancelar</td>

            </tr>
        </tbody>
    </table>




</div>



<?php include("../template/pie.php") ?>