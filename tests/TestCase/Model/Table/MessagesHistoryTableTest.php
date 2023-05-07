<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MessagesHistoryTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MessagesHistoryTable Test Case
 */
class MessagesHistoryTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MessagesHistoryTable
     */
    protected $MessagesHistory;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MessagesHistory',
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
        $config = $this->getTableLocator()->exists('MessagesHistory') ? [] : ['className' => MessagesHistoryTable::class];
        $this->MessagesHistory = $this->getTableLocator()->get('MessagesHistory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MessagesHistory);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MessagesHistoryTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MessagesHistoryTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
