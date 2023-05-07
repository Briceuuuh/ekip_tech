<?= $this->Html->css(['home1.css']) ?>
<?= $this->fetch('css') ?>

<?= $this->Html->script(['home.js']) ?>
<?= $this->fetch('script') ?>

<?=$this->fetch('content') ?>
<?=$this->Flash->render() ?>