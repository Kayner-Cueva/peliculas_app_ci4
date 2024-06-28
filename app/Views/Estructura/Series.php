<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/series.css') ?> ">
    <title>Series</title>
</head>
<body>
    <header>
        <a href="#" class="logo">
            <i class="bx bxs-movie"></i>Screensaga
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="<?php echo base_url()?> ClienteController/index" class="home-active">Home</a></li>
            <li><a href="<?php echo base_url()?> peliculas">Peliculas</a></li>
            <li><a href="<?php echo base_url()?> series">Series</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="<?php echo base_url()?> tvshow">Tv Show</a></li>
        </ul>
    </header>
    <style>
        body{
            background: url('<?= $series['fondo']?>');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</body>
</html>