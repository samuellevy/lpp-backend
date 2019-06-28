<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamPositionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamPositionsTable Test Case
 */
class TeamPositionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamPositionsTable
     */
    public $TeamPositions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.team_positions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TeamPositions') ? [] : ['className' => TeamPositionsTable::class];
        $this->TeamPositions = TableRegistry::getTableLocator()->get('TeamPositions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamPositions);

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
