<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __("S'enregistrer ") ?></legend>
                <a>Email</a>&nbsp;&nbsp;<br>
                <?php echo $this->Form->input('email') ?><br>
                <a>Mot de passe</a>&nbsp;&nbsp;<br>
                <?php echo $this->Form->input('password') ?><br>
                <a>Prénom</a>&nbsp;&nbsp;<br>
                <?php echo $this->Form->input('firstname') ?><br>
                <a>Nom</a>&nbsp;&nbsp;<br>
                <?php echo $this->Form->input('name') ?><br>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
