<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screensaga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Encabeszado Theme -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/clientheader.css') ?> ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
        <a href="#" class="btn">Sing up</a>
    </header>

    <section>
    <h2 class="heading">Series</h2>
        <!-- Movies -->
    <div class="movies-container">
        <?php foreach ($series as $value) : ?>
            <div class="card">
                <img src="<?php echo $value['portada']; ?>" class="poster" alt="<?php echo $value['titulo']; ?>">
                <div class="details">
                    <img src="<?php echo $value['logo']; ?>" class="imgcontent" alt="Logo de la película">
                    <span class="tags"><?php echo $value['categoria']; ?></span>
                    <span class="tags"><?php echo $value['creador']; ?></span>
                    <span class="tags">Temporada: <?php echo $value['temporada']; ?></span>
                    <p class="info"><?php echo $value['descripcion']; ?></p>
                    <a id="videoFrame" href="<?php echo base_url('verseries?id=' . $value['id_series']); ?>" class="play"><i class="bx bx-play"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </section>
</body>