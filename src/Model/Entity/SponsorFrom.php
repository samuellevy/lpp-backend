<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class SponsorFrom extends Entity
{
    protected $_accessible = [
        'id' => false,
        '*'=>true
    ];
}
