<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Account[] $accounts
 * @property \App\Model\Entity\Charge[] $charges
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Lead[] $leads
 */
class User extends Entity
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
     // Make all fields mass assignable except for primary key field "id".
     protected $_accessible = [
         '*' => true,
         'id' => false
     ];

     // ...

     protected function _setPassword($password)
     {
         if (strlen($password) > 0) {
             return (new DefaultPasswordHasher)->hash($password);
         }
     }

}
