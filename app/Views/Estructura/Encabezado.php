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
    <!-- Home -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <?php foreach ($peliculas as $pelicula) : ?>
                <div class="swiper-slide container">
                    <img src="<?php echo $pelicula['fondo']; ?>" alt="">
                    <div class="home-text">
                        <br><br><br><br><br><br>
                        <h1><?php echo $pelicula['titulo']; ?></h1>
                        <h4>
                            <p><?php echo $pelicula['descripcion']; ?></p>
                        </h4>
                        <h4>Creadores: <p><?php echo $pelicula['creador']; ?></p>
                        </h4>
                        <h4>Generos: <p><?php echo $pelicula['categorias']; ?></p>
                        </h4>
                        <a id="videoFrame" href="<?php echo base_url('verpeliculas?id=' . $pelicula['id_peliculas']); ?>" class="play"><i class="bx bx-play"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <section>
    <h2 class="heading">Peliculas</h2>
        <!-- Movies -->
    <div class="movies-container">
        <?php foreach ($peliculas as $pelicula) : ?>
            <div class="card">
                <img src="<?php echo $pelicula['portada']; ?>" class="poster" alt="<?php echo $pelicula['titulo']; ?>">
                <div class="details">
                    <img src="<?php echo $pelicula['logo']; ?>" class="imgcontent" alt="Logo de la película">
                    <span class="tags"><?php echo $pelicula['categorias']; ?></span>
                    <span class="tags"><?php echo $pelicula['creador']; ?></span>
                    <p class="info"><?php echo $pelicula['descripcion']; ?></p>
                    <a id="videoFrame" href="<?php echo base_url('verpeliculas?id=' . $pelicula['id_peliculas']); ?>" class="play"><i class="bx bx-play"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </section>

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

    <section>
    <h2 class="heading">TV SHOW</h2>
        <!-- Movies -->
    <div class="movies-container">
        <?php foreach ($tvshow as $value) : ?>
            <div class="card">
                <img src="<?php echo $value['portada']; ?>" class="poster">
                <div class="details">
                    <img src="<?php echo $value['logo']; ?>" class="imgcontent">
                    <span class="tags"><?php echo $value['canal']; ?></span>
                    <a id="videoFrame" href="<?php echo base_url('vertvshow?id=' . $value['id_show']); ?>" class="play"><i class="bx bx-play"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </section>


    <script src="<?= base_url('public/assets/js/clienteheader.js') ?> "></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".home", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>

</html>