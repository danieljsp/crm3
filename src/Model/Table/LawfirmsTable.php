<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lawfirms Model
 *
 * @property \App\Model\Table\LeadsTable|\Cake\ORM\Association\HasMany $Leads
 *
 * @method \App\Model\Entity\Lawfirm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lawfirm newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lawfirm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lawfirm|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lawfirm|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lawfirm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lawfirm[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lawfirm findOrCreate($search, callable $callback = null, $options = [])
 */
class LawfirmsTable extends Table
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

        $this->setTable('lawfirms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Leads', [
            'foreignKey' => 'lawfirm_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        return $validator;
    }
}
