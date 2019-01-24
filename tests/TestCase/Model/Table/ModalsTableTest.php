<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModalsTable Test Case
 */
class ModalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModalsTable
     */
    public $Modals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.modals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Modals') ? [] : ['className' => ModalsTable::class];
        $this->Modals = TableRegistry::getTableLocator()->get('Modals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Modals);

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
}
