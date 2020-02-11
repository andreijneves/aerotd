<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DvdsLegendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DvdsLegendasTable Test Case
 */
class DvdsLegendasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DvdsLegendasTable
     */
    protected $DvdsLegendas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.DvdsLegendas',
        'app.Dvds',
        'app.Legendas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DvdsLegendas') ? [] : ['className' => DvdsLegendasTable::class];
        $this->DvdsLegendas = TableRegistry::getTableLocator()->get('DvdsLegendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->DvdsLegendas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
