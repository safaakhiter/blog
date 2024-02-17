<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articl
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Articls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articls form content">
            <?= $this->Form->create($articl) ?>
            <fieldset>
                <legend><?= __('Add Articl') ?></legend>
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
