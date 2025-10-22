<?php
require __DIR__ . 'index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: index.php');
    exit();
}

$input = [
    'nombre' => $_POST['nombre'] ?? '',
    'edad' => $_POST['apellidos'] ?? '',
    'genero' => $_POST['curso'] ?? '',
    'correoElectronico' => $_POST['correoElectronico'] ?? '',
    'fechaNacimiento' => $_POST['fechaNacimiento'] ?? '',
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

if ($errors) {
    $old_field = $input;
    require __DIR__ . 'index.php';
}
?>
