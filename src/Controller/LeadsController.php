<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Leads Controller
 *
 * @property \App\Model\Table\LeadsTable $Leads
 *
 * @method \App\Model\Entity\Lead[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeadsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lawfirms', 'Users', 'Agents']
        ];
        $options=array();
        if($this->request->getQuery('first_name') != null){
          $options[] =  ['Leads.first_name like' => '%'.$this->request->getQuery('first_name').'%'];

        }
        if($this->request->getQuery('last_name') != null){
        $options[] =  ['Leads.last_name like' => '%'.$this->request->getQuery('last_name').'%'];

        }
        if($this->request->getQuery('agent_id') != null){
        $options[] =  ['Leads.agent_id' => $this->request->getQuery('agent_id')];

        }
        $query =  $this->Leads->find('all')->where($options);
          $agents =  $this->Leads->Agents->find('list');

        $leads = $this->paginate($query);

        $this->set(compact('leads', 'agents'));
    }

    /**
     * View method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lead = $this->Leads->get($id, [
            'contain' => ['Lawfirms', 'Users', 'Accounts', 'Charges', 'Comments']
        ]);

        $this->set('lead', $lead);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lead = $this->Leads->newEntity();
        if ($this->request->is('post')) {
            $lead = $this->Leads->patchEntity($lead, $this->request->getData());
            if ($this->Leads->save($lead)) {
                $this->Flash->success(__('The lead has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lead could not be saved. Please, try again.'));
        }
        $lawfirms = $this->Leads->Lawfirms->find('list', ['limit' => 200]);
        $users = $this->Leads->Users->find('list', ['limit' => 200, 'keyField' => 'id',
    'valueField' => 'username']);
        $this->set(compact('lead', 'lawfirms', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lead = $this->Leads->get($id, [
            'contain' => ['Accounts']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lead = $this->Leads->patchEntity($lead, $this->request->getData());
            if ($this->Leads->save($lead)) {
                $this->Flash->success(__('The lead has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lead could not be saved. Please, try again.'));
        }
        $leadcontain = $this->Leads->get($id, [
            'contain' => ['Lawfirms', 'Users', 'Charges.Users', 'Accounts', 'Comments.Users'],
            'recursive' => 2
        ]);
        $lawfirms = $this->Leads->Lawfirms->find('list', ['limit' => 200]);
        $agents = $this->Leads->Agents->find('list', ['limit' => 200, 'keyField' => 'id',
    'valueField' => 'name']);
        $this->set(compact('lead', 'lawfirms', 'agents', 'leadcontain'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lead = $this->Leads->get($id);
        if ($this->Leads->delete($lead)) {
            $this->Flash->success(__('The lead has been deleted.'));
        } else {
            $this->Flash->error(__('The lead could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
