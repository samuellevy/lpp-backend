<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimelineTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimelineTable Test Case
 */
class TimelineTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimelineTable
     */
    public $Timeline;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.timeline'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Timeline') ? [] : ['className' => TimelineTable::class];
        $this->Timeline = TableRegistry::getTableLocator()->get('Timeline', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Timeline);

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
