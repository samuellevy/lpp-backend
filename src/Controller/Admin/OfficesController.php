<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;
use Cake\Event\Event;

class OfficesController extends AppController
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
    $this->loadModel('Offices');
    $offices = $this->paginate($this->Offices, [
      'contain'=>[

      ],
      'order'=>[
        'created'=>'DESC'
      ]
    ]);
  
    $this->set(compact('offices'));
    $this->set('_serialize', ['offices']);
  }

  public function add(){
    $office = $this->Offices->newEntity();

    if ($this->request->is('post')) {
      $office = $this->Offices->patchEntity($office, $this->request->getData(),[
        'associated' => [
        ]
      ]);

      if ($this->Offices->save($office)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    $this->set(compact('office'));
    $this->set('_serialize', ['office']);
  }

  public function edit($id = null)
  {
    $office = $this->Offices->get($id, [
      
    ]);

    // die(debug($office));

    if ($this->request->is(['patch', 'post', 'put'])) {
      $office = $this->Offices->patchEntity($office, $this->request->getData());
      
      // foreach($office->files as $key_file=>$file){
      //   if($file->filename==''){
      //     unset($office->files[$key_file]);
      //   }
      // }

      if ($this->Offices->save($office)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('office'));
    $this->set('_serialize', ['office']);
  }

  /** AJAX METHODS */
  public function changeStatus($id){
    $this->autoRender = false;
    $entity = $this->Offices->get($id);
    $status = $this->request->data['status'];

    if($status == 'toggle'){
      if($entity->status==1){
        $status=0;
      }else{
        $status=1;
      }
    }

    $entity->status=$status;

    $post_data = ['Offices.status'=>0];

    $table = $this->Offices->patchEntity($entity, $post_data);
    $this->Offices->save($table);  //update record
  }

  public function delete($id = null){
    $this->request->allowMethod(['post', 'delete']);
    $office = $this->Offices->get($id);
    if ($this->Offices->delete($office)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }
}
