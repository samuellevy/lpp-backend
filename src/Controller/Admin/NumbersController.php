<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

class NumbersController extends AppController
{

  public function initialize(){
		parent::initialize();
		$this->loadComponent('Fix');
	}

  public function index(){
    $numbers = $this->paginate($this->Numbers);
    $this->set(compact('numbers'));
    $this->set('_serialize', ['numbers']);
  }

  public function add(){
    $number = $this->Numbers->newEntity();

    if ($this->request->is('post')) {
      $number = $this->Numbers->patchEntity($number, $this->request->getData(),[
        'associated' => [
          'Files'
        ]
      ]);

      if ($this->Numbers->save($number)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    $this->set(compact('number'));
    $this->set('_serialize', ['number']);
  }

  public function edit($id = null){
    $number = $this->Numbers->get($id, [
      'contain' => ['Files','Mobile','Desktop']
    ]);

    // die(debug($number));

    if ($this->request->is(['patch', 'post', 'put'])) {
      $number = $this->Numbers->patchEntity($number, $this->request->getData());
      
      foreach($number->files as $key_file=>$file){
        if($file->filename==''){
          unset($number->files[$key_file]);
        }
      }

      if ($this->Numbers->save($number)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('number'));
    $this->set('_serialize', ['number']);
  }
}
