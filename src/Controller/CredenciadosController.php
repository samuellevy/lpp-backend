<?php
namespace App\Controller;

class CredenciadosController extends AppController
{
	public function search(){
		
	}

	public function get(){
		$this->loadModel('Credenciados');

		$prestador = $this->request->query('prestador');
		$servico = $this->request->query('servico');
		$especialidade = $this->request->query('especialidade');
		$cidade = $this->request->query('cidade');
		
		$conditions = [];
		if($prestador){
			$conditions = array_merge($conditions,['prestador LIKE'=>'%'.$prestador.'%']);
		}
		if($servico){
			$conditions = array_merge($conditions,['servico'=>$servico]);
		}
		if($especialidade){
			$conditions = array_merge($conditions,['especialidade'=>$especialidade]);
		}
		if($prestador){
			$conditions = array_merge($conditions,['cidade'=>$cidade]);
		}
		
		$credenciados = $this->Credenciados->find('all',[
			'conditions'=>$conditions,
		])->all();
	}
}
