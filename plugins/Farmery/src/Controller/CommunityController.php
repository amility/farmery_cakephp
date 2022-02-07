<?php
namespace Farmery\Controller;
use Cake\Cache\Cache;
use Farmery\Controller\AppController;

/**
 * Community Controller
 *
 *
 * @method \Farmery\Model\Entity\Community[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommunityController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $communities = Cache::read('cache_community_list', 'one_year');
        if ($communities === false) {
            $communities = $this->Service->post('getCommunityList');
            Cache::write('cache_community_list', $communities, 'one_year');
        }
        $community = $communities['data'][0];
        $community_id = 0;
        if(isset($this->request->params['community_name'])){
            $communityLabel =  $this->request->params['community_name'];
            $communities = $this->Service->post('getCommunityList');
            $community='';
            foreach ($communities['data'] as $key => $communitylabeldata) {
		    	if (strcmp($communityLabel, $communitylabeldata['name']) === 0) {
		    		$community = $communitylabeldata;
                    $community_id = $key;
		    	}
		    }
        }
        $this->set(compact('community','communities','community_id'));
    }

    /**
     * View method
     *
     * @param string|null $id Community id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $community = $this->Community->get($id, [
            'contain' => [],
        ]);

        $this->set('community', $community);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $community = $this->Community->newEntity();
        if ($this->request->is('post')) {
            $community = $this->Community->patchEntity($community, $this->request->getData());
            if ($this->Community->save($community)) {
                $this->Flash->success(__('The community has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The community could not be saved. Please, try again.'));
        }
        $this->set(compact('community'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Community id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $community = $this->Community->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $community = $this->Community->patchEntity($community, $this->request->getData());
            if ($this->Community->save($community)) {
                $this->Flash->success(__('The community has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The community could not be saved. Please, try again.'));
        }
        $this->set(compact('community'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Community id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $community = $this->Community->get($id);
        if ($this->Community->delete($community)) {
            $this->Flash->success(__('The community has been deleted.'));
        } else {
            $this->Flash->error(__('The community could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
