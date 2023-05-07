<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thread $thread
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Thread'), ['action' => 'edit', $thread->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Thread'), ['action' => 'delete', $thread->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thread->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Thread'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Thread'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="thread view content">
            <h3><?= h($thread->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($thread->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $thread->has('user') ? $this->Html->link($thread->user->name, ['controller' => 'Users', 'action' => 'view', $thread->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Prompt Id') ?></th>
                    <td><?= h($thread->prompt_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Message Id') ?></th>
                    <td><?= h($thread->message_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($thread->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Message History') ?></h4>
                <?php if (!empty($thread->message_history)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('User Prompt') ?></th>
                            <th><?= __('Thread Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($thread->message_history as $messageHistory) : ?>
                        <tr>
                            <td><?= h($messageHistory->id) ?></td>
                            <td><?= h($messageHistory->message) ?></td>
                            <td><?= h($messageHistory->user_id) ?></td>
                            <td><?= h($messageHistory->user_prompt) ?></td>
                            <td><?= h($messageHistory->thread_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MessageHistory', 'action' => 'view', $messageHistory->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MessageHistory', 'action' => 'edit', $messageHistory->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MessageHistory', 'action' => 'delete', $messageHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messageHistory->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
