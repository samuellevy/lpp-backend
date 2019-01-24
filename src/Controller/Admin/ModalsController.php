<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;
use Cake\Event\Event;

class ModalsController extends AppController
{

  public function initialize(){
		parent::initialize();
  }
  
  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $token = $this->request->getParam('_csrfToken');
    $this->set(compact('token'));
  }

  public function index(){
    $this->loadModel('Modals');
    $modals = $this->paginate($this->Modals, [
      'contain'=>[

      ],
      'order'=>[
        'created'=>'DESC'
      ]
    ]);
  
    $this->set(compact('modals'));
    $this->set('_serialize', ['modals']);
  }

  public function add(){
    $modal = $this->Modals->newEntity();

    if ($this->request->is('post')) {
      $modal = $this->Modals->patchEntity($modal, $this->request->getData(),[
        'associated' => [
        ]
      ]);

      if ($this->Modals->save($modal)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    $this->set(compact('modal'));
    $this->set('_serialize', ['modal']);
  }

  public function edit($id = null)
  {
    $modal = $this->Modals->get($id, [
      
    ]);

    // die(debug($modal));

    if ($this->request->is(['patch', 'post', 'put'])) {
      $modal = $this->Modals->patchEntity($modal, $this->request->getData());
      
      foreach($modal->files as $key_file=>$file){
        if($file->filename==''){
          unset($modal->files[$key_file]);
        }
      }

      if ($this->Modals->save($modal)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('modal'));
    $this->set('_serialize', ['modal']);
  }

  /** AJAX METHODS */
  public function changeStatus($id){
    $this->autoRender = false;
    $entity = $this->Modals->get($id);
    $status = $this->request->data['status'];

    if($status == 'toggle'){
      if($entity->status==1){
        $status=0;
      }else{
        $status=1;
      }
    }

    $entity->status=$status;

    $post_data = ['Modals.status'=>0];

    $table = $this->Modals->patchEntity($entity, $post_data);
    $this->Modals->save($table);  //update record
  }

  public function delete($id = null){
    $this->request->allowMethod(['post', 'delete']);
    $modal = $this->Modals->get($id);
    if ($this->Modals->delete($modal)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }
}
