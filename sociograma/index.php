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
        <h2>Bienvenido al sociograma</h2>
        <p>Hoy realizaremos una actividad para conocer mejor cómo nos relacionamos dentro del grupo. El objetivo es identificar amistades, preferencias, apoyos y formas de comunicación entre todos. No hay respuestas “buenas” o “malas”: lo importante es ser honestos y respetuosos al marcar a las personas con las que te sientes más cómodo, con quienes trabajas mejor o en quienes confías.
            <br><br>La información que recojamos nos ayudará a fortalecer la convivencia, mejorar el trabajo en equipo y entender mejor las dinámicas del grupo. ¡Participa con tranquilidad y sin presiones!
        </p>
        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">Identificación del alumno</h3>
            </legend>
            <div class="questionBlock">
                <p>Nombre *</p>
                <label class="sr-only">Nombre</label>
                <input name="nombre" class="inputQuestion" type="text" placeholder="Nombre" class="identificacionNombre" required>
            </div>
            <div class="questionBlock">
                <p>Apellidos *</p>
                <label class="sr-only">Apellidos</label>
                <input name="apellidos" class="inputQuestion" type="text" placeholder="Apellidos" class="identificacionNombre" required>
            </div>
            <div class="questionBlock">
                <p>Curso *</p>
                <label class="sr-only">Curso</label>
                <input name="curso" class="inputQuestion" type="text" placeholder="Curso" class="identificacionCurso" required>
            </div>
            <div class="questionBlock">
                <p>Correo electrónico *</p>
                <label class="sr-only">Correo Electrónico</label>
                <input name="correoElectronico" class="inputQuestion" type="email" placeholder="Correo Electrónico" class="identificacionCorreo" required>
            </div>
            <div class="questionBlock">
                <p>Fecha de nacimiento *</p>
                <input name="fechaNacimiento" class="inputQuestion" type="date" placeholder="Fecha" class="identificacionFecha" required>
            </div>
        </fieldset>
        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">Preferencias de colaboración</h3>
            </legend>
            <div class="questionBlock">
                <h4 class="fieldQuestion">1. ¿Con quién te gusta trabajar o sentarte en clase?</h4>
                <input name="nombre" class="inputQuestion" type="text" placeholder="Nombre" class="identificacionNombre" required>
                <input name="apellidos" class="inputQuestion" type="text" placeholder="Apellidos" class="identificacionNombre" required>
                <input name="curso" class="inputQuestion" type="text" placeholder="Curso" class="identificacionCurso" required>
            </div>

            <div class="questionBlock">
                <h4 class="fieldQuestion">2. ¿Quiénes son tus amigos dentro del grupo?</h4>
                <input name="nombre" class="inputQuestion" type="text" placeholder="Nombre" class="identificacionNombre" required>
                <input name="apellidos" class="inputQuestion" type="text" placeholder="Apellidos" class="identificacionNombre" required>
                <input name="curso" class="inputQuestion" type="text" placeholder="Curso" class="identificacionCurso" required>
            </div>

            <div class="questionBlock">
                <h4 class="fieldQuestion">3. ¿En quién confías si tienes un problema?</h4>
                <input name="nombre" class="inputQuestion" type="text" placeholder="Nombre" class="identificacionNombre" required>
                <input name="apellidos" class="inputQuestion" type="text" placeholder="Apellidos" class="identificacionNombre" required>
                <input name="curso"  class="inputQuestion" type="text" placeholder="Curso" class="identificacionCurso" required>
            </div>

            <div class="questionBlock">
                <h4 class="fieldQuestion">4. Si tuvieras que decir que clase te motiva más. ¿Cuál sería?</h4>
                <div>
                    <input name="preguntaOpcion" type="radio" id="EntornServidor" class="identificacionNombre" value="Entorn Servidor">
                    <label for="EntornoServidor">Entorn Servidor</label>
                </div>
                <div>
                    <input name="preguntaOpcion" type="radio" id="Desplegament Aplicacions" class="identificacionNombre" value="Desplegament Aplicacions">
                    <label for="DesplegamentAplicacions">Desplegament Aplicacions</label>
                </div>
                <div>
                    <input name="preguntaOpcion" type="radio" id="EntornClient" class="identificacionNombre" value="Entorn Client">
                    <label for="EntornClient">Entorn Client</label>
                </div>
                <div>
                    <input name="preguntaOpcion" type="radio" id="DissenyInterficies" class="identificacionNombre" value="Disseny Interficies">
                    <label for="DissenyInterficies">Disseny Interfícies</label>
                </div>
                <div>
                    <input name="preguntaOpcion" type="radio" id="ItinerariPersonal" class="identificacionNombre" value="Itinerari Personal">
                    <label for="ItinerariPersonal">Itinerari Personal Ocupabilitat (IPO)</label>
                </div>
            </div>

        </fieldset>

        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">Rol y Habilidades</h3>
            </legend>
            <div class="questionBlock">
                <h4 class="fieldQuestion">¿Cuál es tu rol preferido en clase?</h4>
                <div>
                    <input name="preguntasOpcion" type="radio" id="EntornServidor" class="identificacionNombre" value="Entorn Servidor">
                    <label for="EntornoServidor">Frontend</label>
                </div>
                <div>
                    <input name="preguntasOpcion" type="radio" id="Desplegament Aplicacions" class="identificacionNombre" value="Desplegament Aplicacions">
                    <label for="DesplegamentAplicacions">Backend</label>
                </div>
                <div>
                    <input name="preguntasOpcion" type="radio" id="EntornClient" class="identificacionNombre" value="Entorn Client">
                    <label for="EntornClient">Fullstack</label>
                </div>
                <div>
                    <input name="preguntasOpcion" type="radio" id="DissenyInterficies" class="identificacionNombre" value="Disseny Interficies">
                    <label for="DissenyInterficies">Devops</label>
                </div>
            </div>

            <div class="questionBlock">
                <h4 class="fieldQuestion">¿Cuál es tu rol main?</h4>
                <div>
                    <input name="preguntasOpcion" type="radio" id="EntornServidor" class="identificacionNombre" value="Entorn Servidor">
                    <label for="EntornoServidor">Frontend</label>
                </div>
                <div>
                    <input name="preguntasOpcion" type="radio" id="Desplegament Aplicacions" class="identificacionNombre" value="Desplegament Aplicacions">
                    <label for="DesplegamentAplicacions">Backend</label>
                </div>
                <div>
                    <input name="preguntasOpcion" type="radio" id="EntornClient" class="identificacionNombre" value="Entorn Client">
                    <label for="EntornClient">Fullstack</label>
                </div>
                <div>
                    <input name="preguntasOpcion" type="radio" id="DissenyInterficies" class="identificacionNombre" value="Disseny Interficies">
                    <label for="DissenyInterficies">Devops</label>
                </div>
            </div>

            <div class="questionBlock">
                <h4 class="fieldQuestion">Del 0 al 100, cuál es tu grado se satisfacción en el proyecto grupal.</h4>
                <input name="numeroGrado" class="inputQuestion fieldNumber" type="number" min="0" max="100" placeholder="Número entre 0 y 100" class="identificacionNumero" required>
            </div>

        </fieldset>

        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">Dinámica y Comunicación</h3>
            </legend>
            <div class="questionBlock">
                <h4 class="fieldQuestion">¿Qué tipo de comunicación prefieres para trabajar en equipo?</h4>
                <div>
                    <input name="preguntaOpcion" type="radio" id="EntornServidor" class="identificacionNombre" value="Entorn Servidor">
                    <label for="EntornoServidor">Síncrona (en tiempo real, como videollamadas o reuniones)</label>
                </div>
                <div>
                    <input name="preguntaOpcion" type="radio" id="Desplegament Aplicacions" class="identificacionNombre" value="Desplegament Aplicacions">
                    <label for="DesplegamentAplicacions">Asíncrona (mensajes, correos o tareas que se responden después)</label>
                </div>
                <div>
                    <input name="preguntaOpcion" type="radio" id="EntornClient" class="identificacionNombre" value="Entorn Client">
                    <label for="EntornClient">Mixta (una combinación de ambas)</label>
                </div>
            </div>

            <div class="questionBlock">
                <h4 class="fieldQuestion">¿Qué herramientas sueles utilizar o prefieres para organizar el trabajo en equipo? (puedes seleccionar más de una)</h4>
                <checkboxes>
                    <div>
                        <input name="preguntaOpcion" type="checkbox" id="Herramienta1" class="identificacionCheckbox" value="Herramienta1">
                        <label for="Herramienta1">GitHub</label>
                    </div>
                    <div>
                        <input name="preguntaOpcion" type="checkbox" id="Herramienta2" class="identificacionCheckbox" value="Herramienta2">
                        <label for="Herramienta2">Discord</label>
                    </div>
                    <div>
                        <input name="preguntaOpcion" type="checkbox" id="Herramienta3" class="identificacionCheckbox" value="Herramienta3">
                        <label for="Herramienta3">Slack</label>
                    </div>
                    <div>
                        <input name="preguntaOpcion" type="checkbox" id="Herramienta4" class="identificacionCheckbox" value="Herramienta4">
                        <label for="Herramienta4">Microsoft Teams</label>
                    </div>
                    <div>
                        <input name="preguntaOpcion" type="checkbox" id="Herramienta5" class="identificacionCheckbox" value="Herramienta5">
                        <label for="Herramienta5">Google Drive</label>
                    </div>
                    <div>
                        <input name="preguntaOpcion" type="checkbox" id="Herramienta6" class="identificacionCheckbox" value="Herramienta6">
                        <label for="Herramienta6">Otra (especificar)</label>
                        <input name="preguntaOpcion" class="inputQuestion" type="text" placeholder="Especificar otra herramienta" class="identificacionOtraHerramienta">
                    </div>
            </div>

        </fieldset>

        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">Organización y bienestar</h3>
            </legend>

            <div class="questionBlock">
                <h4 class="fieldQuestion">¿Cómo valorarías tu nivel de gestión del tiempo al trabajar en proyectos o tareas de grupo?</h4>
                <div>
                    <input name="preguntasOpcion" type="radio" id="EntornServidor" class="identificacionNombre" value="Entorn Servidor">
                    <label for="EntornoServidor">Baja (me cuesta organizarme o cumplir plazos)</label>
                </div>
                <div>
                    <input name="preguntasOpcion" type="radio" id="Desplegament Aplicacions" class="identificacionNombre" value="Desplegament Aplicacions">
                    <label for="DesplegamentAplicacions">Media (a veces me organizo bien, pero puedo mejorar)</label>
                </div>
                <div>
                    <input name="preguntasOpcion" type="radio" id="EntornClient" class="identificacionNombre" value="Entorn Client">
                    <label for="EntornClient">Alta (soy constante y cumplo los tiempos con facilidad)</label>
                </div>
            </div>

            <div class="questionBlock">
                <h4 class="fieldQuestion">En una escala del 1 al 5, donde 1 es “nada de estrés” y 5 es “mucho estrés”, ¿cómo te has sentido durante este proyecto o trabajo en equipo?</h4>
                <div>
                    <input name="numeroEstres" class="inputQuestion fieldNumber" type="number" min="1" max="5" placeholder="Número entre 1 y 5" class="identificacionNumero" required>
                </div>
            </div>

        </fieldset>

        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">Logística</h3>
            </legend>

            <div class="questionBlock">
                <h4 class="fieldQuestion">Elige el color principal de tu equipo (por ejemplo, para representar tu grupo o identificarte visualmente)</h4>
                <div>
                    <input name="nombre" type="color" id="EntornServidor" class="identificacionNombre" value="Entorn Servidor">
                </div>
            </div>

            <div class="questionBlock">
                <h4 class="fieldQuestion">¿Qué sistema operativo prefieres usar para trabajar o estudiar?</h4>
                <div>
                    <select class="inputQuestion" name="sistemaOperativo" required>
                        <option value="">Selecciona un sistema operativo</option>
                        <option value="windows">Windows</option>
                        <option value="macos">macOS</option>
                        <option value="linux">Linux</option>
                    </select>
                </div>
            </div>

        </fieldset>

        <fieldset class="field">
            <legend>
                <h3 class="fieldTitulo">Logística</h3>
            </legend>

            <div class="questionBlock">
                <h4 class="fieldQuestion">¿Tienes algun comentario o observacion que quieras decir?</h4>
                <div>
                    <textarea name="comentario" id="comentarioObservacion" placeholder="Observaciones o comentarios..."></textarea>
                </div>
            </div>

        </fieldset>

        <button class="enviar">Enviar</button>

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

    .enviar {
        margin: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: rgba(9, 65, 110, 1);
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .enviar:hover {
        background-color: rgba(32, 93, 143, 1);
    }

    .identificacionCheckbox {
        margin-right: 8px;
        margin-bottom: 10px;
    }

    .fieldTitulo {
        color: rgba(9, 65, 110, 1);
    }

    .field {
        margin: 20px;
        padding: 20px;
        border: 2px solid black;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        gap: 12px;
        width: 90%;
        border-color: rgba(32, 93, 143, 1);
        background-color: rgba(179, 179, 179, 0.16);
    }

    .fieldNumber {
        width: 150px;
    }

    .fieldQuestion {
        margin: 0 0 6px 0;
        font-weight: 600;
    }

    .questionBlock {
        display: flex;
        flex-direction: column;
        gap: 6px;
        width: 100%;
    }

    .inputQuestion {
        padding: 8px 10px;
        border: 1px solid #aaa;
        border-radius: 10px;
        width: 100%;
        box-sizing: border-box;
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    textarea {
        width: 100%;
    }
</style>