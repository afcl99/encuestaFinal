<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersTest Entity
 *
 * @property int $id
 * @property int $test_id
 * @property string $name
 * @property string $message
 * @property string $url_app
 * @property \Cake\I18n\FrozenTime $max_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Test $test
 */
class UsersTest extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'test_id' => true,
        'name' => true,
        'message' => true,
        'url_app' => true,
        'max_date' => true,
        'created' => true,
        'modified' => true,
        'test' => true,
    ];
}
