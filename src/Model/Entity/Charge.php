<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Charge Entity
 *
 * @property int $int
 * @property float $charges
 * @property string $concept
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $lead_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Lead $lead
 */
class Charge extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'charges' => true,
        'concept' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'lead_id' => true,
        'user' => true,
        'lead' => true
    ];
}
