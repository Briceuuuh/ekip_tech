<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

class UsersController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);

        /**
         * @var \Authentication\Authenticator\ResultInterface
         */
        $res = $this->Authentication->getResult();

        if ($res->isValid()) {
            $redirection = $this->request->getQuery('redirect', [
                'controller' => 'Home',
                'action' => 'index'
            ]);
            return $this->redirect($redirection);
        }
        if ($this->request->is('post') && !$res->isValid())
            $this->Flash->error("Email ou mot de passe invalide");
    }

    public function logout()
    {
        /**
         * @var \Authentication\Authenticator\ResultInterface
         */
        $res = $this->Authentication->getResult();

        if ($res->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Home', 'action' => 'index']);
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['MessageHistory', 'Thread'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
