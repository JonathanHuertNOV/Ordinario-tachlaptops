<?php
include("conexion.php");

if (isset($_POST['send'])) {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['password']) &&
        !empty($_POST['email']) &&
        !empty($_POST['phone'])
    ) {
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $fecha = date("Y-m-d");

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conex->prepare("INSERT INTO datos (nombre, contraseña, email, telefono, fecha) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $hashed_password, $email, $phone, $fecha);

        if ($stmt->execute()) {
            echo '<h3 class="success">Tu registro se completó correctamente</h3>';
        } else {
            echo '<h3 class="error">Tu registro no se pudo completar</h3>';
        }

        $stmt->close();
    } else {
        echo '<h3 class="error">Tienes que llenar todos los campos</h3>';
    }
}
?>

<a href="index.html" style="display:block; text-align:center; margin-top:20px; color:#00ffff;">Volver al formulario</a>