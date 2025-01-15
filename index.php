<?php
// Obtener la IP del usuario
$ip_usuario = $_SERVER['REMOTE_ADDR'];

// Lista de IPs permitidas
$ips_permitidas = ['192.168.1.1', '192.168.1.2', '203.0.113.42'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Nacho</title>
</head>
<body>
  <?php if (in_array($ip_usuario, $ips_permitidas)): ?>
    <!-- Contenido para IPs permitidas -->
    <div id="title">
      Bienvenido, IP permitida.
    </div>
    <div id="hub-menu">
      <div id="custom-url">
        <input id="url-input" placeholder="https://example.com" type="url">
        <button id="url-btn" onclick="loadCustomGame()">Custom Url</button>
      </div>
    </div>
    <div id="game-menu">
      <ul style="">
        <li><button id="fullscreen-btn" onclick="toggleFullscreen()">Fullscreen</button></li>
      </ul>
    </div>
    <div id="game-container">
      <!-- Contenido del juego -->
    </div>
  <?php else: ?>
    <!-- Contenido para IPs no permitidas -->
    <h1>Acceso restringido</h1>
    <p>Tu dirección IP (<?php echo $ip_usuario; ?>) no tiene acceso a esta página.</p>
  <?php endif; ?>
</body>
</html>
