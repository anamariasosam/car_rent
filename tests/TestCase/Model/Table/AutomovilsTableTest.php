<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutomovilsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutomovilsTable Test Case
 */
class AutomovilsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AutomovilsTable
     */
    public $Automovils;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.automovils',
        'app.categorias',
        'app.tipos',
        'app.clients',
        'app.bonos',
        'app.automovils_clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Automovils') ? [] : ['className' => 'App\Model\Table\AutomovilsTable'];
        $this->Automovils = TableRegistry::get('Automovils', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Automovils);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
