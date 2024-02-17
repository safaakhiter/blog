<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articleTag
 * @var \Cake\Collection\CollectionInterface|string[] $tags
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Article Tags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articleTags form content">
            <?= $this->Form->create($articleTag) ?>
            <fieldset>
                <legend><?= __('Add Article Tag') ?></legend>
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
