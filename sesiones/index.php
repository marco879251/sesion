<?php
// Iniciar la sesión
session_start();

// Comprobar si la variable de sesión 'contador' está definida
if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;
} else {
    $_SESSION['contador'] = 1;
}

// Mostrar el valor del contador
echo "Has visitado esta página " . $_SESSION['contador'] . " veces.";
?>
