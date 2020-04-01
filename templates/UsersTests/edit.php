<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest $usersTest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersTest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersTest->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users Tests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTests form content">
            <?= $this->Form->create($usersTest) ?>
            <fieldset>
                <legend><?= __('Edit Users Test') ?></legend>
                <?php
                    echo $this->Form->control('user');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('test_id', ['options' => $tests]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('message');
                    echo $this->Form->control('url_app');
                    echo $this->Form->control('max_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
