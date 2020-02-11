<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dvds Model
 *
 * @property \App\Model\Table\ProdutorasTable&\Cake\ORM\Association\BelongsTo $Produtoras
 * @property \App\Model\Table\LegendasTable&\Cake\ORM\Association\BelongsToMany $Legendas
 *
 * @method \App\Model\Entity\Dvd get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dvd newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dvd[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dvd|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dvd saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dvd patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dvd[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dvd findOrCreate($search, callable $callback = null, $options = [])
 */
class DvdsTable extends Table
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

        $this->setTable('dvds');
        $this->setDisplayField('id_dvd');
        $this->setPrimaryKey('id_dvd');

        $this->belongsTo('Produtoras', [
            'foreignKey' => 'produtoras_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Legendas', [
            'foreignKey' => 'dvds_id',
            'targetForeignKey' => 'legendas_id',
            'joinTable' => 'dvds_legendas',
        ]);
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
            ->integer('id_dvd')
            ->allowEmptyString('id_dvd', null, 'create');

        $validator
            ->integer('ano')
            ->allowEmptyString('ano');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 150)
            ->allowEmptyString('titulo');

        $validator
            ->scalar('sinopse')
            ->allowEmptyString('sinopse');

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
        $rules->add($rules->existsIn(['produtoras_id'], 'Produtoras'));

        return $rules;
    }
}
