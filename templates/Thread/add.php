<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thread $thread
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Thread'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="thread form content">
            <?= $this->Form->create($thread) ?>
            <fieldset>
                <legend><?= __('Add Thread') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('user_id');
                    echo $this->Form->input('prompt_id');
                    echo $this->Form->input('message_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
