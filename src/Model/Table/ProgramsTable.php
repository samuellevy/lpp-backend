<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProgramsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('programs');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');

    $this->hasMany('Files', [
      'className' => 'Files',
      'foreignKey' => 'model_id',
      'conditions' => [
        'entity' => 'Programs'
      ]
    ]);
  }

  public function validationDefault(Validator $validator)
  {
    $validator
    ->integer('id')
    ->allowEmpty('id', 'create');

    $validator
    ->requirePresence('name', 'create')
    ->notEmpty('name');
    
    return $validator;
  }
}