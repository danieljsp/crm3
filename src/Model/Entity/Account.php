<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $accounts
 * @property bool $type
 * @property int $account
 * @property string $financial_institution
 * @property string $routing_number
 * @property string $swift_code
 * @property string $aba_number
 * @property bool $held_credit_union
 * @property string $intermediary_bank
 * @property string $swift_code2
 * @property string $routing_number2
 * @property string $account_number2
 * @property string $aba_number2
 * @property bool $deposit_option
 * @property float $increment
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $lead_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Lead $lead
 */
class Account extends Entity
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
        'type' => true,
        'account' => true,
        'financial_institution' => true,
        'routing_number' => true,
        'swift_code' => true,
        'aba_number' => true,
        'held_credit_union' => true,
        'intermediary_bank' => true,
        'swift_code2' => true,
        'routing_number2' => true,
        'account_number2' => true,
        'aba_number2' => true,
        'deposit_option' => true,
        'increment' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'lead_id' => true,
        'user' => true,
        'lead' => true
    ];
}
