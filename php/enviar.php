<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibimos solo los campos simplificados del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $fecha_nacimiento = htmlspecialchars($_POST['fecha_nacimiento']);
    $genero = htmlspecialchars($_POST['genero']);
    $direccion1 = htmlspecialchars($_POST['direccion1']);
    $ciudad = htmlspecialchars($_POST['ciudad']);
    $codigo_postal = htmlspecialchars($_POST['codigo_postal']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $cursos_anteriores = htmlspecialchars($_POST['cursos_anteriores']);
    $curso_seleccionado = htmlspecialchars($_POST['cursos']);

    // Diseño limpio para mostrar la confirmación
    echo "<div style='font-family: Arial, sans-serif; max-width: 550px; margin: 40px auto; padding: 25px; border: 1px solid #10b981; background-color: #f0fdf4; border-radius: 6px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);'>";
    echo "<h2 style='color: #059669; margin-top: 0;'>¡Inscripción Procesada!</h2>";
    echo "<hr style='border: 0; border-top: 1px solid #e5e7eb; margin-bottom: 15px;'>";
    echo "<p><strong>Alumno:</strong> $nombre $apellido</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Curso:</strong> $curso_seleccionado</p>";
    echo "<br><a href='../inscripcion.html' style='display: inline-block; color: #10b981; font-weight: bold; text-decoration: none;'>← Volver al formulario</a>";
    echo "</div>";
} else {
    echo "Acceso denegado.";
}
?>
