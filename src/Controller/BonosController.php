<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bonos Controller
 *
 * @property \App\Model\Table\BonosTable $Bonos
 */
class BonosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $bonos = $this->paginate($this->Bonos);

        $this->set(compact('bonos'));
        $this->set('_serialize', ['bonos']);
    }

    /**
     * View method
     *
     * @param string|null $id Bono id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bono = $this->Bonos->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('bono', $bono);
        $this->set('_serialize', ['bono']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bono = $this->Bonos->newEntity();
        if ($this->request->is('post')) {
            $bono = $this->Bonos->patchEntity($bono, $this->request->getData());
            if ($this->Bonos->save($bono)) {
                $this->Flash->success(__('The bono has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bono could not be saved. Please, try again.'));
        }
        $clients = $this->Bonos->Clients->find('list', ['limit' => 200]);
        $this->set(compact('bono', 'clients'));
        $this->set('_serialize', ['bono']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bono id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bono = $this->Bonos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bono = $this->Bonos->patchEntity($bono, $this->request->getData());
            if ($this->Bonos->save($bono)) {
                $this->Flash->success(__('The bono has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bono could not be saved. Please, try again.'));
        }
        $clients = $this->Bonos->Clients->find('list', ['limit' => 200]);
        $this->set(compact('bono', 'clients'));
        $this->set('_serialize', ['bono']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bono id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bono = $this->Bonos->get($id);
        if ($this->Bonos->delete($bono)) {
            $this->Flash->success(__('The bono has been deleted.'));
        } else {
            $this->Flash->error(__('The bono could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
