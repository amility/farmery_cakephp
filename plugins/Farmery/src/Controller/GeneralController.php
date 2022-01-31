<?php
namespace Farmery\Controller;

use Farmery\Controller\AppController;

/**
 * General Controller
 *
 *
 * @method \Farmery\Model\Entity\General[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneralController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $general ='';
        $this->set(compact('general'));
    }

    /**
     * View method
     *
     * @param string|null $id General id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $general = $this->General->get($id, [
            'contain' => [],
        ]);

        $this->set('general', $general);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $general = $this->General->newEntity();
        if ($this->request->is('post')) {
            $general = $this->General->patchEntity($general, $this->request->getData());
            if ($this->General->save($general)) {
                $this->Flash->success(__('The general has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general could not be saved. Please, try again.'));
        }
        $this->set(compact('general'));
    }

    /**
     * Edit method
     *
     * @param string|null $id General id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $general = $this->General->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $general = $this->General->patchEntity($general, $this->request->getData());
            if ($this->General->save($general)) {
                $this->Flash->success(__('The general has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The general could not be saved. Please, try again.'));
        }
        $this->set(compact('general'));
    }

    /**
     * Delete method
     *
     * @param string|null $id General id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $general = $this->General->get($id);
        if ($this->General->delete($general)) {
            $this->Flash->success(__('The general has been deleted.'));
        } else {
            $this->Flash->error(__('The general could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
