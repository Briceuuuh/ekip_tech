<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($user->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Admin') ?></th>
                    <td><?= $user->admin ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Message History') ?></h4>
                <?php if (!empty($user->message_history)) : ?>
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
                        <?php foreach ($user->message_history as $messageHistory) : ?>
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
            <div class="related">
                <h4><?= __('Related Thread') ?></h4>
                <?php if (!empty($user->thread)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Prompt Id') ?></th>
                            <th><?= __('Message Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->thread as $thread) : ?>
                        <tr>
                            <td><?= h($thread->id) ?></td>
                            <td><?= h($thread->name) ?></td>
                            <td><?= h($thread->user_id) ?></td>
                            <td><?= h($thread->prompt_id) ?></td>
                            <td><?= h($thread->message_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Thread', 'action' => 'view', $thread->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Thread', 'action' => 'edit', $thread->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Thread', 'action' => 'delete', $thread->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thread->id)]) ?>
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
