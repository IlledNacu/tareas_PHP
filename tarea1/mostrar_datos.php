<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center py-5">ZAPATILLERÍA</h1>
    <div class="container">
        <div class="row">
        <?php

        require 'productos.php';
        $arrayPHP = datos_productos();

        foreach ($arrayPHP as $producto) {
        ?>
                    <div class="col">
                        <div class="card my-3" style="width: 18rem; height: 35rem;">
                            <img src=<?php echo $producto['img']; ?> class="card-img-top" alt="...">
                            <div class="card-body text-end">
                                <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                                <p class="card-text"><?php echo "Precio: $" . $producto['precio'] . "<br>"; ?></p>
                            </div>

                            <div class="card-body d-flex justify-content-end">
                                <button type="button" class="btn btn-success">Comprar</button>
                                <button type="button" class="btn btn-secondary">Más información</button>
                            </div>
                        </div>
                    </div>
        <?php 
        }
        // que muestre los datos del array que devuelve la función
        // con un foreach, cada producto con su card de presentación
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>