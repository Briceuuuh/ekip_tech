<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MessageHistory Controller
 *
 * @property \App\Model\Table\MessageHistoryTable $MessageHistory
 * @method \App\Model\Entity\MessageHistory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessageHistoryController extends AppController
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
        $messageHistory = $this->paginate($this->MessageHistory);

        $this->set(compact('messageHistory'));
    }

    /**
     * View method
     *
     * @param string|null $id Message History id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $messageHistory = $this->MessageHistory->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('messageHistory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $messageHistory = $this->MessageHistory->newEmptyEntity();
        if ($this->request->is('post')) {
            $messageHistory = $this->MessageHistory->patchEntity($messageHistory, $this->request->getData());
            if ($this->MessageHistory->save($messageHistory)) {
                $this->Flash->success(__('The message history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message history could not be saved. Please, try again.'));
        }
        $users = $this->MessageHistory->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('messageHistory', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Message History id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $messageHistory = $this->MessageHistory->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $messageHistory = $this->MessageHistory->patchEntity($messageHistory, $this->request->getData());
            if ($this->MessageHistory->save($messageHistory)) {
                $this->Flash->success(__('The message history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message history could not be saved. Please, try again.'));
        }
        $users = $this->MessageHistory->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('messageHistory', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Message History id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $messageHistory = $this->MessageHistory->get($id);
        if ($this->MessageHistory->delete($messageHistory)) {
            $this->Flash->success(__('The message history has been deleted.'));
        } else {
            $this->Flash->error(__('The message history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
