<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $articleTags
 */
?>
<div class="articleTags index content">
    <?= $this->Html->link(__('New Article Tag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Article Tags') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('tag_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articleTags as $articleTag): ?>
                <tr>
                    <td><?= $this->Number->format($articleTag->id) ?></td>
                    <td><?= $this->Number->format($articleTag->article_id) ?></td>
                    <td><?= $articleTag->has('tag') ? $this->Html->link($articleTag->tag->id, ['controller' => 'Tags', 'action' => 'view', $articleTag->tag->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $articleTag->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articleTag->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articleTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleTag->id)]) ?>
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
