<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Legendas Model
 *
 * @property \App\Model\Table\DvdsTable&\Cake\ORM\Association\BelongsToMany $Dvds
 *
 * @method \App\Model\Entity\Legenda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Legenda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Legenda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Legenda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Legenda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Legenda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Legenda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Legenda findOrCreate($search, callable $callback = null, $options = [])
 */
class LegendasTable extends Table
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

        $this->setTable('legendas');
        $this->setDisplayField('id_legenda');
        $this->setPrimaryKey('id_legenda');

        $this->belongsToMany('Dvds', [
            'foreignKey' => 'legendas_id',
            'targetForeignKey' => 'dvds_id',
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
            ->integer('id_legenda')
            ->allowEmptyString('id_legenda', null, 'create');

        $validator
            ->scalar('lingua')
            ->maxLength('lingua', 60)
            ->allowEmptyString('lingua');

        return $validator;
    }
}
