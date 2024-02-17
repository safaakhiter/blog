<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $articls
 */
?>
<div class="articls index content">
    <?= $this->Html->link(__('New Articl'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Articls') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('picture') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('content') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articls as $articl): ?>
                <tr>
                    <td><?= $this->Number->format($articl->id) ?></td>
                    <td><?= h($articl->picture) ?></td>
                    <td><?= h($articl->title) ?></td>
                    <td><?= h($articl->description) ?></td>
                    <td><?= h($articl->content) ?></td>
                    <td><?= h($articl->date) ?></td>
                    <td><?= $articl->has('user') ? $this->Html->link($articl->user->id, ['controller' => 'Users', 'action' => 'view', $articl->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $articl->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articl->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articl->id)]) ?>
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
