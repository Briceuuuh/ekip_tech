<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessagesHistory $messagesHistory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Messages History'), ['action' => 'edit', $messagesHistory->message_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Messages History'), ['action' => 'delete', $messagesHistory->message_id], ['confirm' => __('Are you sure you want to delete # {0}?', $messagesHistory->message_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Messages History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Messages History'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messagesHistory view content">
            <h3><?= h($messagesHistory->message_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Msg') ?></th>
                    <td><?= h($messagesHistory->msg) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $messagesHistory->has('user') ? $this->Html->link($messagesHistory->user->name, ['controller' => 'Users', 'action' => 'view', $messagesHistory->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Response') ?></th>
                    <td><?= h($messagesHistory->response) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message Id') ?></th>
                    <td><?= $this->Number->format($messagesHistory->message_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
