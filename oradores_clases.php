<?php

$numerador = 11;

class Orador{
    public $id_orador;
    public $nombre;
    public $apellido;
    private $mail;
    public $tema;
    public $fecha_alta;

    public function getMail(){
        return $this->mail;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }
}

$osvaldo = new Orador;
$osvaldo->id_orador = $numerador;
$osvaldo->nombre = "Osvaldo";
$osvaldo->apellido = "Laport";
$osvaldo->setMail("osvaldo.laport@hotmail.com");
$osvaldo->tema = "El romance en las telenovelas";
$osvaldo->fecha_alta = date('Y-m-d H:i:s'); // función que devuelve la fecha actual

$numerador++;
$miranda = new Orador;
$miranda->id_orador = $numerador;
$miranda->nombre = "Miranda";
$miranda->apellido = "Pop";
$miranda->setMail("m.pop@yahoo.com.ar");
$miranda->tema = "Pop para divertirse";
$miranda->fecha_alta = date('Y-m-d H:i:s');

$numerador++;
$erica = new Orador;
$erica->id_orador = $numerador;
$erica->nombre = "Erica";
$erica->apellido = "Rivas";
$erica->setMail("eri.ri@gmail.com");
$erica->tema = "Obsesión no es amor";
$erica->fecha_alta = date('Y-m-d H:i:s');

$numerador++;
$leonardo = new Orador;
$leonardo->id_orador = $numerador;
$leonardo->nombre = "Leonardo";
$leonardo->apellido = "Sbaraglia";
$leonardo->setMail("leonsbg@gmail.com");
$leonardo->tema = "Cómo construir una carrera versátil";
$leonardo->fecha_alta = date('Y-m-d H:i:s');

$numerador++;
$cecilia = new Orador;
$cecilia->id_orador = $numerador;
$cecilia->nombre = "Cecilia";
$cecilia->apellido = "Dopazo";
$cecilia->setMail("ceci_d@yahoo.com.ar");
$cecilia->tema = "Tanguito";
$cecilia->fecha_alta = date('Y-m-d H:i:s');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Oradores</h1>
    <?php

        echo "<pre>";
        var_dump($osvaldo);
        echo "</pre>";

        echo "<pre>";
        var_dump($miranda);
        echo "</pre>";

        echo "<pre>";
        var_dump($erica);
        echo "</pre>";

        echo "<pre>";
        var_dump($leonardo);
        echo "</pre>";

        echo "<pre>";
        var_dump($cecilia);
        echo "</pre>";
    ?>
</body>
</html>