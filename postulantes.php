<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postulados</title>
    <link rel="stylesheet" href="estilos_postulados.css">
</head>
<body>

<div class="contenedor-principal">
    <header class="header-azul">
        <div class="botones-navegacion">
            <button type="button" onclick="window.location.href='index.php'" class="btn-regresar">Regresar</button>
        </div>
        <div class="titulo-central">POSTULADOS</div>
        <div class="usuario-label">jLabel2</div>
    </header>

    <div class="cuerpo-tabla">
        <table class="tabla-datos">
            <thead>
                <tr>
                    <th>Vacante</th>
                    <th>Correo</th>
                    <th>Matricula</th>
                    <th>Carrera</th>
                    <th>Nivel Académico</th>
                    <th>CV (PDF)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ejemplo de datos (esto vendría de tu base de datos)
                $postulados = [
                    ["Vacante" => "Sistemas", "Correo" => "ejemplo@uax.edu", "Mat" => "2024001", "Carrera" => "Ing. Software", "Nivel" => "Licenciatura", "PDF" => "ver_cv.pdf"],
                    // Agrega más filas aquí
                ];

                if (!empty($postulados)) {
                    foreach ($post_data as $fila) {
                        // Renderizar filas si existen datos
                    }
                } else {
                    // Filas vacías para mantener el estilo de la imagen si no hay datos
                    for ($i = 0; $i < 10; $i++) {
                        echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>