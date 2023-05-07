<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessageHistory $messageHistory
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $messageHistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $messageHistory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Message History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messageHistory form content">
            <?= $this->Form->create($messageHistory) ?>
            <fieldset>
                <legend><?= __('Edit Message History') ?></legend>
                <?php
                    echo $this->Form->control('message');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('user_prompt');
                    echo $this->Form->control('thread_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
