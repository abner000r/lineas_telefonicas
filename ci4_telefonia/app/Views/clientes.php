<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>


</style>
  </head>
  <body>
    <div class="l1">
    <div class="container">
        <h1 class="text-center">Clientes</h1>
        <ul class="nav nav-tabs ">
  <li class="nav-item">
    <a class="nav-link text-dark bg-warning" aria-current="page" href="ver_clientes">Clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark bg-success" href="ver_lineas">Lineas Telefonicas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark bg-primary" href="ver_planes">Planes</a>
  </li>

</ul>
        <table class="table table-border table-striped text-center table-dark">
            <thead>
                <tr>
                    <th>ID Cliente</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Calle Av.</th>
                    <th>No. Casa</th>
                    <th>Zona</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($datos as $clientes):

            ?>
                <tr>
                    <td><?php echo $clientes[ 'cliente_id'];?></td>
                    <td><?php echo $clientes[ 'apellido'];?></td>
                    <td><?php echo $clientes[ 'nombre'];?></td>
                    <td><?php echo $clientes[ 'correo_electronico'];?></td>
                    <td><?php echo $clientes[ 'calle_avenida'];?></td>
                    <td><?php echo $clientes[ 'no_casa'];?></td> 
                    <td><?php echo $clientes[ 'zona'];?></td>
                </tr>
                <?php
                endforeach;
                
                ?>
            </tbody>
        </table>
    </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>