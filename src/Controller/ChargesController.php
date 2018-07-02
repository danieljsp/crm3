<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Charges Controller
 *
 * @property \App\Model\Table\ChargesTable $Charges
 *
 * @method \App\Model\Entity\Charge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChargesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Leads']
        ];
        $charges = $this->paginate($this->Charges);

        $this->set(compact('charges'));
    }

    /**
     * View method
     *
     * @param string|null $id Charge id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $charge = $this->Charges->get($id, [
            'contain' => ['Users', 'Leads']
        ]);

        $this->set('charge', $charge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $charge = $this->Charges->newEntity();
        if ($this->request->is('post')) {
            $charge = $this->Charges->patchEntity($charge, $this->request->getData());
            if ($this->Charges->save($charge)) {
                $this->Flash->success(__('The charge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The charge could not be saved. Please, try again.'));
        }
        $users = $this->Charges->Users->find('list', ['limit' => 200]);
        $leads = $this->Charges->Leads->find('list', ['limit' => 200]);
        $this->set(compact('charge', 'users', 'leads'));
    }
    public function addid($lead_id)
    {
      $u = $this->Auth->user('id');
        $charge = $this->Charges->newEntity();
        if ($this->request->is('post')) {
            $charge = $this->Charges->patchEntity($charge, $this->request->getData());
            if ($this->Charges->save($charge)) {
                $this->Flash->success(__('The charge has been saved.'));

                return $this->redirect(['action' => 'edit', 'controller' => 'leads', $lead_id]);
            }
            $this->Flash->error(__('The charge could not be saved. Please, try again.'));
        }
        $users = $this->Charges->Users->find('list', ['limit' => 200]);
        $leads = $this->Charges->Leads->find('list', ['limit' => 200]);
        $this->set(compact('charge', 'users', 'leads','lead_id', 'u'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Charge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $charge = $this->Charges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $charge = $this->Charges->patchEntity($charge, $this->request->getData());
            if ($this->Charges->save($charge)) {
                $this->Flash->success(__('The charge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The charge could not be saved. Please, try again.'));
        }
        $users = $this->Charges->Users->find('list', ['limit' => 200]);
        $leads = $this->Charges->Leads->find('list', ['limit' => 200]);
        $this->set(compact('charge', 'users', 'leads'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Charge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $charge = $this->Charges->get($id);
        if ($this->Charges->delete($charge)) {
            $this->Flash->success(__('The charge has been deleted.'));
        } else {
            $this->Flash->error(__('The charge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
