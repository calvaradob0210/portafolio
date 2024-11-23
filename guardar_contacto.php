<?php
// Iniciar sesión para usar las variables de sesión
session_start();

// Incluir el archivo de conexión
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y recibir datos del formulario
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_STRING);

    // Verificar que los campos no estén vacíos
    if ($nombre && $correo && $mensaje) {
        try {
            // Insertar los datos en la tabla
            $sql = "INSERT INTO mensajes_contacto (nombre, correo, mensaje) VALUES (:nombre, :correo, :mensaje)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':mensaje', $mensaje);

            if ($stmt->execute()) {
                // Establecer mensaje de éxito en la sesión
                $_SESSION['success_message'] = "Mensaje enviado correctamente.";
            } else {
                // Establecer mensaje de error en la sesión
                $_SESSION['error_message'] = "Error al enviar el mensaje.";
            }
        } catch (PDOException $e) {
            // Manejar error en la consulta y redirigir
            $_SESSION['error_message'] = "Error en la consulta: " . $e->getMessage();
        }
    } else {
        // Redirigir si faltan campos
        $_SESSION['error_message'] = "Por favor, completa todos los campos.";
    }

    // Redirigir a index.php sin parámetros en la URL
    header("Location: index.php");
    exit(); // Termina el script después de redirigir
} else {
    // Redirigir si el método no es POST
    $_SESSION['error_message'] = "Método no permitido.";
    header("Location: index.php");
    exit();
}
