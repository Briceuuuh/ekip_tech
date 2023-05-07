<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessageHistory $messageHistory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Message History'), ['action' => 'edit', $messageHistory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Message History'), ['action' => 'delete', $messageHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messageHistory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Message History'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Message History'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messageHistory view content">
            <h3><?= h($messageHistory->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $messageHistory->has('user') ? $this->Html->link($messageHistory->user->name, ['controller' => 'Users', 'action' => 'view', $messageHistory->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($messageHistory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Thread Id') ?></th>
                    <td><?= $this->Number->format($messageHistory->thread_id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($messageHistory->message)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('User Prompt') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($messageHistory->user_prompt)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
