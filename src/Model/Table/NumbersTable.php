<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Numbers Model
 *
 * @method \App\Model\Entity\Number get($primaryKey, $options = [])
 * @method \App\Model\Entity\Number newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Number[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Number|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Number|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Number patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Number[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Number findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NumbersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('numbers');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Files', [
            'className' => 'Files',
            'foreignKey' => 'model_id',
            'conditions' => [
              'entity' => 'Number'
            ]
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmpty('title');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmpty('url');

        return $validator;
    }

    function getBySlug($slug){
        $number = $this->find('all',[
          'conditions'=>['slug'=>$slug],
          'contain' => ['files']
        ])->first();
        
        return $number;
    }
}
