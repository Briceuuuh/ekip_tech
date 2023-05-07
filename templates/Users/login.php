<!-- <h1>login</h1>
<?= $this->Form->create() ?>
    <fieldset>
        <legend> Enter email and pass</legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')) ?>
    <?= $this->Form->end() ?>

<?= $this->Html->link("Ajouter utilisateur", ['action' => 'add']) ?> -->
<?= $this->Html->css(['login.css',
])?>
<?= $this->fetch('css') ?>


<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Se connecter
         </div>
         <?= $this->Form->create() ?>
            <div class="field">
               <?php echo $this->Form->input('email', ['required' => true, 'autocomplete' => 'off', 'class' => 'form-style', 'placeholder' => "Email"]);?><br>
            </div>
            <div class="field">
               <?php echo $this->Form->input('password', ['required' => true, 'autocomplete' => 'off', 'class' => 'form-style', 'placeholder' => "Mot de passe", 'type' => 'password']);?><br>
            </div>
            <div class="field">
                <?= $this->Form->submit(__("Se connecter")) ?>
            </div>
            <div class="signup-link">
               Pas encore inscrit ? <a href="/users/signin">S'inscrire</a>
            </div>
            <?= $this->Form->end() ?>
      </div>
   </body>