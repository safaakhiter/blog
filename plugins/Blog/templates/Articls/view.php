<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articl
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Articl'), ['action' => 'edit', $articl->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Articl'), ['action' => 'delete', $articl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articl->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Articl'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articls view content">
            <h3><?= h($articl->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Picture') ?></th>
                    <td><?= h($articl->picture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($articl->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($articl->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($articl->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $articl->has('user') ? $this->Html->link($articl->user->id, ['controller' => 'Users', 'action' => 'view', $articl->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($articl->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($articl->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
