<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MessageHistory> $messageHistory
 */
?>
<div class="messageHistory index content">
    <?= $this->Html->link(__('New Message History'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Message History') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('thread_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messageHistory as $messageHistory): ?>
                <tr>
                    <td><?= $this->Number->format($messageHistory->id) ?></td>
                    <td><?= $messageHistory->has('user') ? $this->Html->link($messageHistory->user->name, ['controller' => 'Users', 'action' => 'view', $messageHistory->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($messageHistory->thread_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $messageHistory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $messageHistory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $messageHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messageHistory->id)]) ?>
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
