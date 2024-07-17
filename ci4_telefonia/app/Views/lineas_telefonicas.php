<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Lineas Telefonicas</h1>
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
                    <th>No. Telefono</th>
                    <th>Fecha de pago</th>
                    <th>Meses de atraso </th>
                    <th>Plan Id</th>
                    <th>Cliente Id</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($datos as $telef):

            ?>
                <tr>
                    <td><?php echo $telef[ 'no_telefono'];?></td>
                    <td><?php echo $telef[ 'fecha_pago'];?></td>
                    <td><?php echo $telef[ 'meses_atraso'];?></td>
                    <td><?php echo $telef[ 'plan_id'];?></td>
                    <td><?php echo $telef[ 'cliente_id'];?></td>
                
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