<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Automovils Controller
 *
 * @property \App\Model\Table\AutomovilsTable $Automovils
 */
class AutomovilsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias', 'Tipos']
        ];
        $automovils = $this->paginate($this->Automovils);

        $this->set(compact('automovils'));
        $this->set('_serialize', ['automovils']);
    }

    /**
     * View method
     *
     * @param string|null $id Automovil id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $automovil = $this->Automovils->get($id, [
            'contain' => ['Categorias', 'Tipos', 'Clients']
        ]);

        $this->set('automovil', $automovil);
        $this->set('_serialize', ['automovil']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $automovil = $this->Automovils->newEntity();
        if ($this->request->is('post')) {
            $automovil = $this->Automovils->patchEntity($automovil, $this->request->getData());
            if ($this->Automovils->save($automovil)) {
                $this->Flash->success(__('The automovil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The automovil could not be saved. Please, try again.'));
        }
        $categorias = $this->Automovils->Categorias->find('list', ['limit' => 200]);
        $tipos = $this->Automovils->Tipos->find('list', ['limit' => 200]);
        $clients = $this->Automovils->Clients->find('list', ['limit' => 200]);
        $this->set(compact('automovil', 'categorias', 'tipos', 'clients'));
        $this->set('_serialize', ['automovil']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Automovil id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $automovil = $this->Automovils->get($id, [
            'contain' => ['Clients']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $automovil = $this->Automovils->patchEntity($automovil, $this->request->getData());
            if ($this->Automovils->save($automovil)) {
                $this->Flash->success(__('The automovil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The automovil could not be saved. Please, try again.'));
        }
        $categorias = $this->Automovils->Categorias->find('list', ['limit' => 200]);
        $tipos = $this->Automovils->Tipos->find('list', ['limit' => 200]);
        $clients = $this->Automovils->Clients->find('list', ['limit' => 200]);
        $this->set(compact('automovil', 'categorias', 'tipos', 'clients'));
        $this->set('_serialize', ['automovil']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Automovil id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $automovil = $this->Automovils->get($id);
        if ($this->Automovils->delete($automovil)) {
            $this->Flash->success(__('The automovil has been deleted.'));
        } else {
            $this->Flash->error(__('The automovil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
