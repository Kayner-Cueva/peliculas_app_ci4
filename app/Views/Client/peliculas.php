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
    </header>

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