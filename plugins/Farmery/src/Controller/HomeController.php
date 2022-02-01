<?php

namespace Farmery\Controller;

use Farmery\Controller\AppController;

/**
 * Home Controller
 *
 *
 * @method \Farmery\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bannersData = $this->Service->post('getHomePageBanners');
        $displayBanners = [];
        if (!empty($bannersData) && isset($bannersData['banners'])) {
            $displayBanners = $bannersData['banners'];
        }
        // print_r($displayBanners);exit;


        /**
         * get categories
         */
        $categories = $this->Service->post('getProductCategories');
        $hub_id = 2; // TODO later we can make it dynemic
        $limit = 5;
        $productCategoryResult = array();
        // foreach ($categories['data'] as $category) {
        //     $productCategories = $this->Service->post('getCatalogByCategory', ['category_id' => $category['id'], 'hub_id' => $hub_id]);
        //     $productInfo = array();
        //     $i = 0;
        //     if(!empty($productCategories) && isset($productCategories['data']['products']))
        //     {
        //         foreach ($productCategories['data']['products']['data'] as $product) {
        //             $productInfo[$i]['id'] = $product['product_id'];
        //             $productInfo[$i]['product_name'] = $product['product_name'];
        //             $productInfo[$i]['product_image'] = $product['product_image'];
        //             $productInfo[$i]['type'] = $product['type'];
        //             $i++;
        //             if ($i >= $limit) {
        //                 break;
        //             }
        //         }
        //     }
        //     $productCategoryResult[$category['id']] = $productInfo;
        // }
        $this->set(compact('displayBanners','categories'));
    }

    /**
     * View method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $home = $this->Home->get($id, [
            'contain' => [],
        ]);

        $this->set('home', $home);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $home = $this->Home->newEntity();
        if ($this->request->is('post')) {
            $home = $this->Home->patchEntity($home, $this->request->getData());
            if ($this->Home->save($home)) {
                $this->Flash->success(__('The home has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home could not be saved. Please, try again.'));
        }
        $this->set(compact('home'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $home = $this->Home->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $home = $this->Home->patchEntity($home, $this->request->getData());
            if ($this->Home->save($home)) {
                $this->Flash->success(__('The home has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home could not be saved. Please, try again.'));
        }
        $this->set(compact('home'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $home = $this->Home->get($id);
        if ($this->Home->delete($home)) {
            $this->Flash->success(__('The home has been deleted.'));
        } else {
            $this->Flash->error(__('The home could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
