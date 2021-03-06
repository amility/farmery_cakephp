<?php
namespace Farmerynew\Controller;
use Cake\Cache\Cache;
use Farmerynew\Controller\AppController;

/**
 * Support Controller
 *
 *
 * @method \Farmerynew\Model\Entity\Support[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupportController extends AppController
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
        
        $support = Cache::read('cache_faq_list', 'one_year');
        if ($support === false) {
            $support = $this->Service->post('getFaq');
            Cache::write('cache_faq_list', $support, 'one_year');
        }
        $categories = $this->Service->post('getProductCategories');
        if(isset($this->request->params['cat_id']) && isset($this->request->params['cat_name'])){
            $cat_id =  $this->request->params['cat_id'];
            $cat_name =  $this->request->params['cat_name'];
            $support = $this->Service->post('getFaq',['entity_id' => $cat_id, 'entity_type' => $cat_name]);
        }
        $this->set(compact('support','categories'));
    }
    public function faq()
    {
        $support = Cache::read('cache_faq_list', 'one_year');
        if ($support === false) {
            $support = $this->Service->post('getFaq');
            Cache::write('cache_faq_list', $support, 'one_year');
        }
        $categories = $this->Service->post('getProductCategories');
        $cat_name = '';
        if(isset($this->request->params['cat_id']) && isset($this->request->params['cat_name'])){
            $cat_id =  $this->request->params['cat_id'];
            $cat_name =  $this->request->params['cat_name'];
            $support = $this->Service->post('getFaq',['entity_id' => $cat_id, 'entity_type' => $cat_name]);
        }
        $this->set(compact('support','categories','cat_name'));
    }
    public function privacyPolicy()
    {
        $title = 'Privacy Policy';
        $legal = Cache::read('cache_privacy_policy', 'one_year');
        if ($legal === false) {
            $legal = $this->Service->get('getPrivacyPolicy');
            Cache::write('cache_privacy_policy', $legal, 'one_year');
        }
        
        $this->set(compact('legal', 'title'));
        $this->render('show');
    }
    public function termsandconditions()
    {
        $title = 'Terms and Conditions';
        $legal = Cache::read('cache_term_and_conditions_policy', 'one_year');
        if ($legal === false) {
            $legal = $this->Service->get('getTermsAndConditions');
            Cache::write('cache_term_and_conditions_policy', $legal, 'one_year');
        }
        
        $this->set(compact('legal', 'title'));
        $this->render('show');

    }
    public function refundPolicy()
    {
        $refundPolicy = '';

        $this->set(compact('refundPolicy'));
    }
    public function shippingPolicy()
    {
        $shippingPolicy = '';

        $this->set(compact('shippingPolicy'));
    }

    /**
     * View method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $support = $this->Support->get($id, [
            'contain' => [],
        ]);

        $this->set('support', $support);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $support = $this->Support->newEntity();
        if ($this->request->is('post')) {
            $support = $this->Support->patchEntity($support, $this->request->getData());
            if ($this->Support->save($support)) {
                $this->Flash->success(__('The support has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The support could not be saved. Please, try again.'));
        }
        $this->set(compact('support'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $support = $this->Support->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $support = $this->Support->patchEntity($support, $this->request->getData());
            if ($this->Support->save($support)) {
                $this->Flash->success(__('The support has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The support could not be saved. Please, try again.'));
        }
        $this->set(compact('support'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $support = $this->Support->get($id);
        if ($this->Support->delete($support)) {
            $this->Flash->success(__('The support has been deleted.'));
        } else {
            $this->Flash->error(__('The support could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
