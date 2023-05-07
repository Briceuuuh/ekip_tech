<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThreadTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThreadTable Test Case
 */
class ThreadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ThreadTable
     */
    protected $Thread;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Thread',
        'app.Users',
        'app.MessageHistory',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Thread') ? [] : ['className' => ThreadTable::class];
        $this->Thread = $this->getTableLocator()->get('Thread', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Thread);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ThreadTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ThreadTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
