# Sociograma - Proyecto de formulario

Este proyecto es un pequeño formulario (sociograma) para recoger información de alumnos: nombre, curso, preferencias, roles, etc. Está hecho con PHP y guarda los datos en un archivo JSON.

## Estructura principal
- `index.php` — formulario HTML y plantilla que muestra los valores antiguos y los errores.
- `process.php` — valida los datos enviados por POST, guarda errores/valores y escribe en `data/sociograma.json` cuando todo está bien.
- `includes/functions.php` — funciones como: `load_json`, `save_json`, `e()` (escapa texto), `old_field()` y `field_error()`.
- `data/sociograma.json` — archivo donde se almacenan las respuestas.
- `assets/` — CSS y JS (no los uso porque me dan problemas las rutas con PHP).
- `includes/header.php` y `includes/footer.php` — partes comunes de la página.

## Probar el flujo y las validaciones
- El formulario usa validación en el servidor (en `process.php`). Si un campo es inválido, el servidor guarda los errores en la sesión y redirige de vuelta al formulario (PRG - Post/Redirect/Get). 
- Gracias a esto, cuando hay errores verás tus mensajes personalizados debajo de cada campo (no los mensajes del navegador).

Prueba rápida:
1. Deja el campo "Nombre" vacío y pulsa Enviar.
2. Verás el mensaje `El nombre es obligatorio` debajo del input.
3. Los valores que enviaste se mantienen en los inputs (rehidratación), así no tienes que reescribir todo.

## Qué cambios importantes se hicieron (rápido)
- Se usa `session` para pasar `old_field` y `errors` desde `process.php` a `index.php` cuando hay errores. Esto evita que el formulario se vuelva a enviar por accidente.
- `old_field()` ahora escapa el valor con `e()` (que usa `htmlspecialchars`) antes de devolverlo para evitar que el HTML se rompa o haya problemas de seguridad.
- `field_error()` ahora devuelve un párrafo con la clase `.field-error` (el texto también se escapa). El estilo está en `index.php` para ser simple.
- Se añadió `novalidate` al formulario para desactivar la validación nativa del navegador y poder mostrar los errores del servidor.
- Se arreglaron algunas entradas con atributos `class` duplicados (ahora las clases están combinadas correctamente).




