<?= $this->Html->script('procesoCorreo.js') ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evalation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Volver'), ['action' => 'index'], ['class' => 'button float-left']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTests form content">
            <input class="form-control" type="text" id="correo" placeholder="Nuevo correo">
        </div>
            </div><button type="button" onclick="validateEmail()" class="btn btn-primary btn-block">Agregar</button>        
    </div>
    <div class="col-12 col-md-6">
                <h2 class="h4" style="color: rgb(244,245,247);"><i class="fa fa-envelope"></i>&nbsp;Correos</h2>
                <div class="form-row" style="color: rgb(244,245,247);">
                </div>
                <ul id="lstCorreos" style="color: rgb(255,255,255);">


                </ul>
            </div>
</div>
