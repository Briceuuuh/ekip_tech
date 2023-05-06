<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

class HomeController extends AppController {

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['index']);
    }

    public function index() {
        $this->viewBuilder()->setLayout('homeLayout');

    }

    // public function login() {
    //     // $cpt = "bonjour";
    //     // $this->set(compact('cpt'));
    //     $this->viewBuilder()->setLayout('testLayout');

    // }
}

?>