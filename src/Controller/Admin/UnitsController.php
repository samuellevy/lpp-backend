<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

class UnitsController extends AppController
{
  public function index(){
    $units = $this->paginate($this->Units, [
      'contain'=>[
      ],
      'order'=>[
        'id'=>'ASC'
      ]
    ]);

    $this->set(compact('units'));
    $this->set('_serialize', ['units']);
  }

  public function add()
  {
    $units = $this->Units->newEntity();

    if ($this->request->is('post')) {
      $units = $this->Units->patchEntity($units, $this->request->getData());

      if ($this->Units->save($units)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('units'));
    $this->set('_serialize', ['units']);
  }

  public function view($id = null)
  {
    $units = $this->Units->get($id, [
      'contain' => [
        'BlogCategories',
        'BlogInstituteTags.Tags',
        'Files'
      ]
    ]);

    $this->set('units', $units);
    $this->set('_serialize', ['units']);
  }

  public function edit($id = null)
  {
    $units = $this->Units->get($id, [
      'contain' => [
        'Files'
      ]
    ]);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $old_units = $units;
      $old_files = $units->getOriginal('files');
      $units = $this->Units->patchEntity($units, $this->request->getData());
      // procura file vazio
      foreach($units->files as $key=>$file){
        if(empty($units->files[$key]->filename)){
          unset($units->files[$key]);
        }else{
          if(!empty($old_files[0])){
            foreach($old_files as $old_file){
              if($file->obs == $old_file->obs){
                $this->delete_file($old_file->id);
              }
            }
          }
        }
      }
      if ($this->Units->save($units)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo..'));
    }
    $this->set(compact('units'));
    $this->set('_serialize', ['units']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $units = $this->Units->get($id);
    if ($this->Units->delete($units)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /* AJAX methods */

  public function delete_file($file_id = null, $units_id=null){
    $this->autoRender = false;
    $entity = $this->Units->Files->get($file_id);

    if($this->Units->Files->delete($entity)){
      echo('1');
    }
  }
}
