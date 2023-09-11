<?php
// Simula una función para verificar el inicio de sesión
function userExists($username, $password) {
    // En una aplicación real, aquí se conectaría a la base de datos y se verificarían las credenciales
    // Por simplicidad, estamos usando credenciales fijas aquí.
    $validUsername = 'usuario';
    $validPassword = 'contraseña';
    
    return ($username === $validUsername && $password === $validPassword);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (userExists($username, $password)) {
        echo "Inicio de sesión exitoso. Bienvenido, $username!";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>