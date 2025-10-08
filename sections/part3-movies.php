<?php
$horas_reservadas = 6.9;
$peliculas = [
    ["titulo" => "The Hangover", "duracion" => 2.8*60, "img" => "../assets/img/the_hangover.jpg"],
    ["titulo" => "Oppenheimer", "duracion" => 2*60, "img" => "../assets/img/oppenheimer.jpg"],
    ["titulo" => "Weapons", "duracion" => 2*60, "img" => "../assets/img/weapons.jpg"],
];
$mensaje = "Bienvenido a la maratón de películas!🎬";
$mensaje2 = "Has reservado " . -(6.9*60-($horas_reservadas*60)-(6.8*60)) . " minutos de películas.";

include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 3</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/script.js" defer></script>
</head>
<body>
    <div class="contenedorTarjetasMusica">
        <h2 class="titulo"><?php echo $mensaje; ?></h2>
        <p class="subtitulo"><?php echo $mensaje2; ?></p>
        <div class="tarjetaMusica">
            <table class="tablaPeliculas">
                <tr class="filaEncabezado">
                    <th>Titulo</th>
                    <th>Película</th>
                    <th>Duración (minutos)</th>
                </tr>
                <?php foreach ($peliculas as $pelicula): ?>
                <tr class="filaDatos">
                    <td class="celda"><p class="tituloPelicula"><?php echo $pelicula['titulo']; ?></p></td>
                    <td class="celda"><img src="<?php echo $pelicula['img']; ?>" class="imagenPelicula"></td>
                    <td class="celda"><?php echo $pelicula['duracion']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
        </div>
    </div>
</body>
</html>
<?php
include '../includes/footer.php';
?>
<style scoped>
.tablaPeliculas {
    margin-left: 20%;
    margin-right: 20%;
    width: 60%;
    margin-top: 20px;
    border-collapse: collapse;
    text-align: center;
    font-family: Arial, sans-serif;
}

.subtitulo {
    text-align: center;
    font-size: 18px;
    margin-top: -15px;
    margin-bottom: 20px;
    font-style: italic;
}

.filaEncabezado {
    border: 4px solid #4d4d4dff;
    font-size: 1.1em;
}

.imagenPelicula {
    width: 150px;
    height: auto;
    vertical-align: middle;
    margin-right: 10px;
    border-radius: 10px;
}

.tituloPelicula {
    font-weight: bold;
    font-size: 1.2em;
}

.filaDatos {
    border-bottom: 3px solid #acacacff;
    padding: 10px;
    margin: 10px;
}

.celda {
    padding: 15px;
    border-left: 3px solid #acacacff;
    border-right: 3px solid #acacacff
}

.titulo {
    text-align: center;
    margin-top: 20px;
    font-size: 24px;
    padding: 10px;
    margin-bottom: 20px;
    font-style: italic;
}
</style>