<header style="
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      z-index: 1;
      background-color: transparent"
      >
      <div style="
        flex-direction: row;
        text-align: center;"
        >
        <img class="imgLogo" src=" <?= $this->Url->build('/', ['fullBase' => true]) ?>img/logo.png"></img>
        <img class="imgLogoCross" src=" <?= $this->Url->build('/', ['fullBase' => true]) ?>img/croix.png"></img>
        <img class="imgLogo" src=" <?= $this->Url->build('/', ['fullBase' => true]) ?>img/logo2.png"></img>
        <?php
          $connected = $this->request->getAttribute ('identity');
            if ($connected) {
              $name = $this->request->getAttribute ('identity')->firstname;
              $admin = $this->request->getAttribute ('identity')->admin;
              echo '<a>' . $name .'</a>';
              if ($admin == 0) {
                echo $this->Html->link(__('Admin Panel'), ['controller' => 'users', 'action' => 'index'], ['class' => 'buttontest', 'style' => 'right: 12%']);
                // echo $this->Html->link(__('discution'), ['controller' => 'users', 'action' => 'index'],['class' => 'buttontest']);
              }
              echo $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'buttontest']);
            } else {
              echo $this->Html->link(__('Se connecter'), ['controller' => 'users', 'action' => 'login'], ['class' => 'buttontest']);
              echo $this->Html->link(__("S'inscrire"), ['controller' => 'users', 'action' => 'signup'], ['class' => 'buttonSignUp']);
            }
        ?>
    </div>
</header>

<div class="screens">
    <div class="screen screen2">
        <div class="parallax-wrap">

            <img value="3" src=" <?= $this->Url->build('/', ['fullBase' => true]) ?>img/company.jpg"></img>
            <div class="moon" id="moon7"><div></div></div>
            <div class="moon" id="moon8"><div></div></div>
            <div class="z-index: 999;" id="pres" >
                <h2 class="grow-on-hover" value="-5">Présentation</h2>
            </div>
        </div>
    </div>
    <div class="screen screen1">
      <div class="parallax-wrap">
          <img value="3" src=" <?= $this->Url->build('/', ['fullBase' => true]) ?>img/ia_screen.png">></img>
          <div class="moon" id="moon1"><div></div></div>
          <div class="moon" id="moon2"><div></div></div>
          <div class="moon" id="moon3"><div></div></div>
          <div class="z-index: 999;" id="ony" >
              <h2 class="grow-on-hover" value="-5">ONIRIX</h2>
          </div>
      </div>
    </div>
  <div class="screen screen3">
    <div class="parallax-wrap">
        <img value="3" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/robot.jpg"></img>
        <div class="moon" id="moon4"><div></div></div>
        <div class="moon" id="moon5"><div></div></div>
        <div class="moon" id="moon6"><div></div></div>
        <div class="moon" id="moon9"><div></div></div>
        <div class="z-index: 999;" id="ia" >
            <h2 class="grow-on-hover" value="-5">Utiliser l'IA</h2>
    </div>
  </div>
</div>
<footer style="position: absolute; background-color: transparent">
  <div class="container">
    <p>&copy; 2023 Onirix</p>
  </div>
</footer>


<!-- Présenation -->
<div id="popup" class="popup open">
  <span id="popup-close" class="popup-closedesign">
    &times;
  </span>
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <div class="popup-content-inner">
      <!-- <img id="popup-image" src="/img/cerv.jpg" alt="cerv"> -->
      <div class="text-container">
      <h4 class="text-design">Bienvenue à l'Institut International des Rêves !<br>
      Nous sommes une entreprise dédiée à la recherche et à l'exploration du monde mystérieux des rêves.<br>
      Notre mission est de comprendre la signification et l'importance des rêves dans nos vies.<br>
      </h4>
      </div>
    </div>
    <div class="popup-content-inner">
      <div class="text-container">
        <h4 class="text-design">Bienvenue à l'Institut International des Rêves !<br>
        Nous sommes une entreprise dédiée à la recherche et à l'exploration du monde mystérieux des rêves.<br>
        Notre mission est de comprendre la signification et l'importance des rêves dans nos vies.<br>
      </h4>
    </div>
    <!-- <img id="popup-image" src="/img/cerv.jpg" alt="cerv"> -->
    </div>
    <div class="popup-content-inner">
      <!-- <img id="popup-image" src="/img/cerv.jpg" alt="cerv"> -->
      <div class="text-container">
        <h4 class="text-design">Bienvenue à l'Institut International des Rêves !<br>
        Nous sommes une entreprise dédiée à la recherche et à l'exploration du monde mystérieux des rêves.<br>
        Notre mission est de comprendre la signification et l'importance des rêves dans nos vies.<br>
      </h4>
    </div>
    </div>
    <div class="popup-content-inner">
      <div class="text-container">
        <h4 class="text-design">Bienvenue à l'Institut International des Rêves !<br>
        Nous sommes une entreprise dédiée à la recherche et à l'exploration du monde mystérieux des rêves.<br>
        Notre mission est de comprendre la signification et l'importance des rêves dans nos vies.<br>
      </h4>
    </div>
    <!-- <img id="popup-image" src="/img/cerv.jpg" alt="cerv"> -->
    </div>
  </div>
</div>


<!-- ONYRIX -->
<div id="popupony" class="popup open">
  <span id="popupony-close" class="popup-closedesign">
    &times;
  </span>
  <div class="popup-overlay"></div>
  <div class="popup-content">
    <div class="popup-content-inner">
      <!-- <img id="popup-image" src="/img/cerv.jpg" alt="cerv"> -->
      <div class="text-container">
      <h4 class="text-design">Bienvenue à l'Institut International des Rêves !<br>
      Nous sommes une entreprise dédiée à la  et l'importance des rêves dans nos vies.<br>
      </h4>
      </div>
    </div>
    <div class="popup-content-inner">
      <div class="text-container">
        <h4 class="text-design">Bienvenue à l'Institut International des Rêves !<br>
        Nous sommes une entreprise dédiée à la recherche et à l'exploration du monde mystérieux des rêves.<br>
        Notre mission est de comprendre la signification et l'importance des rêves dans nos vies.<br>
      </h4>
    </div>
    <!-- <img id="popup-image" src="/img/cerv.jpg" alt="cerv"> -->
    </div>
    <div class="popup-content-inner">
      <!-- <img id="popup-image" src="/img/cerv.jpg" alt="cerv"> -->
      <div class="text-container">
        <h4 class="text-design">Bienvenue à l'Institut International des Rêves !<br>
        Nous sommes une entreprise dédiée à la recherche et à l'exploration du monde mystérieux des rêves.<br>
        Notre mission est de comprendre la signification et l'importance des rêves dans nos vies.<br>
      </h4>
    </div>
    </div>
    <div class="popup-content-inner">
      <div class="text-container">
        <h4 class="text-design">Bienvenue à l'Institut International des Rêves !<br>
        Nous sommes une entreprise dédiée à la recherche et à l'exploration du monde mystérieux des rêves.<br>
        Notre mission est de comprendre la signification et l'importance des rêves dans nos vies.<br>
      </h4>
    </div>
    <!-- <img id="popup-image" src="/img/cerv.jpg" alt="cerv"> -->
    </div>
  </div>
</div>

<?= $this->Html->script(['query.js',
        'home.js'
        ])?>
        <?= $this->Html->css(['home1.css',
        ])?>
        <?= $this->fetch('script') ?>
        <?= $this->fetch('css') ?>
<!-- IA -->
<div id="popupIa" class="popup open">
    <span id="popupIa-close" class="popup-closedesign">
        &times;
    </span>
    <div class="popup-overlay"></div>
    <div class="popup-content">

        <style>

        </style>
        <div id="chat-window">
            <div id="chat-messages"></div>
        </div>

        <?php
        $connected = $this->request->getAttribute ('identity');
        if ($connected) { ?>
          <div>
              <input type="text" id="message" name="message" class="input" placeholder="Nom complet">
          </div>
          <div>
            <button class="buttonClick" id="envoyer-button">Envoyer</button>
          </div>
        <?php } else { ?>
          <?= $this->Html->link(__('Se connecter'), ['controller' => 'users', 'action' => 'login'], ['class' => 'buttontest', 'style' => 'right: 30%'])?>
        <?php }
        ?>
        <script>
        $(document).ready(function() {
            $('#envoyer-button').click(function() {
              console.log('pass');
              var user_input = $('#message').val();
              console.log('input = ' + user_input);
                $.ajax({
                    type: 'GET',
                    url: '<?= $this->Url->build(['controller' => 'home', 'action' => 'getRandomResponse']) ?>/' + encodeURIComponent(user_input),
                    dataType: 'json',
                    success: function(data) {
                        var message = $('#message').val();
                        $('#chat-messages').append('<div class="message"><p>' + message + '</p></div>');
                        $('#chat-messages').append('<div class="response"><p>' + data + '</p></div>');
                        $('#message').val('');
                        $('#chat-window').scrollTop($('#chat-window')[0].scrollHeight);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " : " + errorThrown);
                    }
                });
            });
        });
        </script>
    </div>
</div>
