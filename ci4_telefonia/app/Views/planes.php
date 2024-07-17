<!doctype html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Planes</h1>
        <ul class="nav nav-tabs">
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
                    <th>Plan Id</th>
                    <th>Nombre</th>
                    <th>Pago mensual</th>
                    <th>Cantidad Minutos</th>
                    <th>Cantidad Mensajes</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($datos as $planes):

            ?>
                <tr>
                    <td><?php echo $planes[ 'plan_id'];?></td>
                    <td><?php echo $planes[ 'nombre'];?></td>
                    <td><?php echo $planes[ 'pago_mensual'];?></td>
                    <td><?php echo $planes[ 'cantidad_minutos'];?></td>
                    <td><?php echo $planes[ 'cantidad_mensajes'];?></td>
                
                </tr>
                <?php
                endforeach;
                
                ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>