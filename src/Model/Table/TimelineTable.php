<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\ConnectionManager;

class TimelineTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('timeline');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->hasMany('Files', [
            'className' => 'Files',
            'foreignKey' => 'model_id',
            'conditions' => [
              'entity' => 'Timeline'
            ]
        ]);
    }

    public function getYears(){
        $connection = ConnectionManager::get('default');
        $results = $connection->execute(
            "SELECT year
            FROM timeline
            GROUP BY year
            ORDER BY year"
            )->fetchAll('assoc');

            if(empty($results)){
                $results = [];
            }
        return $results;
    }

    public function getByYears(){
        $events = $this->find('all', [
            'order'=>['Timeline.year'],
            'contain'=>['Files']
        ])->all();

        $years = $this->getYears();

        $list_events = [];

        foreach($years as $year){
            $year_date = $year['year'];
            $list_events[$year_date]=[];
        }


        foreach($events as $event){
            array_push($list_events[$event->year],$event);
        }

        return $list_events;
    }
}
