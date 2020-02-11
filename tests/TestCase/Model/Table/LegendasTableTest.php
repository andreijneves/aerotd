<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LegendasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LegendasTable Test Case
 */
class LegendasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LegendasTable
     */
    protected $Legendas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Legendas',
        'app.Dvds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Legendas') ? [] : ['className' => LegendasTable::class];
        $this->Legendas = TableRegistry::getTableLocator()->get('Legendas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Legendas);

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
}
