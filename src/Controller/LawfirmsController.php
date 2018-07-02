<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lawfirms Controller
 *
 * @property \App\Model\Table\LawfirmsTable $Lawfirms
 *
 * @method \App\Model\Entity\Lawfirm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LawfirmsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $lawfirms = $this->paginate($this->Lawfirms);

        $this->set(compact('lawfirms'));
    }

    /**
     * View method
     *
     * @param string|null $id Lawfirm id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lawfirm = $this->Lawfirms->get($id, [
            'contain' => ['Leads']
        ]);

        $this->set('lawfirm', $lawfirm);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lawfirm = $this->Lawfirms->newEntity();
        if ($this->request->is('post')) {
            $lawfirm = $this->Lawfirms->patchEntity($lawfirm, $this->request->getData());
            if ($this->Lawfirms->save($lawfirm)) {
                $this->Flash->success(__('The lawfirm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lawfirm could not be saved. Please, try again.'));
        }
        $this->set(compact('lawfirm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lawfirm id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lawfirm = $this->Lawfirms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lawfirm = $this->Lawfirms->patchEntity($lawfirm, $this->request->getData());
            if ($this->Lawfirms->save($lawfirm)) {
                $this->Flash->success(__('The lawfirm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lawfirm could not be saved. Please, try again.'));
        }
        $this->set(compact('lawfirm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lawfirm id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lawfirm = $this->Lawfirms->get($id);
        if ($this->Lawfirms->delete($lawfirm)) {
            $this->Flash->success(__('The lawfirm has been deleted.'));
        } else {
            $this->Flash->error(__('The lawfirm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
