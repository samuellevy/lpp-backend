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
    $sponsor_type = [0=>'Nenhum', 1=>'Parcerias Institucionais', 2=>'Parceiros', 3=>'Apoiadores'];
    $this->set(compact('sponsor_type'));

    $this->loadModel('SponsorFrom');
    $sponsor_from = $this->SponsorFrom->find('list');
    $this->set(compact('sponsor_from'));

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

  public function edit($id = null){
    $sponsor = $this->Sponsors->newEntity();
    $sponsor_type = [0=>'Nenhum', 1=>'Parcerias Institucionais', 2=>'Parceiros', 3=>'Apoiadores'];
    $this->set(compact('sponsor_type'));

    $this->loadModel('SponsorFrom');
    $sponsor_from = $this->SponsorFrom->find('list');
    $this->set(compact('sponsor_from'));

    $sponsor = $this->Sponsors->get($id, [
      'contain' => ['Files']
    ]);


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

  public function delete($id = null){
    $this->request->allowMethod(['post', 'delete']);
    $sponsor = $this->Sponsors->get($id);
    if ($this->Sponsors->delete($sponsor)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

}
