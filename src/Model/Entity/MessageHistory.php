<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MessageHistory Entity
 *
 * @property int $id
 * @property string $message
 * @property int $user_id
 * @property string $user_prompt
 * @property int $thread_id
 *
 * @property \App\Model\Entity\User $user
 */
class MessageHistory extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'message' => true,
        'user_id' => true,
        'user_prompt' => true,
        'thread_id' => true,
        'user' => true,
    ];
}
