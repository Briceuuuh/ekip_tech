<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Thread Controller
 *
 * @property \App\Model\Table\ThreadTable $Thread
 * @method \App\Model\Entity\Thread[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ThreadController extends AppController
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
        $thread = $this->paginate($this->Thread);

        $this->set(compact('thread'));
    }

    /**
     * View method
     *
     * @param string|null $id Thread id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thread = $this->Thread->get($id, [
            'contain' => ['Users', 'MessageHistory'],
        ]);

        $this->set(compact('thread'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thread = $this->Thread->newEmptyEntity();
        if ($this->request->is('post')) {
            $thread = $this->Thread->patchEntity($thread, $this->request->getData());
            if ($this->Thread->save($thread)) {
                $this->Flash->success(__('The thread has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The thread could not be saved. Please, try again.'));
        }
        $users = $this->Thread->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('thread', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Thread id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thread = $this->Thread->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thread = $this->Thread->patchEntity($thread, $this->request->getData());
            if ($this->Thread->save($thread)) {
                $this->Flash->success(__('The thread has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The thread could not be saved. Please, try again.'));
        }
        $users = $this->Thread->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('thread', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Thread id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thread = $this->Thread->get($id);
        if ($this->Thread->delete($thread)) {
            $this->Flash->success(__('The thread has been deleted.'));
        } else {
            $this->Flash->error(__('The thread could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
