<?= $this->Html->css('login') ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest $usersTest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Volver'), ['controller'=>'Tests','action' => 'index'], ['class' => 'button float-left']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTests form content">
            <?= $this->Form->create($usersTest) ?>
            <fieldset>
                <legend><?= __('Nueva encuesta') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('test_id', ['options' => $tests]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('essage');
                    echo $this->Form->control('url_app');
                    echo $this->Form->control('max_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Guardar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
