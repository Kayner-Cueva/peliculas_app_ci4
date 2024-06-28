<body>
    <!-- Videos de presentacion -->
    <div class="">
        <main>
            <div class="contenedor">
                <iframe id="videoFrame" width="806" height="453" src="<?php echo $peliculas['url_pelicula']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            </div>
        </main>
    </div>

    <script>
        // Obtener el elemento del video
        const videoFrame = document.getElementById('videoFrame');

        // Función para activar pantalla completa
        function toggleFullScreen() {
            if (videoFrame.requestFullscreen) {
                videoFrame.requestFullscreen();
            } else if (videoFrame.mozRequestFullScreen) {
                videoFrame.mozRequestFullScreen();
            } else if (videoFrame.webkitRequestFullscreen) {
                videoFrame.webkitRequestFullscreen();
            } else if (videoFrame.msRequestFullscreen) {
                videoFrame.msRequestFullscreen();
            }
        }

        // Llamada a pantalla completa automáticamente cuando se carga el video
        videoFrame.onload = toggleFullScreen;
    </script>
</body>