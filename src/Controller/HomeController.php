<?php
declare(strict_types=1);

namespace App\Controller;


use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

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
            "Je suis sûr(e) que tu vas surmonter cela. Tu es en train de devenir une personne plus confiante et plus sûre d'elle, et je suis convaincu(e) que tu vas accomplir de grandes choses dans la vie. Ton avenir est rempli de possibilités infinies.",
        ];

        $randomResponse = $responses[array_rand($responses)];

        $logs = $this->getTableLocator()->get('MessagesHistory');
        $log = $logs->newEmptyEntity();
        $log->msg = $user_input;
        $log->response = $randomResponse;
        $id_user = $this->request->getAttribute('identity')->getIdentifier();
        $log->user_id = $id_user;
        $logs->save($log);

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