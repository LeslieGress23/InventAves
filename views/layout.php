<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
<div class="menu">
        <a href="#agregar">Agregar</a>
        <a href="#ventas">Costos</a>
        <a href="#perdidas">Existencias</a>
        <a href="#existencias">Perdidas</a>
        <a href="#existencias">Ventas</a>
        <a href="#admin">Admin</a>
    </div>

    <div class="contenedor-app">
        <?php echo $contenido; ?>
        <!--<div class="imagen"></div>
        <div class="app">
        
        </div>-->
    </div> 
            
</body>
</html>