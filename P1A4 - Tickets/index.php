<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <!-- Bootstrap CSS v5.3.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <!-- place navbar here -->
        <?php include 'includes/header.php'; ?>
    </header>
    <main>
        <div class="container h-100" style="padding-top: 15rem;">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <h2 style="color:#E0FFFF">Sistema de Tickets para la Gestión de Incidencias</h2>
                    <p style="color:#E0FFFF">Nuestra plataforma proporciona una solución eficaz para gestionar incidencias y problemas de manera organizada.</p>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="./auth/login.php" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="email" placeholder="email">
                                    <label>Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="email" placeholder="password">
                                    <label>Password</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php //include 'includes/footer.php'; ?>
    </footer>
    <!-- Bootstrap-->´
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>