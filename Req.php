<?php include 'Conectar.php'; ?>
<?php
 $query = "SELECT * FROM cmns ORDER BY CMN DESC";
 $cmns = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
<h1 class="text-center">Control Requerimientos</h1>
    <p class="text-center">Aprende a realizar las 4 operaciones básicas entre PHP y una base de datos, en este caso MYSQL: CRUD(Create, Read, Update, Delete)</p>

    <div class="container">


        <?php if(isset($_GET['mensaje'])) : ?>                
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $_GET['mensaje']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-sm-3 offset-12">
                <a href="crear.php" class="btn btn-success w-100"> Crear Nuevo CMN</a>
                
            </div>            
        </div>

        <div class="row caja">
            <div class="col-sm-12 offset-12" >
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CMN</th>
                            <th>REQ</th>
                            <th>Fecha Asigancion</th>
                            <th>Fecha Vencimiento</th>
                            <th>Responsable</th>
                            <th>Estado</th> 
                            <th>Fecha Respuesta</th>                                                
                            </tr>      
                    </thead>
                   
                    <tbody>

                        <?php while($fila = mysqli_fetch_assoc($cmns)) : ?>
                        <tr>
                            <td><?php echo $fila['CMN']; ?></td>
                            <td><?php echo $fila['REQ']; ?></td>
                            <td><?php echo $fila['Fecha_Asigancion']; ?></td>
                            <td><?php echo $fila['Fecha_Vencimiento']; ?></td>
                            <td><?php echo $fila['Responsable']; ?></td>
                            <td><?php echo $fila['Estado']; ?></td>
                            <td><?php echo $fila['Fecha_Respuesta']; ?></td>

                            <td>
                            <a href="editar.php?CMN=<?php echo $fila['CMN']; ?>" class="btn btn-primary"> Editar</a>
                            <a href="Guardar.php?CMN=<?php echo $fila['CMN']; ?>" class="btn btn-danger"> Guardar</a>
                            </td>
                            </tr>
                        <?php endwhile; ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>
</html>