<title>Onirix</title>
<?= $this->Html->css(['home1.css']) ?>
<?= $this->fetch('css') ?>

<?= $this->Html->script(['home.js', 'query.js']) ?>
<?= $this->fetch('script') ?>

<?=$this->fetch('content') ?>
<?=$this->Flash->render() ?>