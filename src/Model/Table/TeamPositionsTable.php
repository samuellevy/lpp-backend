<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamPositions Model
 *
 * @method \App\Model\Entity\TeamPosition get($primaryKey, $options = [])
 * @method \App\Model\Entity\TeamPosition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TeamPosition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TeamPosition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TeamPosition|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TeamPosition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TeamPosition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TeamPosition findOrCreate($search, callable $callback = null, $options = [])
 */
class TeamPositionsTable extends Table
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

        $this->setTable('team_positions');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->hasMany('Team', [
            'foreignKey' => 'position_id'
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
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
