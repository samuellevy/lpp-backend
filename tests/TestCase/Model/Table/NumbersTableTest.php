<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NumbersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NumbersTable Test Case
 */
class NumbersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NumbersTable
     */
    public $Numbers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.numbers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Numbers') ? [] : ['className' => NumbersTable::class];
        $this->Numbers = TableRegistry::getTableLocator()->get('Numbers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Numbers);

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
