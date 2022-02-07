<?php
namespace Farmerynew\Controller;

use Farmerynew\Controller\AppController;

/**
 * Registration Controller
 *
 *
 * @method \Farmerynew\Model\Entity\Registration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrationController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        // disable Csrf on specefic action
        // $this->Auth->allow(['index']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $registration = $this->paginate($this->Registration);

        $this->set(compact('registration'));
    }

    /**
     * View method
     *
     * @param string|null $id Registration id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function sendRegisterOtp($data)
    {
        // $response = $this->Service->post('sendRegisterOtp',$this->request->post['data']);
print_r($this->request->getParam('data'));
print_r($data);
exit;
    }
    public function getAppLink()
    {
        $phoneNumber = $this->request->getData();
        //mobile no validation required
        $this->Service->post('sendAppDownloadLink',$phoneNumber[0]);
        $Response = array('result' => 'success', 'message' => 'We have sent an sms to your number ' . $phoneNumber[0] . ' with the download link');
        echo json_encode($Response);
        exit;
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registration = $this->Registration->newEntity();
        if ($this->request->is('post')) {
            $registration = $this->Registration->patchEntity($registration, $this->request->getData());
            if ($this->Registration->save($registration)) {
                $this->Flash->success(__('The registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration could not be saved. Please, try again.'));
        }
        $this->set(compact('registration'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registration = $this->Registration->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registration = $this->Registration->patchEntity($registration, $this->request->getData());
            if ($this->Registration->save($registration)) {
                $this->Flash->success(__('The registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration could not be saved. Please, try again.'));
        }
        $this->set(compact('registration'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registration = $this->Registration->get($id);
        if ($this->Registration->delete($registration)) {
            $this->Flash->success(__('The registration has been deleted.'));
        } else {
            $this->Flash->error(__('The registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
