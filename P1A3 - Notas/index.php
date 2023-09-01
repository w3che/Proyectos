<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    <!-- Bootstrap CSS v5.3.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Notas</a>
        </div>
    </nav>
    <main>
        <div class="container h-100" style="padding-top: 2rem;">
            <div class="row justify-content-center align-item-center h-100">
                <div class="col-12 col-sm-12 col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="./function/insert.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Nueva nota</label>
                                    <textarea name="nota" class="form-control" style="height: 300px"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-9 mb-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nota</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        require("./connection/connection.php");
                                        $query = "SELECT * FROM notas";
                                        $ejecutar = mysqli_query($connection, $query);
                                        $contador = 1;
                                        while ($fila = mysqli_fetch_array($ejecutar)) {
                                        ?>
                                        <tr>
                                            <td scope="row"><?php echo $contador;?></td>
                                            <td scope="row"><?php echo $fila['nota'];?></td>
                                            <td scope="row"><a class="btn btn-warning btn-sm" href="./editar.php?id=<?php echo $fila['id_nota'];?>"><i class="bi bi-pencil-square"></i></a></td>
                                            <td scope="row"><a class="btn btn-danger btn-sm" href="./function/delete.php?id=<?php echo $fila['id_nota'];?>"><i class="bi bi-x-square"></i></a></td>
                                        </tr>
                                        <?php $contador++;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap-->´
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>