<?php
$perfiles_empleados = [
        "foto" => "../assets/img/nicolas.png",
        "nombre" => "Nicolás",
        "apellido" => "Oxovi",
        "edad" => 19,
        "fecha_nacimiento" => "26/09/2006",
        "Peso" => 75,
        "Altura" => 1.87,
        "Nacionalidad" => "España",
    ];
include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 1</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/script.js" defer></script>
</head>
<body>
    <div class="perfil">
        <img src="<?php echo $perfiles_empleados['foto']; ?>" class="imagenPerfil">
        <h2 class="nombre"><?php echo $perfiles_empleados['nombre'] . " " . $perfiles_empleados['apellido']; ?></h2>
        <p class="edad">Edad: <?php echo $perfiles_empleados['edad']; ?> años</p>
        <p class="fecha_nacimiento">Fecha de Nacimiento: <?php echo $perfiles_empleados['fecha_nacimiento']; ?></p>
        <p class="peso">Peso: <?php echo $perfiles_empleados['Peso']; ?> kg</p>
        <p class="altura">Altura: <?php echo $perfiles_empleados['Altura']; ?> m</p>
        <p class="nacionalidad">Nacionalidad: <?php echo $perfiles_empleados['Nacionalidad']; ?></p>
    </div>
</html>
<?php
include '../includes/footer.php';
?>
<style scoped>
.perfil {
    border: 2px solid #7e7e7e1f;
    padding: 10px;
    text-align: center;
    background-color: rgba(204, 204, 204, 1);
    border-radius: 10px;
    width: 500px;
    margin-left: 35%;
    margin-right: 40%;
    margin-top: 60px;
    margin-bottom: 231px;
}

.imagenPerfil {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 5px;
}

</style>