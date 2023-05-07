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
                <h2 class="grow-on-hover" value="-5">L'institut</h2>
            </div>
        </div>
    </div>
    <div class="screen screen1">
      <div class="parallax-wrap">
          <img value="3" src=" <?= $this->Url->build('/', ['fullBase' => true]) ?>img/ia_screen.png"></img>
          <div class="moon" id="moon1"><div></div></div>
          <div class="moon" id="moon2"><div></div></div>
          <div class="moon" id="moon3"><div></div></div>
          <div class="z-index: 999;" id="ony" >
              <h2 class="grow-on-hover" value="-5">L'IA des Rêves</h2>
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
            <h2 class="grow-on-hover" value="-5">ONIRIX</h2>
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
      <img id="popup-image" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/reve.jpg"></img>
      <div class="text-container">
      <h4 class="text-design"><br><br><br>Bienvenue à l'Institut International des Rêves !<br>
      Nous sommes une entreprise dédiée à la recherche et à l'exploration du monde mystérieux des rêves.<br>
      </h4>
      </div>
    </div>
    <div class="popup-content-inner">
      <div class="text-container">
        <h4 class="text-design"><br><br><br>
        Notre mission est de comprendre la signification et l'importance des rêves dans nos vies.
        Notre équipe d'experts multidisciplinaires, dévoués explorent les mystères des rêves pour mieux comprendre notre subconscient .
        pour explorer les aspects psychologiques, neurologiques et symboliques des rêves.
        Grâce à des années de recherche approfondie, nous avons développé des techniques de pointe pour analyser les rêves et
        en extraire des prédictions surprenantes.
    </h4>
    </div>
    <img id="popup-image" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/scienti.jpeg"></img>
    </div>
    <div class="popup-content-inner">
      <div class="text-container">
        <h4 class="text-design">Principales recherches menées par notre institut: <br/><br/>
        - 1.Étude des motifs et des symboles oniriques: Nos chercheurs analysent les motifs
        récurrents dans les rêves pour en déduire des significations symboliques profondes.
      </h4>
    </div>
    <div class="text-container">
        <h4 class="text-design"> - 2.Analyse des émotions et des réactions physiologiques : Nous étudions les
        réactions émotionnelles et physiologiques associées aux rêves. En examinant les variations de
        fréquence cardiaque, de mouvements oculaires et d'autres indicateurs, nous sommes en mesure de
        mieux comprendre les états émotionnels et les expériences vécues pendant le sommeil.
      </h4>
    </div>
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
    <img id="popup-image" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/aiozi.png"></img>
      <div class="text-container">
      <h4 class="text-design"><br><br><br>Bienvenue sur la plateforme Onirix - Explorez votre avenir à travers vos rêves. Découvrez
        une technologie révolutionnaire développée par l'Institut International des Rêves : Onirix, une intelligence
        artificielle avancée capable d'analyser et de décoder vos rêves pour prédire votre avenir. Imaginez pouvoir
        obtenir des informations prédictives sur des situations telles qu'une rencontre amoureuse, des défis professionnels,
        des réussites scolaires, ou même des enjeux de santé importants.
      </h4>
      </div>
    </div>
    <div class="popup-content-inner">
      <div class="text-container">
        <h4 class="text-design"><br><br><br><br><br>Onirix est le fruit d'années de recherche et de développement. Grâce à des algorithmes avancés d'apprentissage automatique et de traitement du langage naturel, Onirix analyse vos rêves en profondeur et décode leurs significations cachées.
L'IA identifie les symboles, les émotions et les motifs récurrents pour prédire les événements futurs qui pourraient vous concerner
      </h4>
    </div>
    <img id="popup-image" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/num.jpg"></img>
    </div>
    <div class="popup-content-inner">
    <img id="popup-image" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/myIa.png"></img>
      <div class="text-container">
        <h4 class="text-design"><br><br>Dans le cadre de notre projet ambitieux, nous avons créé une plateforme web interactive
            qui vous permet de soumettre facilement la description de vos rêves et d'obtenir des prédictions prémonitoires
            personnalisées. Notre interface conviviale vous guidera tout au long du processus, tandis que les résultats
            de l'analyse de vos rêves seront présentés de manière claire et précise. Explorez votre avenir à travers vos
            rêves et laissez-vous guider par les informations dévoilées par Onirix.
      </h4>
    </div>
    </div>
    <div class="popup-content-inner">
      <div class="text-container">
        <h4 class="text-design">Résultats d'analyses et prédictions: <br/><br/>
- 1. Relations personnelles : Nos analyses peuvent prédire les dynamiques relationnelles, que ce soit dans les relations amoureuses, familiales ou amicales. Les rêves révèlent souvent des indices subtils sur les interactions sociales et les sentiments interpersonnels.
      </h4>
    </div>
    <div class="text-container">
        <h4 class="text-design">
- 2. Carrière et réussite professionnelle : Nos analyses peuvent fournir des informations sur les opportunités
professionnelles, les défis à venir et les choix de carrière potentiels, vous donnant un aperçu précieux pour
votre succès professionnel.<br/><br/>
- 3. Santé et bien-être : Nos recherches peuvent détecter des signaux précurseurs de problèmes de santé potentiels dans les rêves. Les symboles, les scénarios et les éléments oniriques se révèlent être des indicateurs précieux pour anticiper votre bien-être futur.
      </h4>
    </div>
</div>
<div class="popup-content-inner">
    <div class="text-container">
      <h4 class="text-design"><br><br><br><br>Changez votre vie grâce à Onirix :<br/>
Nous croyons fermement que l'IA Onirix est destinée à changer la vie de nombreuses personnes.
En vous offrant une vision unique de votre avenir, Onirix vous donne la possibilité de prendre
des décisions éclairées et de vous préparer aux défis à venir. Nous sommes convaincus que les rêves
peuvent devenir la clé de notre destinée grâce à l'intelligence artificielle révolutionnaire de l'Institut International des Rêves.
    </h4>
  </div>
  <img id="popup-image" src="<?= $this->Url->build('/', ['fullBase' => true]) ?>img/future.png"></img>
  </div>
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
