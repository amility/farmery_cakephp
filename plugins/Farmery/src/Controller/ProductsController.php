<?php
namespace Farmery\Controller;

use Farmery\Controller\AppController;

/**
 * Products Controller
 *
 *
 * @method \Farmery\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $products = '';
        $categories = $this->Service->post('getProductCategories');
        $pageCategory = $categories['data'][0];
        $cat_id = $categories['data'][0]['id'];
        $isCategoryPage = false;
        $hub_id = 2; // TODO later we can make it dynemic
        $productCategoryResult = array();
        if(isset($this->request->params['type']) && $this->request->params['type'] == 'category'){
            if(isset($this->request->params['cat_id'])){
                $isCategoryPage = true;
                foreach ($categories['data'] as $category) {
                    if (strcasecmp($cat_id, $category['id']) === 0) {
                        $cat_id = $this->request->params['cat_id'];
                        $pageCategory = $category;
                    }
                }
            }
        }
        $productCategories = $this->Service->post('getCatalogByCategory', ['category_id' => $cat_id, 'hub_id' => $hub_id]);
       
        $this->set(compact('products','categories','pageCategory','isCategoryPage','productCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function trial()
    {
        
        if (isset($this->request->params['product_id'])) {
            $response = $this->Service->post('getSubscriptionWithUnsubscribeProducts',true);
            // ($this->request->params['product_id']);
            $error = null;
            if ($response instanceof Response && $response->status === false) {
				return $response;
			}
print_r($response);exit;
			$decodedResponse = json_decode($response, true);
			$trialProducts = [];
			foreach ($decodedResponse['products'] as $productResponse) {

				if (array_key_exists('trial_id', $productResponse) && $productResponse['trial_id'] !== '') {
					if (array_key_exists('status_label', $productResponse) && $productResponse['status_label'] === 'Not Subscribed') {

						$product = new SubscriptionProduct();

						$product->setProductId($productResponse['product_id']);
						$product->setIcon($productResponse['icon']);
						$product->setProductName($productResponse['product_name']);
						$product->setProductImage($productResponse['product_image']);

						if (isset($productResponse['unit_price'])) {
							$product->setUnitPrice($productResponse['unit_price']);
						}
						$product->setPrice($productResponse['price']);
						$product->setTrialName($productResponse['trial_name']);
						$product->setTrialId($productResponse['trial_id']);
						$product->setTrialType($productResponse['trial_type']);
						$product->setTrialAmount($productResponse['trial_amount']);
						$product->setTrialTotalQuantity($productResponse['trial_total_quantity']);

						if (isset($productResponse['pack_balance'])) {
							$product->setPackBalance($productResponse['pack_balance']);
						}

						if (isset($productResponse['delivery_cycle'])) {
							$product->setDeliveryCycle($productResponse['delivery_cycle']);
						}

						if (isset($productResponse['custom_frequency'])) {
							$product->setCustomFrequency($productResponse['custom_frequency']);
						}

						if (isset($productResponse['pack_size'])) {
							$product->setPackSize($productResponse['pack_size']);
						}

						if (isset($productResponse['qty'])) {
							$product->setQuantity($productResponse['qty']);
						}

						if (isset($productResponse['alternate_qty'])) {
							$product->setAlternateQuantity($productResponse['alternate_qty']);
						}

						$product->setType($productResponse['type']);

						if (isset($productResponse['time_slot'])) {
							$product->setTimeSlot($productResponse['time_slot']);
						}

						if (isset($productResponse['delivery_mode'])) {
							$product->setDeliveryMode($productResponse['delivery_mode']);
						}

						$product->setStartDate($productResponse['start_date']);
						$product->setProductDescription($productResponse['description']);
						$product->setStatus($productResponse['status']);
						$product->setAction($productResponse['action']);
						$product->setUnit($productResponse['unit']);
						$product->setStatusLabel($productResponse['status_label']);

						if (isset($productResponse['subscription_type'])) {
							$product->setSubscriptionType($productResponse['subscription_type']);
						}

						$product->setAvailableFrequency($productResponse['available_frequency']);
						$product->setAvailableTimeSlots($productResponse['available_timeslots']);
						$product->setAvailableDeliveryModes($productResponse['available_delivery_modes']);
						$product->setFaqData($productResponse['faq_data']);
						$product->setTestimonials($decodedResponse['testimonial_data']);

						$trialProducts[] = $product;
					}
				}
			}

			return $trialProducts;
            exit;
            if ( $product instanceof Response ) {
                $error = $this->createError($product->message);
            }
            
		}

    }
    public function productDetails()
    {
        
        if (isset($this->request->params['category_type'])) {
			if ('subscription'==$this->request->params['category_type']) {
                $products = $this->Service->post('getDairyProductDetails',['categoryId' => $this->request->params['category_id'], 'product_id' => $this->request->params['product_id']]);
                $products = $products['data'];
                $this->set(compact('products'));
                $this->render('product_subscription');
    
            } else {
               
                    $products = $this->Service->post('getProductDetails',['category_id' => $this->request->params['category_id'], 'product_id' => $this->request->params['product_id']]);
                    $products = $products['data'];
                    $this->set(compact('products'));
                    $this->render('product_general');

            }
		}

    }
    public function createSubscription()
    {
        
exit();
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
