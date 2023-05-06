<header style="
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      z-index: 999;
      background-color: transparent"
      >
    <div style="
        flex-direction: row;
        text-align: right;
    ">
    <?= $this->Html->link(__('Login'), ['controller' => 'users', 'action' => 'login'], ['class' => 'button']) ?>
    <!-- <?= $this->Html->link(__('SignUp'), ['action' => 'login'], ['class' => 'button']) ?> -->
    </div>
</header>
<div class="screens">
    <div class="screen screen2">
        <div class="parallax-wrap">
            <img value="3" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/starmap2.jpg"></img>
            <div class="moon" id="moon5"><div></div></div>
            <div class="moon" id="moon6"><div></div></div>
            <div class="moon" id="moon7"><div></div></div>
            <div class="moon" id="moon8"><div></div></div>
            <h2 class="grow-on-hover" value="-5">Présentation</h2>
        </div>
    </div>
    <div class="screen screen1">
      <div class="parallax-wrap">
          <img value="3" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/starmap2.jpg"></img>
          <div class="moon" id="moon1"><div></div></div>
          <div class="moon" id="moon2"><div></div></div>
          <div class="moon" id="moon3"><div></div></div>
          <div class="moon" id="moon4"><div></div></div>
          <h2 class="grow-on-hover" value="-5">ONIRIX</h2>
      </div>
    </div>
  <div class="screen screen3">
    <div class="parallax-wrap">
        <img value="3" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/ia.jpeg"></img>
        <div class="moon" id="moon1"><div></div></div>
        <div class="moon" id="moon2"><div></div></div>
        <div class="moon" id="moon3"><div></div></div>
        <div class="moon" id="moon4"><div></div></div>
        <h2 class="grow-on-hover" value="-5">Utiliser l'IA</h2>
    </div>
  </div>
  <footer style="position: absolute;">
    <div class="container">
      <p>&copy; 2023 Mon entreprise</p>
    </div>
  </footer>
</div>