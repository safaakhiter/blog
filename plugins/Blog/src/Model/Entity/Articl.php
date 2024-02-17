<?php
declare(strict_types=1);

namespace Blog\Model\Entity;

use Cake\ORM\Entity;

/**
 * Articl Entity
 *
 * @property int $id
 * @property string $picture
 * @property string $title
 * @property string $description
 * @property string $content
 * @property \Cake\I18n\FrozenDate $date
 * @property int $user_id
 *
 * @property \Blog\Model\Entity\User $user
 */
class Articl extends Entity
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
        'picture' => true,
        'title' => true,
        'description' => true,
        'content' => true,
        'date' => true,
        'user_id' => true,
        'user' => true,
    ];
}
