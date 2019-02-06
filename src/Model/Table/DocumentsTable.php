<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class DocumentsTable extends Table
{

  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('documents');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    $this->hasMany('Files', [
      'className' => 'Files',
      'foreignKey' => 'model_id',
      'conditions' => [
        'entity' => 'Document'
      ]
    ]);

    $this->hasMany('DocumentsCategory', [
      'foreignKey' => 'document_id'
    ]);

  }

  /**
  * Default validation rules.
  *
  * @param \Cake\Validation\Validator $validator Validator instance.
  * @return \Cake\Validation\Validator
  */
  public function validationDefault(Validator $validator)
  {
    $validator
    ->integer('id')
    ->allowEmpty('id', 'create');
    
    return $validator;
  }
}
