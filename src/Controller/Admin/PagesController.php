<?php
namespace App\Controller\Admin;

use App\Controller\AppControllerAdmin;
use Cake\Event\Event;

class PagesController extends AppController
{
  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $general_info['title'] = 'Páginas';
    $this->set(compact($general_info));
  }
  
  public function home(){
    
  }
  
  public function index(){
    $pages = $this->paginate($this->Pages, [
      'contain' => 'PagesComponents'
      ]);
      
      $this->set(compact('pages'));
      $this->set('_serialize', ['pages']);
    }
    
    /**
    * View method
    *
    * @param string|null $id Page id.
    * @return \Cake\Network\Response|null
    * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */
    public function view($id = null){
      $page = $this->Pages->get($id, [
        'contain' => []
        ]);
        
        $this->set('page', $page);
        $this->set('_serialize', ['page']);
      }
      
      /**
      * Add method
      *
      * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
      */
      public function add(){
        $page = $this->Pages->newEntity();
        if ($this->request->is('post')) {
          $page = $this->Pages->patchEntity($page, $this->request->getData());
          $page->type = 1;
          if ($this->Pages->save($page)) {
            $this->Flash->success(__('Salvo com sucesso.'));
            
            return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Não pôde ser salvo.'));
        }
        $this->set(compact('page'));
        $this->set('_serialize', ['page']);
      }
      
      /**
      * Edit method
      *
      * @param string|null $id Page id.
      * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
      * @throws \Cake\Network\Exception\NotFoundException When record not found.
      */
      public function edit($id = null)
      {
        $page = $this->Pages->get($id, [
          'contain' => [
            'PagesComponents'=>[
              'sort'=>['sort'=>'asc']
            ],
            'PagesComponents.Components'
            ]
            ]);
            
            if ($this->request->is(['patch', 'post', 'put'])) {
              $data = $this->request->getData();
              $page = $this->Pages->patchEntity($page, $data);
              
              //case block type on page_component
              foreach($page->pages_components as $key=>$page_component){
                if(isset($page_component->breaked_content)){
                  $page->pages_components[$key]->content = '';
                  foreach($page_component->breaked_content as $br_key=>$breaked_content){
                    $page->pages_components[$key]->content .= $breaked_content;
                    if($br_key < count($page_component->breaked_content)-1){
                      $page->pages_components[$key]->content .= ',';
                    }
                  }
                }
              }
              
              if ($this->Pages->save($page)) {
                $this->Flash->success(__('Salvo com sucesso.'));
                
                return $this->redirect(['action' => 'index']);
              }
              $this->Flash->error(__('Não pôde ser salvo.'));
            }
            $this->set(compact('page'));
            $this->set('_serialize', ['page']);
            
            $this->loadModel('Posts');
            $posts = $this->Posts->find('all', ['order'=>'created DESC']);
            $posts_list = [];
            
            foreach($posts as $post){
              $posts_list[$post->id] = '#'.$post->id.' - '.$post->title;
            }
            $this->set(compact('posts_list'));
          }
          
          /**
          * Delete method
          *
          * @param string|null $id Page id.
          * @return \Cake\Network\Response|null Redirects to index.
          * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
          */
          public function delete($id = null){
            $this->request->allowMethod(['post', 'delete']);
            $page = $this->Pages->get($id);
            if ($this->Pages->delete($page)) {
              $this->Flash->success(__('Removido com sucesso.'));
            } else {
              $this->Flash->error(__('Não pôde ser removido.'));
            }
            
            return $this->redirect(['action' => 'index']);
          }
          
          
          public function teste(){
            $this->loadModel('Timeline');
            $timeline = $this->Timeline->getByYears();
            die(debug($timeline));    
          }
        }
        