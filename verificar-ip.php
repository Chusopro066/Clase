<?php
header('Content-Type: application/json');

// Obtener la IP del usuario
$ip_usuario = $_SERVER['REMOTE_ADDR'];

// Lista de IPs permitidas
$ips_permitidas = ['192.168.1.1', '192.168.1.2', '203.0.113.42'];

// Verificar si la IP está permitida
$response = [
    'ip' => $ip_usuario,
    'permitido' => in_array($ip_usuario, $ips_permitidas),
    'mensaje' => in_array($ip_usuario, $ips_permitidas) 
        ? "Bienvenido, tienes acceso permitido." 
        : "Acceso restringido. No tienes permiso para acceder a este contenido."
];

// Devolver la respuesta en formato JSON
echo json_encode($response);
?>
