<?php
$menu_favorito = [
    "foto" => "../assets/img/menuUno.jpg",
    "entrada" => "Bruschetta 🍅",
    "plato_principal" => "Risotto de Champiñones 🍄",
    "postre" => "Tiramisú 🍰",
    "precio" => 25.99
];
$menu_favorito2 = [
    "foto" => "../assets/img/menuDos.jpg",
    "entrada" => "Ensalada Caprese 🥗",
    "plato_principal" => "Pasta al Pesto 🌿",
    "postre" => "Panna Cotta 🍮",
    "precio" => 22.95
];
include '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 4</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/tabs.js" defer></script>
</head>

<body>
    <div class="contenedorTarjetasMenu">
        <div class="tarjetaMenu" click="toggleDetails">
            <img src="<?php echo $menu_favorito['foto']; ?>" class="imagenMenu">
            <p class="entrada"><b>Entrada: </b><?php echo $menu_favorito['entrada'] ?></p>
            <p class="plato_principal"><b>Primero: </b><?php echo $menu_favorito['plato_principal'] ?></p>
            <p class="postre"><b>Postre: </b><?php echo $menu_favorito['postre'] ?></p>
            <p class="precio"><b>Precio final: </b><?php echo $menu_favorito['precio'] ?>€</p>
            <button class="btnDetalles" onclick="toggleDetails(this)">Ver Alérgenos</button>
        </div>
        <div class="tarjetaMenu">
            <img src="<?php echo $menu_favorito2['foto']; ?>" class="imagenMenu">
            <p class="entrada"><b>Entrada: </b><?php echo $menu_favorito2['entrada'] ?></p>
            <p class="plato_principal"><b>Primero: </b><?php echo $menu_favorito2['plato_principal'] ?></p>
            <p class="postre"><b>Postre: </b><?php echo $menu_favorito2['postre'] ?></p>
            <p class="precio"><b>Precio final: </b><?php echo $menu_favorito2['precio'] ?>€</p>
            <button class="btnDetalles" onclick="toggleDetails(this)">Ver Alérgenos</button>
        </div>
    </div>
</body>

</html>
<?php
include '../includes/footer.php';
?>
<script>
    function toggleDetails(button) {
        let tarjeta = button.parentElement;
        let alergenos = tarjeta.querySelector('.alergenos');
        if (!alergenos) {
            alergenos = document.createElement('div');
            alergenos.className = 'alergenos';
            alergenos.innerHTML = `
            <p><strong>Bruschetta:</strong> Gluten, Soja, Lácteos</p>
            <p><strong>Risotto de Champiñones:</strong> Sulfitos</p>
            <p><strong>Tiramisú:</strong> Gluten, Soja, Cafeína</p>
            `;
            alergenos.style.marginTop = '10px';
            tarjeta.appendChild(alergenos);
        }
        if (alergenos.style.display === 'none' || alergenos.style.display === '') {
            alergenos.style.display = 'block';
            button.textContent = 'Ocultar Alérgenos';
        } else {
            alergenos.style.display = 'none';
            button.textContent = 'Ver Alérgenos';
        }
    }
</script>
<style scoped>
    .tarjetaMenu {
        border: 2px solid black;
        padding: 10px;
        margin: 0px;
        width: 600px;
        height: 720px;
        text-align: center;
        background-color: rgba(235, 235, 235, 1);
        border-radius: 25px;
    }

    .imagenMenu {
        width: 600px;
        height: 400px;
        border-radius: 35px;
    }

    .tarjetaMenu:hover {
        transform: scale(1.05);
        transition: transform 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .contenedorTarjetasMenu {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        padding: 20px 0;
    }

    .btnDetalles {
        padding: 10px 20px;
        background-color: #4e54c8;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }
</style>