<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lead Entity
 *
 * @property int $id
 * @property int $lawfirm_id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property float $price
 * @property string $phone1
 * @property string $phone2
 * @property string $email1
 * @property string $email2
 * @property int $contract
 * @property string $resort1
 * @property string $resort2
 * @property string $weeks_points
 * @property string $adress1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property bool $pa
 * @property bool $sent_anex
 * @property bool $received_anex
 * @property bool $paid
 * @property bool $approved_anex
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $agent_id
 *
 * @property \App\Model\Entity\Lawfirm $lawfirm
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Charge[] $charges
 * @property \App\Model\Entity\Comment[] $comments
 */
class Lead extends Entity
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
        'lawfirm_id' => true,
        'user_id' => true,
        'first_name' => true,
        'last_name' => true,
        'price' => true,
        'phone1' => true,
        'phone2' => true,
        'email1' => true,
        'email2' => true,
        'contract' => true,
        'resort1' => true,
        'resort2' => true,
        'weeks_points' => true,
        'adress1' => true,
        'address2' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'pa' => true,
        'sent_anex' => true,
        'received_anex' => true,
        'paid' => true,
        'approved_anex' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'agent_id' => true,
        'lawfirm' => true,
        'user' => true,
        'accounts' => true,
        'charges' => true,
        'comments' => true
    ];
}
