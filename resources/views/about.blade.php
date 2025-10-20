<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acerca de Task Manager</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <div>
        <h1>Acerca de Task Manager</h1>
        <p>
        <strong>Task Manager</strong> es una aplicación web creada
        para ayudarte a
        organizar tus tareas diarias, mejorar tu productividad y
        mantener un equilibrio
        entre tus proyectos personales y profesionales.
        </p>

        de igual manera, podemos modificar la ruta principal del proyecto y agregar una pagina de
        inicio como la siguiente, la cual llamaremos home.blade.php :
        <div>
        <div>
        <h2>Nuestra Misión</h2>
        <p>
        Simplificar la gestión de tareas mediante una
        plataforma intuitiva, accesible y moderna
        que permita a cualquier persona organizar su tiempo de
        manera eficiente.
        </p>
        </div>
        <div>
        <h2>Nuestra Visión</h2>
        <p>
        Convertirnos en la herramienta preferida para la
        planificación personal y profesional,
        impulsando hábitos saludables de productividad.
        </p>
        </div>
        </div>
        <div>
        <h3>Contáctanos</h3>
        <p>
        Si tienes sugerencias o necesitas soporte, escríbenos a
        <a
        href="mailto:soporte@taskmanager.com">soporte@taskmanager.com</a>
        </p>
        </div>
        <div>
        <a href="{{ route('home') }}">⬅ Volver al inicio</a>
        </div>
        </div>
    </body>
</html>