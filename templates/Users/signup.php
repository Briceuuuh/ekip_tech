<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <div class="row">
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
</div> -->


<?= $this->Html->css(['login.css',
])?>
<?= $this->fetch('css') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            S'inscrire
         </div>
         <?= $this->Form->create($user) ?>
            <div class="field">
               <?php echo $this->Form->input('name', ['required' => true, 'autocomplete' => 'off', 'class' => 'form-style', 'placeholder' => "Nom"]);?><br>
            </div>
            <div class="field">
               <?php echo $this->Form->input('firstname', ['required' => true, 'autocomplete' => 'off', 'class' => 'form-style', 'placeholder' => "Prénom"]);?><br>
            </div>
            <div class="field">
               <?php echo $this->Form->input('email', ['required' => true, 'autocomplete' => 'off', 'class' => 'form-style', 'placeholder' => "Email"]);?><br>
            </div>
            <div class="field">
               <?php echo $this->Form->input('password', ['required' => true, 'autocomplete' => 'off', 'class' => 'form-style', 'placeholder' => "Mot de passe", 'type' => 'password']);?><br>
            </div>
            <div class="field">
                <?= $this->Form->submit(__("S'inscrire")) ?>
            </div>
            <div class="signup-link">
               Déja inscrit ? <a href="/users/login">Se connecter</a>
            </div>
            <?= $this->Form->end() ?>
      </div>
   </body>
</html>
