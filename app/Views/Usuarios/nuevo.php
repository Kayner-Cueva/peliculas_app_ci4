<body>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/registre.css') ?> "><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-white bg-secondary mb-3">
                <h2>Registrarse</h2>
            </div>
            <div class="card-body">
                <?php
                echo "<br>";
                $base = base_url();
                echo form_open('/guardar_usuarios');
                echo form_label('Nombre:', 'Nombre');
                echo "<br>";
                echo form_input(array('name' => 'txtNombre', 'placeholder' => 'Ingrese el nombre', 'class' => 'form-control',));
                echo "<br>";
                echo form_label('Correo:', 'Correo');
                echo "<br>";
                echo form_input(array('name' => 'txtCorreo', 'placeholder' => 'Ingrese Correo', 'class' => 'form-control'));
                echo "<br>";
                echo form_label('Usuario:', 'Usuario');
                echo "<br>";
                echo form_input(array('name' => 'txtUsuarios', 'placeholder' => 'Ingrese su usuario', 'class' => 'form-control'));
                echo "<br>";
                echo form_label('Contrasena:', 'Contrasena');
                echo "<br>";
                echo form_input(array('name' => 'txtClave', 'placeholder' => 'Ingrese la contraseña', 'class' => 'form-control'));
                echo "<br>";
                echo "<br>";
                echo form_button(array('name' => 'btnGuardar', 'type' => 'submit', 'class' => 'btn btn-primary', 'content' => 'Guardar'));
                echo form_close();
                ?>
            </div>
        </div>
    </div>
</body>