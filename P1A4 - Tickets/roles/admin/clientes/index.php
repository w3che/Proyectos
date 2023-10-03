<!doctype html>
<html lang="en">

<head>
    <title>Gestion de usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <?php include '../../../includes/header_admin.php'; ?>
    </header>
    <main>
        <?php
        include '../../../includes/db.php';
        $query = "SELECT * FROM cliente";
        $ejecutar = mysqli_query($connection, $query);
        $clientes = mysqli_fetch_all($ejecutar, MYSQLI_ASSOC);
        ?>
        <div class="container mt-5" >
            <h2>Gestion de usuarios</h2>
            <br>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?php echo $cliente['id_cliente'] ?></td>
                        <td><?php echo $cliente['nombre_cliente'] ?></td>
                        <td><?php echo $cliente['email'] ?></td>
                        <td>
                            <a href="./view/update_form.php?id=<?php echo $cliente ['id_cliente'] ?>" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            
                        </td>
                        <td>
                            <a href="../functions/delete.php?id=<?php echo $cliente ['id_cliente'] ?>" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr><?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>