<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* Programs Controller
*
* @property \App\Model\Table\ProgramsTable $Programs
*/
class ProgramsController extends AppController
{
  
	public function initialize(){
		parent::initialize();
		$this->loadComponent('Fix');
	}
	
  public function index()
  {
    $programs = $this->paginate($this->Programs);
    $this->set(compact('programs'));
    $this->set('_serialize', ['programs']);
  }

  public function add()
  {

    $programs = $this->Programs->find('all');
    $programs = $programs->all();
    $programs = $programs->toArray();

    $program = $this->Programs->newEntity();

    if ($this->request->is('post')) {
      $program = $this->Programs->patchEntity($program, $this->request->getData(),[
        'associated' => [
          'Files'
        ]
      ]); 

      foreach($program->files as $key_file=>$file){
        if($file->filename==''){
          unset($program->files[$key_file]);
        }
      }

      $slug = $this->Fix->toSlug($program->name);
      $count = 1;
      foreach ($programs as $item){
        if ($this->Fix->toSlug($item->name) == $slug){
          $count++;
        }
      }

      if ($count > 1){
        $program->slug = $slug.$count;
      } else{
        $program->slug = $slug;
      }

      if ($this->Programs->save($program)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('program'));
    $this->set('_serialize', ['program']);
  }

  public function view($id = null)
  {
    $program = $this->Programs->get($id, [
      'contain' => ['Files']
    ]);

    $this->set('program', $program);
    $this->set('_serialize', ['program']);
  }

  public function edit($id = null)
  {
    $program = $this->Programs->get($id, [
      'contain' => ['Files']
    ]);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $program = $this->Programs->patchEntity($program, $this->request->getData());
      
      foreach($program->files as $key_file=>$file){
        if($file->filename==''){
          unset($program->files[$key_file]);
        }
      }

      if ($this->Programs->save($program)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('program'));
    $this->set('_serialize', ['program']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $program = $this->Programs->get($id);
    if ($this->Programs->delete($program)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /* AJAX methods */

  
}
