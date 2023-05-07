<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ThreadFixture
 */
class ThreadFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'thread';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'user_id' => 'Lorem ipsum dolor sit amet',
                'prompt_id' => 'Lorem ipsum dolor sit amet',
                'message_id' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
