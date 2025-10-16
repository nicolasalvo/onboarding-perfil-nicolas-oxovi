<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include 'includes/header.php';
?>

<body>
    <fieldset class="fieldCompleto">
        <h2>Bienvenido al crucigrama</h2>
        <p>En este desafío tendrás la oportunidad de poner a prueba tus conocimientos y agilidad mental. Cada pista te guiará para completar las palabras en el tablero, conectando letras y formando un conjunto de respuestas correctas. Observa con atención las definiciones y recuerda que cada palabra se entrelaza con las demás, ¡así que cada acierto te acerca más a completar el crucigrama!
        <br><br>Diviértete, piensa con cuidado y disfruta del reto. ¡Buena suerte!</p>
        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">Identificación del alumno</h3>
            </legend>
            <input type="text" placeholder="Nombre" class="identificacionNombre" required>
            <input type="text" placeholder="Apellidos" class="identificacionNombre" required>
            <input type="text" placeholder="Curso" class="identificacionCurso" required>
            <input type="email" placeholder="Correo Electrónico" class="identificacionCorreo" required>
            <p>Fecha de nacimiento:</p>
            <input type="date" placeholder="Fecha" class="identificacionFecha" required>
        </fieldset>
        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">1. ¿Con quién te gusta trabajar o sentarte en clase?</h3>
            </legend>
            <input type="text" placeholder="Nombre" class="identificacionNombre" required>
            <input type="text" placeholder="Apellidos" class="identificacionNombre" required>
            <input type="text" placeholder="Curso" class="identificacionCurso" required>
        </fieldset>
        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">2. ¿Quiénes son tus amigos dentro del grupo?</h3>
            </legend>
            <input type="text" placeholder="Nombre" class="identificacionNombre" required>
            <input type="text" placeholder="Apellidos" class="identificacionNombre" required>
            <input type="text" placeholder="Curso" class="identificacionCurso" required>
        </fieldset>
        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">3. Del 0 al 10 como sientes el ambiente de al clase</h3>
            </legend>
            <input type="number" placeholder="Escribe el número" class="fieldNumber" required min="0" max="10">
        </fieldset>
        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">4. ¿En quién confías si tienes un problema?</h3>
            </legend>
            <input type="text" placeholder="Nombre" class="identificacionNombre" required>
            <input type="text" placeholder="Apellidos" class="identificacionNombre" required>
            <input type="text" placeholder="Curso" class="identificacionCurso" required>
        </fieldset>
    </fieldset>
</body>
<?php
include 'includes/footer.php';
?>

</html>
<style scoped>
    .identificacion {
        margin: 20px;
        padding: 20px;
        border: 2px solid black;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .field {
        margin: 20px;
        padding: 20px;
        border: 2px solid black;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        width: 300px;
    }

    .fieldNumber {
        width: 150px;
    }
</style>