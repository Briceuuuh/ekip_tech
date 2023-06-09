<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MessagesHistory> $messagesHistory
 */
?>
<div class="messagesHistory index content">
    <?= $this->Html->link(__('New Messages History'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Messages History') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('message_id') ?></th>
                    <th><?= $this->Paginator->sort('msg') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('response') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messagesHistory as $messagesHistory): ?>
                <tr>
                    <td><?= $this->Number->format($messagesHistory->message_id) ?></td>
                    <td><?= h($messagesHistory->msg) ?></td>
                    <td><?= $messagesHistory->has('user') ? $this->Html->link($messagesHistory->user->name, ['controller' => 'Users', 'action' => 'view', $messagesHistory->user->id]) : '' ?></td>
                    <td><?= h($messagesHistory->response) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $messagesHistory->message_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $messagesHistory->message_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $messagesHistory->message_id], ['confirm' => __('Are you sure you want to delete # {0}?', $messagesHistory->message_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
