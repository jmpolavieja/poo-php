<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta de datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="caja">
    <?php 
        include('misclases.php');
        $persona1 = new Persona();
        $persona1->nombre = $_POST['nombre'];
        $persona1->edad = $_POST['edad'];
        $persona1->birth_year();
    ?>
    </div>
</body>
</html>