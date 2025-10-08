<?php
$inscripcion = 250;
$taller_opcional = 50;
$material = 30;
$imagenFondo = "../assets/img/fondo_evento.jpg";
include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 5</title>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.prod.js"></script>
</head>

<body>
    <h2 class="titulo">Elige tu tipo de inscripción</h2>
    <div class="contenedorTickets">
        <div class="ticket">
            <h2>Inscripción con taller</h2>
            <p class="textoPagar"><b>Inscripción:</b> <?php echo $inscripcion; ?> €</p>
            <p class="textoPagar"><b>Taller opcional:</b> <?php echo $taller_opcional; ?> €</p>
            <p class="textoPagar"><b>Material: </b><?php echo $material; ?> €</p>
            <hr>
            <h3 class="pagar">Total a pagar: $<?php echo $inscripcion + $taller_opcional + $material; ?></h3>
            <button class="btnPagar" onclick="alert('¡El pago ha sido completado con exito!')">Pagar</button>
        </div>
        <div class="ticket">
            <h2>Inscripción sin taller</h2>
            <p class="textoPagar"><b>Inscripción:</b> <?php echo $inscripcion; ?> €</p>
            <p class="textoPagar"><b>Material: </b><?php echo $material; ?> €</p>
            <hr>
            <h3 class="pagar">Total a pagar: $<?php echo $inscripcion + $material; ?></h3>
            <button class="btnPagar" onclick="alert('¡El pago ha sido completado con exito!')">Pagar</button>
        </div>
    </div>
</body>

</html>
<?php
include '../includes/footer.php';
?>

<style scoped>
    .contenedorTickets {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 40px;
        margin-top: 40px;
        margin-bottom: 237px;
    }
    .ticket {
        border: 3px solid #4e54c8ff;
        padding: 20px;
        text-align: center;
        background-color: #4e54c850;
        border-radius: 10px;
        width: 400px;
        font-family: Arial, sans-serif;
        height: 400px;
    }
    .pagar{
        margin-top: 50px;
    }

    .btnPagar {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .btnPagar:hover {
        background-color: #1ca720ff;
    }

    .textoPagar {
        font-size: 18px;
        margin-top: 25px;
    }

    .titulo {
        text-align: center;
        margin-top: 20px;
        font-family: Arial, sans-serif;
    }
</style>