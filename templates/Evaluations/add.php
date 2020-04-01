<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evaluation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Volver'), ['controller' => 'UsersTests','action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="evaluations form content">
            <?= $this->Form->create($evaluation) ?>
            <fieldset>
                <legend><?= __('Enviar correos') ?></legend>
                <?php
                    echo $this->Form->control('userTests_id', ['options' => $usersTests]);
                    echo $this->Form->control('email');
                    echo $this->Form->control('token');
                    echo $this->Form->control('state');
                    echo $this->Form->control('age');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('location');
                    echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
