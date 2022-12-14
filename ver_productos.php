<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Listado de clases</h3>
        <?php
        include("conectando.php");
        $consulta = mysqli_query($listado, "SELECT * FROM clases");
        while ($agenda = mysqli_fetch_assoc($consulta)) { ?>
            <div class="agendado">
                <p><?php echo $agenda['unidad'] ?></p>
                <p><?php echo $agenda['fecha'] ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>