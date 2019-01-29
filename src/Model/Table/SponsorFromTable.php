<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class SponsorFromTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('sponsor_from');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SponsorFrom', [
            'foreignKey' => 'sponsor_from_id'
        ]);
    }
}
