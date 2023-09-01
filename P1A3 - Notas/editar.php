<?php
require("./connection/connection.php");
$id = $_GET['id'];
$query = "SELECT * FROM notas WHERE id_nota = '$id'";
$ejecutar = mysqli_query($connection, $query);
$fila = mysqli_fetch_assoc($ejecutar);
?>
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
                        <?php
                        require("./connection/connection.php");
                        $id = $_GET['id'];
                        $query = "SELECT * FROM notas WHERE id_nota = '$id'";
                        $ejecutar = mysqli_query($connection, $query);
                        $fila = mysqli_fetch_assoc($ejecutar);
                        ?>
                            <form action="./function/update.php?id=<?php echo $fila['id_nota'];?>" method="post">
                                <div class="mb-3 card text-bg-dark">
                                    <label class="card-header" style ="text-align:center; font-weight: bold;">Editar nota</label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nota</label>
                                    <textarea name="nota" class="form-control" style="height: 300px"><?php echo $fila['nota'];?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a class="btn btn-danger" href="./index.php">Cancelar</a>
                            </form>
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