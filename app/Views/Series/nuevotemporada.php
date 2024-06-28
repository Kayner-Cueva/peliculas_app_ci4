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
                    echo form_open('/guardar_temporadas');
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
