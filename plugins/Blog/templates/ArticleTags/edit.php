<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articleTag
 * @var string[]|\Cake\Collection\CollectionInterface $tags
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articleTag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articleTag->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Article Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articleTags form content">
            <?= $this->Form->create($articleTag) ?>
            <fieldset>
                <legend><?= __('Edit Article Tag') ?></legend>
                <?php
                    echo $this->Form->control('article_id');
                    echo $this->Form->control('tag_id', ['options' => $tags]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
