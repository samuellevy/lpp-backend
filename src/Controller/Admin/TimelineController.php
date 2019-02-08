<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

class TimelineController extends AppController
{

  public function initialize(){
		parent::initialize();
		$this->loadComponent('Fix');
	}

  public function index(){
    $timeline = $this->paginate($this->Timeline);
    $this->set(compact('timeline'));
    $this->set('_serialize', ['timeline']);
  }

  public function add(){
    $timeline = $this->Timeline->newEntity();

    if ($this->request->is('post')) {
      $timeline = $this->Timeline->patchEntity($timeline, $this->request->getData(),[
        'associated' => [
          'Files'
        ]
      ]);

      if ($this->Timeline->save($timeline)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    $this->set(compact('timeline'));
    $this->set('_serialize', ['timeline']);
  }

  public function edit($id = null){
    $timeline = $this->Timeline->get($id, [
      'contain' => ['Files']
    ]);

    // die(debug($timeline));

    if ($this->request->is(['patch', 'post', 'put'])) {
      $timeline = $this->Timeline->patchEntity($timeline, $this->request->getData());
      
      foreach($timeline->files as $key_file=>$file){
        if($file->filename==''){
          unset($timeline->files[$key_file]);
        }
      }

      if ($this->Timeline->save($timeline)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('timeline'));
    $this->set('_serialize', ['timeline']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $timeline = $this->Timeline->get($id);
    if ($this->Timeline->delete($timeline)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }
}
