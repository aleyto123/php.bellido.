<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            align-items: center;
            padding-top: 20px; 
            padding-bottom: 20px; 
            box-sizing: border-box; 
        }

        .top-bar {
            background-color: #f0f0f0;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            width: 80%;
            max-width: 960px;
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left: 10px;
            flex-grow: 1;
        }

        .search-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        .form-container {
            background-color: #fff;
            padding: 20px; 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 960px;
        }

        h2 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px; 
            font-size: 1.5rem; 
        }

        .form-label {
            color: #495057;
            font-weight: bold;
            margin-bottom: 0.3rem; 
            font-size: 0.9rem; 
        }

        .form-control,
        .form-select {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.5rem;
            margin-bottom: 0.7rem; 
            font-size: 0.9rem; 
            width: 100%;
            box-sizing: border-box;
        }

        .form-inline {
            display: flex;
            gap: 0.5rem; 
            width: 100%;
        }

        .form-inline .mb-3 {
            flex: 1;
            margin-bottom: 0.7rem; 
        }

        .buttons {
            text-align: center; 
            margin-top: 1.5rem; 
        }

        .btn {
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            margin: 0 0.25rem; 
            font-size: 0.9rem; 
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #545b62;
            border-color: #4e555b;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 0.8em;
            color: #6c757d;
            border-top: 1px solid #dee2e6;
            margin-top: 20px; 
            width: 80%;
            max-width: 960px;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <label for="busqueda">Búsqueda...</label>
        <input type="text" class="search-input" id="busqueda" placeholder="">
        <button class="search-button">Buscar</button>
    </div>

    <div class="form-container">
        <h2 class="mb-4 text-center">Agregar Película</h2>
        <form action="movie_insert.php" method="POST">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <select class="form-select" id="genero" name="genero" required>
                    <option value="">[- SELECCIONE -]</option>
                    <option value="accion">Acción</option>
                    <option value="comedia">Comedia</option>
                    <option value="drama">Drama</option>
                </select>
            </div>
            <div class="form-inline">
                <div class="mb-3">
                    <label for="anio" class="form-label">Año de Estreno</label>
                    <input type="number" class="form-control" id="anio" name="anio" required>
                </div>
                <div class="mb-3">
                    <label for="duracion" class="form-label">Duración (minutos)</label>
                    <input type="number" class="form-control" id="duracion" name="duracion">
                </div>
            </div>
            <div class="form-inline">
                <div class="mb-3">
                    <label for="premios" class="form-label">Premios</label>
                    <input type="text" class="form-control" id="premios" name="premios">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating">
                </div>
            </div>
            <div class="buttons">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <a href="index.php" class="btn btn-secondary">Volver</a>
            </div>
        </form>
    </div>

    <div class="footer">
        © 2024 - Desarrollo de Aplicaciones en Internet - Tecsup
    </div>
</body>
</html>