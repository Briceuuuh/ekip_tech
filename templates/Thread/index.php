<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Thread> $thread
 */
?>
<div class="thread index content">
    <?= $this->Html->link(__('New Thread'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Thread') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('prompt_id') ?></th>
                    <th><?= $this->Paginator->sort('message_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($thread as $thread): ?>
                <tr>
                    <td><?= $this->Number->format($thread->id) ?></td>
                    <td><?= h($thread->name) ?></td>
                    <td><?= $thread->has('user') ? $this->Html->link($thread->user->name, ['controller' => 'Users', 'action' => 'view', $thread->user->id]) : '' ?></td>
                    <td><?= h($thread->prompt_id) ?></td>
                    <td><?= h($thread->message_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $thread->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thread->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thread->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thread->id)]) ?>
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
