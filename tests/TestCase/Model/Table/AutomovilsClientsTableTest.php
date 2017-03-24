<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutomovilsClientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutomovilsClientsTable Test Case
 */
class AutomovilsClientsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AutomovilsClientsTable
     */
    public $AutomovilsClients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.automovils_clients',
        'app.automovils',
        'app.categorias',
        'app.tipos',
        'app.clients',
        'app.bonos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AutomovilsClients') ? [] : ['className' => 'App\Model\Table\AutomovilsClientsTable'];
        $this->AutomovilsClients = TableRegistry::get('AutomovilsClients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AutomovilsClients);

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
