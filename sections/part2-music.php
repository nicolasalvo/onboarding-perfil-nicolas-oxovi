<?php
$cancion1 = "Bohemian Rhapsody 🎶";
$cancion2 = "Stairway to Heaven 🎶";
$cancion3 = "Hotel California 🎶";
$cancion4 = "Acapella 🎶";
$cancion5 = "Subeme la radio 🎶";
$cancion6 = "Dákiti 🎶";
$artista1 = "Queen";
$artista2 = "Led Zeppelin";
$artista3 = "Eagles";
$artista4 = "El Alfa, Myke Towers, Jon Z";
$artista5 = "Enrique Iglesias";
$artista6 = "Bad Bunny, Jhay Cortez";
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica PHP</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/script.js" defer></script>
</head>
<body>
    <div class="contenedorTarjetasMusica">
        <div class="tarjetaMusica">
            <img src="../assets/img/bohemian_rhapsody.jpg" class="imagenMusica1">
            <h3 class="tituloCancion"><?php echo $cancion1; ?></h3>
            <p class="artista"><?php echo $artista1; ?></p>
        </div>
        <div class="tarjetaMusica">
            <img src="../assets/img/stairway_to_heaven.jpg" class="imagenMusica1">
            <h3 class="tituloCancion"><?php echo $cancion2; ?></h3>
            <p class="artista"><?php echo $artista2; ?></p>
        </div>
        <div class="tarjetaMusica">
            <img src="../assets/img/hotel_california.jpg" class="imagenMusica1">
            <h3 class="tituloCancion"><?php echo $cancion3; ?></h3>
            <p class="artista"><?php echo $artista3; ?></p>
        </div>
    </div>
    <div class="contenedorTarjetasMusica">
        <div class="tarjetaMusica">
            <img src="../assets/img/acapella.jpg" class="imagenMusica1">
            <h3 class="tituloCancion"><?php echo $cancion4; ?></h3>
            <p class="artista"><?php echo $artista4; ?></p>
        </div>
        <div class="tarjetaMusica">
            <img src="../assets/img/subeme_la_radio.jpg" class="imagenMusica1">
            <h3 class="tituloCancion"><?php echo $cancion5; ?></h3>
            <p class="artista"><?php echo $artista5; ?></p>
        </div>
        <div class="tarjetaMusica">
            <img src="../assets/img/dakiti.jpg" class="imagenMusica1">
            <h3 class="tituloCancion"><?php echo $cancion6; ?></h3>
            <p class="artista"><?php echo $artista6; ?></p>
        </div>
    </div>
</body>
</html>
<?php
include '../includes/footer.php';
?>
<style scoped>
    .contenedorTarjetasMusica {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        margin-bottom: 20px;
    }
    .tarjetaMusica {
    border: 2px solid black;
    padding: 10px;
    margin: 10px;
    width: 400px;
    height: 400px;
    text-align: center;
    background-color: rgba(234, 214, 255, 1);
    border-radius: 15px;
}

.tarjetaMusica:hover {
    transform: scale(1.05);
    transition: transform 0.3s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.imagenMusica1 {
    width: 300px;
    height: 300px;
    border-radius: 15px;
}

.tituloCancion {
    font-size: 20px;
    font-weight: bold;
    margin-top: 10px;
}

.artista {
    font-size: 24px;
    color: rgb(0, 0, 0);
    margin-top: 5px;
}
</style>