<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dvd Entity
 *
 * @property int $id_dvd
 * @property int $produtoras_id
 * @property int|null $ano
 * @property string|null $titulo
 * @property string|null $sinopse
 *
 * @property \App\Model\Entity\Produtora $produtora
 * @property \App\Model\Entity\Legenda[] $legendas
 */
class Dvd extends Entity
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
        'produtoras_id' => true,
        'ano' => true,
        'titulo' => true,
        'sinopse' => true,
        'produtora' => true,
        'legendas' => true,
    ];
}
