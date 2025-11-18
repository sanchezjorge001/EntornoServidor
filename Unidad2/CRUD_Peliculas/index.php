<?php
// index.php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Gestión de Películas</title>
    <!-- Enlazamos el CSS que está dentro de la carpeta views -->
    <link rel="stylesheet" href="views/style.css">
</head>
<body>
    
    <!-- BARRA DE NAVEGACIÓN (Menú Principal) -->
    <nav style="background-color: #f0f0f0; padding: 15px; border-bottom: 1px solid #ccc; margin-bottom: 0;">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center; padding: 0;">
            <!-- Logo / Título -->
            <a href="index.php" style="font-size: 1.5em; font-weight: bold; text-decoration: none; color: #333;">
                🎬 Mis Películas
            </a>

            <div>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- SI EL USUARIO ESTÁ LOGUEADO -->
                    <span style="margin-right: 15px;">Hola, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></span>
                    <a href="views/movies/list.php" style="text-decoration: none; color: #007bff; margin-right: 15px; font-weight: bold;">Catálogo</a>
                    <a href="views/auth/logout.php" style="text-decoration: none; color: #dc3545;">Cerrar Sesión</a>
                <?php else: ?>
                    <!-- SI ES UN VISITANTE -->
                    <a href="views/auth/login.php" style="text-decoration: none; color: #333; margin-right: 15px;">Login</a>
                    <a href="views/auth/register.php" style="text-decoration: none; color: #333;">Registro</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div style="background-color: #333; color: white; padding: 100px 20px; text-align: center;">
        <h1 style="font-size: 3em; margin: 0 0 20px 0;">Bienvenido al Gestor de Cine</h1>
        <p style="font-size: 1.2em; margin-bottom: 40px; color: #ccc;">
            La mejor plataforma para organizar, valorar y comentar tus películas favoritas.
        </p>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="views/movies/list.php" class="button" style="background-color: #007bff; color: white; padding: 15px 40px; text-decoration: none; border-radius: 30px; font-size: 1.2em; font-weight: bold;">
                Ver el Catálogo de Películas &rarr;
            </a>
        <?php else: ?>
            <div style="display: flex; justify-content: center; gap: 20px;">
                <a href="views/auth/login.php" class="button" style="background-color: #007bff; color: white; padding: 15px 40px; text-decoration: none; border-radius: 5px; font-size: 1.2em;">
                    Iniciar Sesión
                </a>
                <a href="views/auth/register.php" class="button" style="background-color: #28a745; color: white; padding: 15px 40px; text-decoration: none; border-radius: 5px; font-size: 1.2em;">
                    Registrarse Gratis
                </a>
            </div>
        <?php endif; ?>
    </div>

    <div class="container" style="margin-top: 50px; text-align: center;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="padding: 20px; border: 1px solid #eee; border-radius: 8px;">
                <h3>⭐ Valora</h3>
                <p>Da tu opinión y puntúa las películas del 1 al 10.</p>
            </div>
            <div style="padding: 20px; border: 1px solid #eee; border-radius: 8px;">
                <h3>💬 Comenta</h3>
                <p>Lee lo que otros opinan y deja tus propias reseñas.</p>
            </div>
            <div style="padding: 20px; border: 1px solid #eee; border-radius: 8px;">
                <h3>🚀 Gestiona</h3>
                <p>Administra el catálogo de forma sencilla y rápida.</p>
            </div>
        </div>
    </div>

</body>
</html>