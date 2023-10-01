<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://img.freepik.com/vector-gratis/vector-diseno-degradado-colorido-pajaro_343694-2506.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Sistema de tickets
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configuracion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../areas/index.php">Area</a></li>
            <li><a class="dropdown-item" href="../estatus/index.php">Estatus</a></li>
            <li><a class="dropdown-item" href="../nivel/index.php">Niveles</a></li>
            <li><hr class="dropdown-divider"></li> 
            <li><a class="dropdown-item" href="../../../auth/logout.php">Cerrar sesion</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>