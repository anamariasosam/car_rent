<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BonosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BonosTable Test Case
 */
class BonosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BonosTable
     */
    public $Bonos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bonos',
        'app.clients',
        'app.automovils',
        'app.categorias',
        'app.tipos',
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
        $config = TableRegistry::exists('Bonos') ? [] : ['className' => 'App\Model\Table\BonosTable'];
        $this->Bonos = TableRegistry::get('Bonos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bonos);

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
