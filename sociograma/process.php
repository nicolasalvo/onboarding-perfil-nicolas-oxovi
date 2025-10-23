<?php
require __DIR__ . 'index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: index.php');
    exit();
}

$input = [
    'nombre' => $_POST['nombre'] ?? '',
    'apellidos' => $_POST['apellidos'] ?? '',
    'curso' => $_POST['curso'] ?? '',
    'correoElectronico' => $_POST['correoElectronico'] ?? '',
    'fechaNacimiento' => $_POST['fechaNacimiento'] ?? '',
    'preguntaOpcion' => $_POST['preguntaOpcion'] ?? null,
    'numeroGrado' => $_POST['numeroGrado'] ?? '',
    'numeroEstres' => $_POST['numeroEstres'] ?? '',

];

$errors = [];
if (empty($input['nombre'])) {
    $errors[] = 'El nombre es obligatorio.';
}
if (empty($input['edad'])) {
    $errors[] = 'Los apellidos son obligatorios.';
}
if (empty($input['genero'])) {
    $errors[] = 'El curso es obligatorio.';
}
if (empty($input['correoElectronico']) || !filter_var($input['correoElectronico'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'El correo electrónico es obligatorio y debe ser válido.';
}
if (empty($input['fechaNacimiento'])) {
    $errors[] = 'La fecha de nacimiento es obligatoria.';
}
if ($input['preguntaOpcion'] === null) {
    $errores['preguntaOpcion'] = 'Por favor, elige una respuesta para la pregunta.';
}
if ($input['numeroGrado'] === '' ||  $input['numeroGrado'] < 0 || $input['numeroGrado'] > 100) {
    $errors[] = 'El grado de satisfacción debe ser un número entre 0 y 100.';
}
if ($input['numeroEstres'] === '' ||  $input['numeroEstres'] < 1 || $input['numeroEstres'] > 5) {
    $errors[] = 'El nivel de estrés debe ser un número entre 1 y 5.';
}

if ($errors) {
    $old_field = $input;
    require __DIR__ . 'index.php';
}
?>
