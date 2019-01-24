<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CredenciadosTable extends Table
{
	// public static function defaultConnectionName() {
	// 	return 'cac';
	// }
	
	public function initialize(array $config)
	{
		parent::initialize($config);
		
		$this->setTable('ps_tipo_qualiss');
		$this->setDisplayField('descricao');
		$this->setPrimaryKey('id_tipo_qualis');
	}

	
}
