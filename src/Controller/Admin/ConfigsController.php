<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

class ConfigsController extends AppController
{

  public function initialize(){
		parent::initialize();
		$this->loadComponent('Fix');
	}

  public function index(){
    $configs = $this->paginate($this->Configs);
    $this->set(compact('configs'));
    $this->set('_serialize', ['configs']);
  }

  public function add(){
    $config = $this->Configs->newEntity();

    if ($this->request->is('post')) {
      $config = $this->Configs->patchEntity($config, $this->request->getData(),[
        'associated' => [
          'Files'
        ]
      ]);

      if ($this->Configs->save($config)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    $this->set(compact('config'));
    $this->set('_serialize', ['config']);
  }

  public function edit($id = null)
  {
    $config = $this->Configs->get($id, [
      'contain' => [
        'Components',
        'Files'
      ]
    ]);

    // die(debug($config));

    if ($this->request->is(['patch', 'post', 'put'])) {
      $config = $this->Configs->patchEntity($config, $this->request->getData());
      
      foreach($config->files as $key_file=>$file){
        if($file->filename==''){
          unset($config->files[$key_file]);
        }
      }

      if ($this->Configs->save($config)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('config'));
    $this->set('_serialize', ['config']);
  }
}
