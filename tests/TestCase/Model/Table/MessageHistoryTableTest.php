<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MessageHistoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MessageHistoryTable Test Case
 */
class MessageHistoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MessageHistoryTable
     */
    protected $MessageHistory;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MessageHistory',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MessageHistory') ? [] : ['className' => MessageHistoryTable::class];
        $this->MessageHistory = $this->getTableLocator()->get('MessageHistory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MessageHistory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MessageHistoryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MessageHistoryTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
