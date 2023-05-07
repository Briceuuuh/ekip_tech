<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessagesHistory $messagesHistory
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $messagesHistory->message_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $messagesHistory->message_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Messages History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messagesHistory form content">
            <?= $this->Form->create($messagesHistory) ?>
            <fieldset>
                <legend><?= __('Edit Messages History') ?></legend>
                <?php
                    echo $this->Form->control('msg');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('response');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
