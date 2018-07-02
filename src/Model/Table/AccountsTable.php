<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accounts Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\BelongsTo $Leads
 *
 * @method \App\Model\Entity\Account get($primaryKey, $options = [])
 * @method \App\Model\Entity\Account newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Account[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Account|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Account[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Account findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountsTable extends Table
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

        $this->setTable('accounts');
        $this->setDisplayField('accounts');
        $this->setPrimaryKey('accounts');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Leads', [
            'foreignKey' => 'lead_id'
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
            ->integer('accounts')
            ->allowEmpty('accounts', 'create');

        $validator
            ->boolean('type')
            ->allowEmpty('type');

        $validator
            ->integer('account')
            ->allowEmpty('account');

        $validator
            ->scalar('financial_institution')
            ->maxLength('financial_institution', 50)
            ->allowEmpty('financial_institution');

        $validator
            ->scalar('routing_number')
            ->maxLength('routing_number', 50)
            ->allowEmpty('routing_number');

        $validator
            ->scalar('swift_code')
            ->maxLength('swift_code', 50)
            ->allowEmpty('swift_code');

        $validator
            ->scalar('aba_number')
            ->maxLength('aba_number', 50)
            ->allowEmpty('aba_number');

        $validator
            ->boolean('held_credit_union')
            ->allowEmpty('held_credit_union');

        $validator
            ->scalar('intermediary_bank')
            ->maxLength('intermediary_bank', 50)
            ->allowEmpty('intermediary_bank');

        $validator
            ->scalar('swift_code2')
            ->maxLength('swift_code2', 50)
            ->allowEmpty('swift_code2');

        $validator
            ->scalar('routing_number2')
            ->maxLength('routing_number2', 50)
            ->allowEmpty('routing_number2');

        $validator
            ->scalar('account_number2')
            ->maxLength('account_number2', 50)
            ->allowEmpty('account_number2');

        $validator
            ->scalar('aba_number2')
            ->maxLength('aba_number2', 50)
            ->allowEmpty('aba_number2');

        $validator
            ->boolean('deposit_option')
            ->allowEmpty('deposit_option');

        $validator
            ->numeric('increment')
            ->allowEmpty('increment');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['lead_id'], 'Leads'));

        return $rules;
    }
}
