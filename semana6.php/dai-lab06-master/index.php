<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-custom {
            background-color: #0d6efd;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .search-bar {
            background-color: rgb(0, 238, 255);
            color: white;
            border: none;
        }
        .btn-ver {
            border: 1px solid #20c997;
            color: #20c997;
        }
        .btn-editar {
            border: 1px solid #0dcaf0;
            color: #0dcaf0;
        }
        .btn-eliminar {
            border: 1px solid #dc3545;
            color: #dc3545;
        }
        .btn-ver:hover {
            background-color: #20c997;
            color: white;
        }
        .btn-editar:hover {
            background-color: #0dcaf0;
            color: white;
        }
        .btn-eliminar:hover {
            background-color: #dc3545;
            color: white;
        }

        .table-no-verticals td, 
        .table-no-verticals th {
            border-left: none !important;
            border-right: none !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Lab. 6</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Películas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Géneros</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 search-bar" type="search" placeholder="Búsqueda..." aria-label="Buscar">
                <button class="btn btn-dark" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center mb-4">Películas</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="movie_new.php" class="btn btn-outline-primary mb-3">Agregar película</a>
    </div>

    <table class="table table-hover table-no-verticals text-center align-middle">
        <thead class="table-light">
            <tr>
                <th>Nombre</th>
                <th>Género</th>
                <th>Año de Estreno</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Avengers: Infinity War</td>
                <td>Aventura</td>
                <td>2018</td>
                <td>
                    <a href="#" class="btn btn-sm btn-ver">Ver</a>
                    <a href="#" class="btn btn-sm btn-editar">Editar</a>
                    <a href="#" class="btn btn-sm btn-eliminar">Eliminar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
