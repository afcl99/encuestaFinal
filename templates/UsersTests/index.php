<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest[]|\Cake\Collection\CollectionInterface $usersTests
 */
?>
<div class="usersTests index content">
    <?= $this->Html->link(__('Volver'), ['controller' => 'Tests', 'action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Encuestas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Investigador') ?></th>
                    <th><?= $this->Paginator->sort('Tests') ?></th>
                    <th><?= $this->Paginator->sort('mensaje') ?></th>
                    <th><?= $this->Paginator->sort('Pagina') ?></th>
                    <th><?= $this->Paginator->sort('Fecha limite') ?></th>
                    <th class="actions"><?= __('Opciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersTests as $usersTest): ?>
                <tr>
                    <td><?= h($usersTest->name) ?></td>
                    <td><?= $usersTest->has('user') ? $this->Html->link($usersTest->user->first_name, ['controller' => 'Users', 'action' => 'view', $usersTest->user->username]) : '' ?></td>
                    <td><?= $usersTest->has('test') ? $this->Html->link($usersTest->test->name, ['controller' => 'Tests', 'action' => 'view', $usersTest->test->id]) : '' ?></td>
                    <td><?= h($usersTest->message) ?></td>
                    <td><?= h($usersTest->url_app) ?></td>
                    <td><?= h($usersTest->max_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Enviar'), ['action' => 'send', $usersTest->id]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
