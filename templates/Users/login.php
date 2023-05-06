<h1>login</h1>
<?= $this->Form->create() ?>
    <fieldset>
        <legend> Enter email and pass</legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')) ?>
    <?= $this->Form->end() ?>

<?= $this->Html->link("Ajouter utilisateur", ['action' => 'add']) ?>