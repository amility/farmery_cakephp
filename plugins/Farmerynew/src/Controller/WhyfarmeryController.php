<?php
namespace Farmerynew\Controller;

use Farmerynew\Controller\AppController;

/**
 * Whyfarmery Controller
 *
 *
 * @method \Farmerynew\Model\Entity\Whyfarmery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WhyfarmeryController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        // disable Csrf on specefic action
        $this->Auth->allow(['index']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        

    }

    /**
     * View method
     *
     * @param string|null $id Whyfarmery id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $whyfarmery = $this->Whyfarmery->get($id, [
            'contain' => [],
        ]);

        $this->set('whyfarmery', $whyfarmery);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $whyfarmery = $this->Whyfarmery->newEntity();
        if ($this->request->is('post')) {
            $whyfarmery = $this->Whyfarmery->patchEntity($whyfarmery, $this->request->getData());
            if ($this->Whyfarmery->save($whyfarmery)) {
                $this->Flash->success(__('The whyfarmery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The whyfarmery could not be saved. Please, try again.'));
        }
        $this->set(compact('whyfarmery'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Whyfarmery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $whyfarmery = $this->Whyfarmery->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $whyfarmery = $this->Whyfarmery->patchEntity($whyfarmery, $this->request->getData());
            if ($this->Whyfarmery->save($whyfarmery)) {
                $this->Flash->success(__('The whyfarmery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The whyfarmery could not be saved. Please, try again.'));
        }
        $this->set(compact('whyfarmery'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Whyfarmery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $whyfarmery = $this->Whyfarmery->get($id);
        if ($this->Whyfarmery->delete($whyfarmery)) {
            $this->Flash->success(__('The whyfarmery has been deleted.'));
        } else {
            $this->Flash->error(__('The whyfarmery could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
