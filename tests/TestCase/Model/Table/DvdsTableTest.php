<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DvdsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DvdsTable Test Case
 */
class DvdsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DvdsTable
     */
    protected $Dvds;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Dvds',
        'app.Produtoras',
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
        $config = TableRegistry::getTableLocator()->exists('Dvds') ? [] : ['className' => DvdsTable::class];
        $this->Dvds = TableRegistry::getTableLocator()->get('Dvds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Dvds);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
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
