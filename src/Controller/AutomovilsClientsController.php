<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AutomovilsClients Controller
 *
 * @property \App\Model\Table\AutomovilsClientsTable $AutomovilsClients
 */
class AutomovilsClientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Automovils', 'Clients']
        ];
        $automovilsClients = $this->paginate($this->AutomovilsClients);

        $this->set(compact('automovilsClients'));
        $this->set('_serialize', ['automovilsClients']);
    }

    /**
     * View method
     *
     * @param string|null $id Automovils Client id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $automovilsClient = $this->AutomovilsClients->get($id, [
            'contain' => ['Automovils', 'Clients']
        ]);

        $this->set('automovilsClient', $automovilsClient);
        $this->set('_serialize', ['automovilsClient']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $automovilsClient = $this->AutomovilsClients->newEntity();
        if ($this->request->is('post')) {
            $automovilsClient = $this->AutomovilsClients->patchEntity($automovilsClient, $this->request->getData());
            if ($this->AutomovilsClients->save($automovilsClient)) {
                $this->Flash->success(__('The automovils client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The automovils client could not be saved. Please, try again.'));
        }
        $automovils = $this->AutomovilsClients->Automovils->find('list', ['limit' => 200]);
        $clients = $this->AutomovilsClients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('automovilsClient', 'automovils', 'clients'));
        $this->set('_serialize', ['automovilsClient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Automovils Client id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $automovilsClient = $this->AutomovilsClients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $automovilsClient = $this->AutomovilsClients->patchEntity($automovilsClient, $this->request->getData());
            if ($this->AutomovilsClients->save($automovilsClient)) {
                $this->Flash->success(__('The automovils client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The automovils client could not be saved. Please, try again.'));
        }
        $automovils = $this->AutomovilsClients->Automovils->find('list', ['limit' => 200]);
        $clients = $this->AutomovilsClients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('automovilsClient', 'automovils', 'clients'));
        $this->set('_serialize', ['automovilsClient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Automovils Client id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $automovilsClient = $this->AutomovilsClients->get($id);
        if ($this->AutomovilsClients->delete($automovilsClient)) {
            $this->Flash->success(__('The automovils client has been deleted.'));
        } else {
            $this->Flash->error(__('The automovils client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
