<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/script.js" defer></script>
</head>
<body>
    <header>
        <div class="header">
            <nav class="navegacion">
                <span class="logo">Nicolas</span>
                <a href="../sections/part1-profile.php">Perfil Personal</a>
                <a href="../sections/part2-music.php">Musicas Preferidas</a>
                <a href="../sections/part3-movies.php">Películas</a>
                <a href="../sections/part4-menu.php">Menús</a>
                <a href="../sections/part5-event.php">Eventos</a>
                <a href="../sections/part6-travel.php">Viaje</a>
            </nav>
        </div>
    </header>
</body>
</html>
<style scoped>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f4f4;
        }
        .header {
            background: linear-gradient(90deg, #4e54c8, #8f94fb);
            padding: 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .navegacion {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            padding: 20px 0;
        }
        .navegacion a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 8px 18px;
            border-radius: 20px;
            transition: background 0.2s, color 0.2s;
        }
        .navegacion a:hover {
            background: #fff;
            color: #4e54c8;
        }
        .logo {
            font-size: 1.6rem;
            font-weight: bold;
            color: #fff;
            margin-right: 40px;
            letter-spacing: 2px;
        }
        header {
            margin-bottom: 30px;
        }
</style>