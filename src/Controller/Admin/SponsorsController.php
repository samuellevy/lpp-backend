<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

class SponsorsController extends AppController
{

  public function initialize(){
		parent::initialize();
		$this->loadComponent('Fix');
	}

  public function index(){
    $sponsors = $this->paginate($this->Sponsors);
    $this->set(compact('sponsors'));
    $this->set('_serialize', ['sponsors']);
  }

  public function add(){
    $sponsor = $this->Sponsors->newEntity();

    if ($this->request->is('post')) {
      $sponsor = $this->Sponsors->patchEntity($sponsor, $this->request->getData(),[
        'associated' => [
          'Files'
        ]
      ]);

      if ($this->Sponsors->save($sponsor)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    $this->set(compact('sponsor'));
    $this->set('_serialize', ['sponsor']);
  }

  public function edit($id = null)
  {
    $sponsor = $this->Sponsors->get($id, [
      'contain' => ['Files']
    ]);

    // die(debug($sponsor));

    if ($this->request->is(['patch', 'post', 'put'])) {
      $sponsor = $this->Sponsors->patchEntity($sponsor, $this->request->getData());
      
      foreach($sponsor->files as $key_file=>$file){
        if($file->filename==''){
          unset($sponsor->files[$key_file]);
        }
      }

      if ($this->Sponsors->save($sponsor)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('sponsor'));
    $this->set('_serialize', ['sponsor']);
  }
}
