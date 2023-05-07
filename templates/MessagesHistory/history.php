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
                    <th><?= $this->Paginator->sort('msg') ?></th>
                    <th><?= $this->Paginator->sort('response') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($msg as $msg): ?>
                <tr>
                    <td><?= h($msg->msg) ?></td>
                    <td><?= h($msg->response) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
