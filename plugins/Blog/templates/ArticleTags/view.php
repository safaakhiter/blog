<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articleTag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Article Tag'), ['action' => 'edit', $articleTag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Article Tag'), ['action' => 'delete', $articleTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleTag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Article Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Article Tag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articleTags view content">
            <h3><?= h($articleTag->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tag') ?></th>
                    <td><?= $articleTag->has('tag') ? $this->Html->link($articleTag->tag->id, ['controller' => 'Tags', 'action' => 'view', $articleTag->tag->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($articleTag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Article Id') ?></th>
                    <td><?= $this->Number->format($articleTag->article_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
