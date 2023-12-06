<?php
// Crear un formulario que tome x cantidad de inputs y los asigue a un objeto/clase; es decir, crear un objeto cuyos valores se generen con los inputs

    class Persona {
        public $nombre;
        public $correo;
        public $telefono;
    }
    $persona = new Persona;
    // Verifico si se enviaron datos por el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $persona->nombre = $_POST["nombre"];
        $persona->correo = $_POST["correo"];
        $persona->telefono = $_POST["telefono"];
        
        echo "Nombre: " . $persona->nombre . "<br>";
        echo "Correo: " . $persona->correo . "<br>";
        echo "Teléfono: " . $persona->telefono . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
