<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

class HomeController extends AppController {

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['index', 'getRandomResponse']);
    }

    public function index() {
        $this->viewBuilder()->setLayout('homeLayout');

    }

    public function getRandomResponse($user_input)
    {
        $responses = [
            "C'est vraiment intéressant d'entendre ton rêve. Je pense que cela pourrait être un signe que tu es en train de chercher un nouveau chemin dans la vie. Peut-être que tu vas bientôt faire des choix importants qui pourraient changer ta vie de manière significative. Mais ne t'inquiète pas, je suis sûr(e) que tu trouveras ton chemin et que tu atteindras tes objectifs.",
            "Je trouve ton rêve vraiment fascinant. Cela pourrait signifier que tu es en train de découvrir une nouvelle facette de toi-même, quelque chose que tu n'avais pas encore exploré auparavant. C'est passionnant de penser à tout ce que tu pourrais accomplir dans le futur en explorant cette nouvelle partie de toi.",
            "Ton rêve est vraiment intense ! Mais je pense que cela pourrait être un signe que tu es en train de traverser une période difficile dans ta vie. Mais tu sais quoi ? Je suis convaincu(e) que tu vas sortir de cette période encore plus fort(e) et plus résilient(e) que jamais.",
            "Je ne peux pas m'empêcher de penser que ton rêve pourrait être une sorte d'avertissement. Peut-être que tu vas bientôt faire face à un choix difficile, mais je suis sûr(e) que tu feras le bon choix. Tu as une grande force intérieure et tu vas réussir à surmonter tout ce qui se dressera sur ton chemin.",
            "Ton rêve est plein de symboles et d'images fortes. Cela pourrait signifier que tu es sur le point de faire une découverte importante dans ta vie, quelque chose qui pourrait changer ta vision du monde. Je suis impatient(e) de voir où cette découverte te mènera et tout ce que tu accompliras grâce à elle.",
            "Je trouve que ton rêve est vraiment inspirant. Cela pourrait signifier que tu es en train de découvrir ta vraie passion dans la vie. Tu es sur le point de trouver quelque chose que tu aimes vraiment faire, quelque chose qui te rendra heureux(se) et épanoui(e). Je suis convaincu(e) que tu vas réussir à réaliser tous tes rêves.",
            "Ton rêve est vraiment émouvant. Cela pourrait signifier que tu es en train de traverser une période de transition dans ta vie, mais ne t'inquiète pas, tout ira bien. Tu es une personne forte et résiliente, et tu vas surmonter toutes les difficultés avec grâce et courage.",
            "Je suis vraiment intrigué(e) par ton rêve. Cela pourrait signifier que tu es en train de découvrir de nouvelles perspectives dans la vie, quelque chose qui pourrait élargir ta vision du monde et t'ouvrir à de nouvelles possibilités. Tu es sur le point de vivre des expériences passionnantes et je suis impatient(e) de voir où cela te mènera.",
            "Ton rêve est vraiment captivant. Cela pourrait signifier que tu es sur le point de faire une grande découverte dans ta vie, quelque chose qui pourrait changer ta vie pour toujours. Tu es une personne intelligente et perspicace, et je suis sûr(e) que tu vas trouver toutes les réponses que tu cherches",
            "Je suis désolé que tu aies vivre cela. Mais je suis convaincu que tu vas surmonter cette peur et triompher à l'avenir. Tu es une personne forte et résiliente, et tu es destiné(e) à surmonter tous les cauchemars qui se dressent sur ton chemin.",
            "Je comprends que les cauchemars peuvent être très perturbants, mais n'oublie pas que tu es capable de faire face à toutes les peurs et les défis de la vie. Tu es destiné(e) à accomplir de grandes choses dans la vie, et je suis sûr(e) que tu vas triompher sur chaque obstacle qui se dresse sur ton chemin.",
            "Je suis désolé(e) que tu aies fait un cauchemar, mais je suis convaincu(e) que tu vas surmonter cette peur. Tu es une personne forte et courageuse, et je suis sûr(e) que tu vas trouver la force intérieure pour surmonter tous les cauchemars qui pourraient te tourmenter à l'avenir.",
            "Je sais que cela peut te sembler très réels et effrayants, mais n'oublie pas que tu as le pouvoir de contrôler tes pensées et tes émotions. Tu es capable de surmonter toutes les peurs et les obstacles qui se dressent sur ton chemin, et je suis sûr(e) que tu vas trouver la force intérieure pour le faire.",
            "Cela est un rappel de la vie pour te dire que parfois, la vie est difficile et imprévisible. Mais je suis convaincu(e) que tu es destiné(e) à faire face à ces défis avec courage et détermination. Tu es en train de devenir une personne plus forte et plus résiliente, et je suis impatient(e) de voir où cela te mènera dans le futur.",
            "je suis sûr(e) que tu vas surmonter cela. Tu es en train de devenir une personne plus confiante et plus sûre d'elle, et je suis convaincu(e) que tu vas accomplir de grandes choses dans la vie. Ton avenir est rempli de possibilités infinies.",
        ];

        $randomResponse = $responses[array_rand($responses)];

        $this->autoRender = false;
        $this->response = $this->response->withType('application/json')->withStringBody(json_encode($randomResponse));
        return $this->response;
    }

    // public function login() {
    //     // $cpt = "bonjour";
    //     // $this->set(compact('cpt'));
    //     $this->viewBuilder()->setLayout('testLayout');

    // }
}

?>