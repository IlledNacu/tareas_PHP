<?php
// traer de una BD una tabla, y presentarla como una tabla de bootstrap, pensando en una tabla de Oradores del TP integrador
// https://getbootstrap.com/docs/5.0/content/tables/

class Orador
{
    public $id_orador;
    public $nombre;
    public $apellido;
    private $mail;
    public $tema;
    public $fecha_alta;

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
}

$conexion = mysqli_connect("localhost", "root", "", "integrador_cac");

echo "Probando conexión a BD...<br>";

if (mysqli_connect_error()) {
    echo "No se conectó a la base de datos por el error: " . mysqli_connect_errno();
} else {
    echo "Se conectó a la base de datos<br>";
}

$consulta = mysqli_query($conexion, "SELECT * FROM oradores");
$oradores = array();
$i = 0;

while ($fila = mysqli_fetch_array($consulta)) {
    $oradores[$i] = new Orador();

    $oradores[$i]->id_orador = $fila['id_orador'];
    $oradores[$i]->nombre = $fila['nombre'];
    $oradores[$i]->apellido = $fila['apellido'];
    $oradores[$i]->setMail($fila['mail']);
    $oradores[$i]->tema = $fila['tema'];
    $oradores[$i]->fecha_alta = $fila['fecha_alta'];

    $i++;
}

// foreach ($oradores as $orador) {
//     echo "ID: " . $orador->id_orador . "<br>";
//     echo "Nombre: " . $orador->nombre . "<br>";
//     echo "Apellido: " . $orador->apellido . "<br>";
//     echo "Correo: " . $orador->getMail() . "<br>";
//     echo "Tema: " . $orador->tema . "<br>";
//     echo "Fecha de Alta: " . $orador->fecha_alta . "<br><br>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table table-danger table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Tema</th>
                <th scope="col">Fecha de Alta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($oradores as $orador) {
                echo "<tr>";
                echo '<th scope="row">'.$orador->id_orador.'</th>';
                echo '<td>'.$orador->nombre.'</td>';
                echo '<td>'.$orador->apellido.'</td>';
                echo '<td>'.$orador->getMail().'</td>';
                echo '<td>'.$orador->tema.'</td>';
                echo '<td>'.$orador->fecha_alta.'</td>';
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>