<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articl
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articl->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articl->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Articls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articls form content">
            <?= $this->Form->create($articl) ?>
            <fieldset>
                <legend><?= __('Edit Articl') ?></legend>
                <?php
                    echo $this->Form->control('picture');
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('content');
                    echo $this->Form->control('date');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
