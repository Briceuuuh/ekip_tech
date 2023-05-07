<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MessagesHistory Controller
 *
 * @property \App\Model\Table\MessagesHistoryTable $MessagesHistory
 * @method \App\Model\Entity\MessagesHistory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesHistoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $messagesHistory = $this->paginate($this->MessagesHistory);

        $this->set(compact('messagesHistory'));
    }

    public function history()
    {
        $connected = $this->request->getAttribute('identity');

        if (!$connected)
            return $this->redirect(['controller' => 'home', 'action' => 'index']);

        $msg = $this->MessagesHistory->find('all');
        $user_id = $this->request->getAttribute('identity')->id;
        $msg = $msg->select([
            'MessagesHistory.msg',
            'MessagesHistory.response'
        ])->where(
            ['MessagesHistory.user_id' => $user_id]
        );
        $this->set(compact('msg'));
    }

    /**
     * View method
     *
     * @param string|null $id Messages History id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $messagesHistory = $this->MessagesHistory->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('messagesHistory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $messagesHistory = $this->MessagesHistory->newEmptyEntity();
        if ($this->request->is('post')) {
            $messagesHistory = $this->MessagesHistory->patchEntity($messagesHistory, $this->request->getData());
            if ($this->MessagesHistory->save($messagesHistory)) {
                $this->Flash->success(__('The messages history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The messages history could not be saved. Please, try again.'));
        }
        $users = $this->MessagesHistory->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('messagesHistory', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Messages History id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $messagesHistory = $this->MessagesHistory->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $messagesHistory = $this->MessagesHistory->patchEntity($messagesHistory, $this->request->getData());
            if ($this->MessagesHistory->save($messagesHistory)) {
                $this->Flash->success(__('The messages history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The messages history could not be saved. Please, try again.'));
        }
        $users = $this->MessagesHistory->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('messagesHistory', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Messages History id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $messagesHistory = $this->MessagesHistory->get($id);
        if ($this->MessagesHistory->delete($messagesHistory)) {
            $this->Flash->success(__('The messages history has been deleted.'));
        } else {
            $this->Flash->error(__('The messages history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
