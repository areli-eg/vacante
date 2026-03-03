<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Vacantes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main-container">
    <header class="header">
        <div class="nav-buttons">
            <button type="button" class="btn-nav">Regresar</button>
            <button type="button" class="btn-nav">Refrescar</button>
        </div>
        <h1>VACANTES</h1>
        <div class="user-label">jLabel2</div>
    </header>

    <form action="index.php" method="POST" class="content">
        <div class="column left">
            <label for="vacantes">Vacantes Disponibles:</label>
            <select name="vacantes" id="vacantes" size="5">
                <option value="1">Ejemplo: Desarrollador PHP</option>
            </select>
            
            <div class="row-buttons">
                <button type="submit" name="action" value="ver_postulantes" class="btn-light-green">Ver Postulantes</button>
                <button type="submit" name="action" value="visualizar" class="btn-orange">Vizualizar Vacante</button>
            </div>
        </div>

        <div class="column center">
            <div class="form-group">
                <label>Nombre de Empresa:</label>
                <input type="text" name="empresa">
            </div>
            <div class="form-group">
                <label>Puesto de Vacante:</label>
                <input type="text" name="puesto">
            </div>
            <div class="form-group">
                <label>Ubicación:</label>
                <textarea name="ubicacion" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Sueldo:</label>
                <input type="text" name="sueldo">
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion" rows="4"></textarea>
            </div>
            <div class="align-right">
                <button type="reset" class="btn-purple">Limpiar Campos</button>
            </div>
        </div>

        <div class="column right">
            <label>Identificador Asignado</label>
            <input type="text" name="id_asignado" readonly>

            <div class="action-buttons">
                <button type="submit" name="action" value="agregar" class="btn-light-green">Agregar Vacante</button>
                <button type="submit" name="action" value="actualizar" class="btn-orange">Actualizar Vacante</button>
                <button type="submit" name="action" value="eliminar" class="btn-red">Eliminar Vacante</button>
            </div>
        </div>
    </form>
</div>

<?php
// Lógica básica para detectar qué botón se presionó
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST['action'] ?? '';
    echo "<script>alert('Acción ejecutada: " . htmlspecialchars($accion) . "');</script>";
}
?>

</body>
</html>