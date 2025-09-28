<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div>
        <button class="btn btn-primary" value="Registra">Registrar</button>
        <h1 class="text-center mt-4">Lista de Alumnos Matriculados</h1>
    </div>

    <div class="container mt-5">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($matriculas as $fila) {
                    // echo $fila->nombre_alumno . " ". $fila->ape_paterno .  " ". $fila->ape_materno . " ". $fila->estado .;
                    echo "<tr>";
                    echo "<td>" . $fila->nombre_alumno . "</td>";
                    echo "<td>" . $fila->ape_paterno . "</td>";
                    echo "<td>" . $fila->ape_materno . "</td>";
                    echo "<td>" . $fila->estado . "</td>";
                }
                ?>
            </tbody>

        </table>
    </div>


</body>

</html>