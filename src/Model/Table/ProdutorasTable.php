<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtoras Model
 *
 * @method \App\Model\Entity\Produtora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produtora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produtora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produtora|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produtora saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produtora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produtora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produtora findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutorasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('produtoras');
        $this->setDisplayField('id_produtora');
        $this->setPrimaryKey('id_produtora');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome')
            ->maxLength('nome', 150)
            ->allowEmptyString('nome');

        $validator
            ->integer('id_produtora')
            ->allowEmptyString('id_produtora', null, 'create')
            ->add('id_produtora', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['id_produtora']));

        return $rules;
    }
}
