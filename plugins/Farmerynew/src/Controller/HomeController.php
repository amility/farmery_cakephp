<?php

namespace Farmerynew\Controller;
use Cake\Cache\Cache;
use Farmerynew\Controller\AppController;

/**
 * Home Controller
 *
 *
 * @method \Farmery\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
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
        //$time = microtime( TRUE );
        $bannersData = $this->Service->post('getHomePageBanners');
        //$time = microtime( TRUE ) - $time;
        //echo "bannersData".$time."\n";
        $communities = Cache::read('cache_community_list', 'one_year');
        if ($communities === false) {
            $communities = $this->Service->post('getCommunityList');
            Cache::write('cache_community_list', $communities, 'one_year');
        }
        $blogData = Cache::read('cache_feature_blogs', 'one_year');
        if ($blogData === false) {
            $blogData = $this->Service->post('getFeatureBlogs',['blog_count'=>3]);
            Cache::write('cache_feature_blogs', $blogData, 'one_year');
        }
        $displayBanners = [];
        if (!empty($bannersData) && isset($bannersData['banners'])) {
            $displayBanners = $bannersData['banners'];
        }
        // print_r($displayBanners);exit;


        /**
         * get categories
         */
        //$time = microtime( TRUE );
        $categories = $this->Service->post('getProductCategories');
        //$time = microtime( TRUE ) - $time;
        //echo "categories".$time."\n";
        //die('end');
        $hub_id = 2; // TODO later we can make it dynemic
        $limit = 5;
        $productCategoryResult = array();
      
        foreach ($categories['data'] as $category) {
            $productCategories = $this->Service->post('getCatalogByCategory', ['category_id' => $category['id'], 'hub_id' => $hub_id]);
            $productInfo = array();
            $i = 0;
            if(!empty($productCategories) && isset($productCategories['data']['products']))
            {
                foreach ($productCategories['data']['products']['data'] as $product) {
                    $productInfo[$i]['id'] = $product['product_id'];
                    $productInfo[$i]['product_name'] = $product['product_name'];
                    $productInfo[$i]['product_image'] = $product['product_image'];
                    $productInfo[$i]['type'] = $product['type'];
                    $i++;
                    if ($i >= $limit) {
                        break;
                    }
                }
            }
            $productCategoryResult[$category['id']] = $productInfo;
        }
        // print_r($communities);exit;

        $this->set(compact('displayBanners','categories','productCategoryResult','communities','blogData'));
    }
    
    public function citiesAjax() 
    {
        $city_id = $_GET['cityid'];
        $areas = $this->Service->post('getCombinedAreasAndSubAreasList', ['city_id'=>$city_id]); 
        
        $area_data = $subarea_data = [];
        $areadata["area_id"] = '';
        $areadata["area_name"] ='Select Area' ;
        $area_data[0]= $areadata;
        $encodedData = json_encode($areas);
        $decodedData = json_decode($encodedData,true);
        foreach ($decodedData["area"] as $values) {
            $areadata["area_id"] = $values["area_id"];
            $areadata["area_name"] = $values["area_name"];
            $area_data[$values["area_id"]]= $areadata;
            if(empty($subarea_data[$values["area_id"]])){
                $subareadata["hub_id"] = '';
                $subareadata["sub_area_id"] = '';
                $subareadata["subarea_name"] = 'Select Subarea' ;
                $subarea_data[$values["area_id"]][]= $subareadata;
            }
            $subareadata["hub_id"] = $values["hub_id"];
            $subareadata["sub_area_id"] = $values["sub_area_id"];
            $subareadata["subarea_name"] = $values["subarea_name"];
            $subarea_data[$values["area_id"]][]= $subareadata;
        }
        $Response = array('areadata'=> $area_data,'subareadata'=> $subarea_data);
        echo json_encode($Response);
        exit;
    }
    public function productAjax() 
    {
        $this->autoRender = false;
       
            $category_id = $_GET['id'];
         
            $hub_id = 2; // TODO later we can make it dynemic
            $limit = 5;
            $productCategoryResult = array();
            $productCategories = $this->Service->post('getCatalogByCategory', ['category_id' => $category_id, 'hub_id' => $hub_id]);
            $productInfo = array();
            $i = 0;
            if(!empty($productCategories) && isset($productCategories['data']['products']))
            {
                foreach ($productCategories['data']['products']['data'] as $product) {
                    $productInfo[$i]['id'] = $product['product_id'];
                    $productInfo[$i]['product_name'] = $product['product_name'];
                    $productInfo[$i]['product_image'] = $product['product_image'];
                    $productInfo[$i]['type'] = $product['type'];
                    $i++;
                    if ($i >= $limit) {
                        break;
                    }
                }
            }    
            $productCategoryResult = $productInfo;
            $Response = array('data' => $productCategoryResult);
            echo json_encode($Response);
            exit;
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
