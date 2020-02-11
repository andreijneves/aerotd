<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DvdsLegendas Model
 *
 * @property \App\Model\Table\DvdsTable&\Cake\ORM\Association\BelongsTo $Dvds
 * @property \App\Model\Table\LegendasTable&\Cake\ORM\Association\BelongsTo $Legendas
 *
 * @method \App\Model\Entity\DvdsLegenda get($primaryKey, $options = [])
 * @method \App\Model\Entity\DvdsLegenda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DvdsLegenda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DvdsLegenda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DvdsLegenda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DvdsLegenda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DvdsLegenda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DvdsLegenda findOrCreate($search, callable $callback = null, $options = [])
 */
class DvdsLegendasTable extends Table
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

        $this->setTable('dvds_legendas');
        $this->setDisplayField('legendas_id');
        $this->setPrimaryKey(['legendas_id', 'dvds_id']);

        $this->belongsTo('Dvds', [
            'foreignKey' => 'dvds_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Legendas', [
            'foreignKey' => 'legendas_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn(['dvds_id'], 'Dvds'));
        $rules->add($rules->existsIn(['legendas_id'], 'Legendas'));

        return $rules;
    }
}
