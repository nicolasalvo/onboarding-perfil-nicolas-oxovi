<?php
$dias = 7;
$destino = "Japón";
$imagen_tickets = "../assets/img/tickets.png";
include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 class="titulo"><u>Mi próximo viaje</u></h2>
    <div class="contenedorTarjeta" onclick="girarTarjeta(this)">
        <div class="tarjetaSinContenido">
            <h2>Dale click para descubrir mi siguiente viaje!</h2>
        </div>
        <div class="tarjetaConContenido">
            <h2>¡Estoy muy emocionado por mi próximo viaje a <?php echo $destino?>!✨</h2>
            <p>Estaré allí durante <?php echo $dias?> días, explorando su cultura, gastronomía y paisajes únicos. 🌸</p>
            <p>Planeo visitar el famoso templo Senso-ji en Tokio 🏯.</p>
            <p>Caminaré por las calles iluminadas de Shibuya 🌆.</p>
            <p>Disfrutaré del sushi más fresco 🍣 y relajarme en un tradicional onsen ♨️.</p>
            <p>También quiero conocer Kioto y sus templos llenos de historia ⛩️.</p>
            <p>Quizás vea el majestuoso Monte Fuji 🗻.</p>
            <p>¡Será una aventura inolvidable llena de descubrimientos y momentos mágicos! 🎌✈️💫</p>
            <img src="<?php echo $imagen_tickets ?>" class="tickets">
        </div>
    </div>
</body>

</html>
<?php
include '../includes/footer.php';
?>
<style scoped>
    .titulo {
        text-align: center;
        margin-top: 40px;
        font-family: Arial, sans-serif;
    }

    .contenedorTarjeta {
        width: 800px;
        height: 530px;
        margin-left: 29%;
        margin-right: 40%;
        margin-top: 40px;
        margin-bottom: 143px;
        perspective: 800px;
        position: relative;
        cursor: pointer;
    }

    .tarjetaSinContenido {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        backface-visibility: hidden;
        border: 2px solid #7e7e7e1f;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        background-color: rgba(204, 204, 204, 1);
        transition: transform 0.6s;
        text-align: center;
        padding: 10px;
    }

    .tickets {
        width: 400px;
        height: auto;
        border-radius: 10px;
    }

    .tarjetaConContenido {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        backface-visibility: hidden;
        border: 2px solid #7e7e7e1f;
        border-radius: 10px;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        background-color: rgba(204, 204, 204, 1);
        transition: transform 0.6s;
        text-align: center;
        padding: 10px;
        transform: rotateY(180deg);
    }

    .contenedorTarjeta.girada .tarjetaSinContenido {
        transform: rotateY(180deg);
    }

    .contenedorTarjeta.girada .tarjetaConContenido {
        transform: rotateY(0deg);
    }
</style>
<script>
    function girarTarjeta(element) {
        element.classList.toggle('girada');
    }
</script>