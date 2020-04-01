<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation[]|\Cake\Collection\CollectionInterface $evaluations
 */
?>
<div class="evaluations index content">
    <?= $this->Html->link(__('New Evaluation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Evaluations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('userTests_id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('token') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('age') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($evaluations as $evaluation): ?>
                <tr>
                    <td><?= $this->Number->format($evaluation->id) ?></td>
                    <td><?= $evaluation->has('users_test') ? $this->Html->link($evaluation->users_test->name, ['controller' => 'UsersTests', 'action' => 'view', $evaluation->users_test->id]) : '' ?></td>
                    <td><?= h($evaluation->email) ?></td>
                    <td><?= h($evaluation->token) ?></td>
                    <td><?= $this->Number->format($evaluation->state) ?></td>
                    <td><?= $this->Number->format($evaluation->age) ?></td>
                    <td><?= h($evaluation->gender) ?></td>
                    <td><?= h($evaluation->location) ?></td>
                    <td><?= h($evaluation->date) ?></td>
                    <td><?= h($evaluation->created) ?></td>
                    <td><?= h($evaluation->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $evaluation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evaluation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id)]) ?>
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
