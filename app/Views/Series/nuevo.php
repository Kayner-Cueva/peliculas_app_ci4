<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Registro Series</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                    echo "<br>";
                    $base = base_url();
                    echo form_open('/guardar_series');
                    echo form_label('Portada', 'Portada');
                    echo "<br>";
                    echo form_input(array('name' => 'txtPortada', 'placeholder' => 'Ingrese la Portada', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_label('Fondo', 'Fondo');
                    echo "<br>";
                    echo form_input(array('name' => 'txtFondo', 'placeholder' => 'Ingrese el Fondo de la pelicula', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_label('Logo', 'Logo');
                    echo "<br>";
                    echo form_input(array('name' => 'txtLogo', 'placeholder' => 'Ingrese el Logo de la pelicula', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_label('Titulo', 'Titulo');
                    echo "<br>";
                    echo form_input(array('name' => 'txtTitulo', 'placeholder' => 'Ingrese el Titulo', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_label('Descripcion', 'Descripcion');
                    echo "<br>";
                    echo form_input(array('name' => 'txtDescripcion', 'placeholder' => 'Ingrese la Descripcion', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_label('Categorias', 'Categorias');
                    echo "<br>";
                    echo form_input(array('name' => 'txtCategorias', 'placeholder' => 'Ingrese las Categorias', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_label('Creador', 'Creador');
                    echo "<br>";
                    echo form_input(array('name' => 'txtCreador', 'placeholder' => 'Ingrese el Creador', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_label('Fecha Estreno', 'Fecha Estreno');
                    echo "<br>";
                    echo form_input(array('name' => 'txtFecha', 'placeholder' => 'Ingrese la Fecha de Estreno', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_label('Temporada', 'Temporada');
                    echo "<br>";
                    echo form_input(array('name' => 'txtTemporada', 'placeholder' => 'Ingrese las Temporadas', 'class' => 'form-control'));
                    echo "<br>";
                    echo form_button(array('name' => 'btnGuardar', 'type' => 'submit', 'class' => 'btn btn-primary', 'content' => 'Guardar'));
                    echo form_button(array('name' => 'btnClose', 'type' => 'button', 'class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal' , 'content' => 'Close'));
                    echo form_close();
                ?>
        </div>
    </div>
</div>
