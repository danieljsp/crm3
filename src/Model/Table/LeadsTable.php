<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Leads Model
 *
 * @property \App\Model\Table\LawfirmsTable|\Cake\ORM\Association\BelongsTo $Lawfirms
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property |\Cake\ORM\Association\BelongsTo $Agents
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\HasMany $Accounts
 * @property \App\Model\Table\ChargesTable|\Cake\ORM\Association\HasMany $Charges
 * @property \App\Model\Table\CommentsTable|\Cake\ORM\Association\HasMany $Comments
 *
 * @method \App\Model\Entity\Lead get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lead newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lead[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lead|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lead|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lead patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lead[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lead findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LeadsTable extends Table
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

        $this->setTable('leads');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Lawfirms', [
            'foreignKey' => 'lawfirm_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Agents', [
            'foreignKey' => 'agent_id'
        ]);
        $this->hasMany('Accounts', [
            'foreignKey' => 'lead_id'
        ]);
        $this->hasMany('Charges', [
            'foreignKey' => 'lead_id'
        ]);
        $this->hasMany('Comments', [
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->allowEmpty('last_name');

        $validator
            ->numeric('price')
            ->allowEmpty('price');

        $validator
            ->scalar('phone1')
            ->maxLength('phone1', 20)
            ->allowEmpty('phone1');

        $validator
            ->scalar('phone2')
            ->maxLength('phone2', 20)
            ->allowEmpty('phone2');

        $validator
            ->scalar('email1')
            ->maxLength('email1', 100)
            ->allowEmpty('email1');

        $validator
            ->scalar('email2')
            ->maxLength('email2', 100)
            ->allowEmpty('email2');

        $validator
            ->integer('contract')
            ->allowEmpty('contract');

        $validator
            ->scalar('resort1')
            ->maxLength('resort1', 20)
            ->allowEmpty('resort1');

        $validator
            ->scalar('resort2')
            ->maxLength('resort2', 20)
            ->allowEmpty('resort2');

        $validator
            ->scalar('weeks_points')
            ->maxLength('weeks_points', 50)
            ->allowEmpty('weeks_points');

        $validator
            ->scalar('adress1')
            ->maxLength('adress1', 30)
            ->allowEmpty('adress1');

        $validator
            ->scalar('address2')
            ->maxLength('address2', 30)
            ->allowEmpty('address2');

        $validator
            ->scalar('city')
            ->maxLength('city', 30)
            ->allowEmpty('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 30)
            ->allowEmpty('state');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 255)
            ->allowEmpty('zip');

        $validator
            ->boolean('pa')
            ->allowEmpty('pa');

        $validator
            ->boolean('sent_anex')
            ->allowEmpty('sent_anex');

        $validator
            ->boolean('received_anex')
            ->allowEmpty('received_anex');

        $validator
            ->boolean('paid')
            ->allowEmpty('paid');

        $validator
            ->boolean('approved_anex')
            ->allowEmpty('approved_anex');

        $validator
            ->scalar('status')
            ->maxLength('status', 20)
            ->allowEmpty('status');

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
        $rules->add($rules->existsIn(['lawfirm_id'], 'Lawfirms'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['agent_id'], 'Agents'));

        return $rules;
    }
}
