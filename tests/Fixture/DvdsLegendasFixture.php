<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DvdsLegendasFixture
 */
class DvdsLegendasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'dvds_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'legendas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'dvds_legendas_dvds_fk' => ['type' => 'index', 'columns' => ['dvds_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['legendas_id', 'dvds_id'], 'length' => []],
            'dvds_legendas_dvds_fk' => ['type' => 'foreign', 'columns' => ['dvds_id'], 'references' => ['dvds', 'id_dvd'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'dvds_legendas_legendas_fk' => ['type' => 'foreign', 'columns' => ['legendas_id'], 'references' => ['legendas', 'id_legenda'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'dvds_id' => 1,
                'legendas_id' => 1,
            ],
        ];
        parent::init();
    }
}
