<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AutomovilsClients Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Automovils
 * @property \Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\AutomovilsClient get($primaryKey, $options = [])
 * @method \App\Model\Entity\AutomovilsClient newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AutomovilsClient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AutomovilsClient|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AutomovilsClient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AutomovilsClient[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AutomovilsClient findOrCreate($search, callable $callback = null, $options = [])
 */
class AutomovilsClientsTable extends Table
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

        $this->setTable('automovils_clients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Automovils', [
            'foreignKey' => 'automovil_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
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
            ->dateTime('feprestamo')
            ->requirePresence('feprestamo', 'create')
            ->notEmpty('feprestamo');

        $validator
            ->dateTime('fedevolucion')
            ->allowEmpty('fedevolucion');

        $validator
            ->decimal('psvalor_cobrar')
            ->allowEmpty('psvalor_cobrar');

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
        $rules->add($rules->existsIn(['automovil_id'], 'Automovils'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
