<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 * @var \Cake\Collection\CollectionInterface|string[] $locations
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('email');
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('birth_date');
                    echo $this->Form->control('profile_picture');
                    echo $this->Form->control('marital_status');
                    echo $this->Form->control('is_active');
                    echo $this->Form->control('bio');
                    echo $this->Form->control('role_id', ['options' => $roles]);
                    echo $this->Form->control('location_id', ['options' => $locations]);
                    echo $this->Form->control('course_id', ['options' => $courses]);
                    echo $this->Form->control('product_id');
                    echo $this->Form->control('attachment_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
