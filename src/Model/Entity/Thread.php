<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Thread Entity
 *
 * @property int $id
 * @property string $name
 * @property string $user_id
 * @property string $prompt_id
 * @property string $message_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\MessageHistory[] $message_history
 */
class Thread extends Entity
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
        'name' => true,
        'user_id' => true,
        'prompt_id' => true,
        'message_id' => true,
        'user' => true,
        'message_history' => true,
    ];
}
