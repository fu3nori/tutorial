<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilesFixture
 */
class ProfilesFixture extends TestFixture
{
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
                'users_id' => 1,
                'hobby' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'created' => '2022-09-28 05:41:50',
                'modified' => '2022-09-28 05:41:50',
            ],
        ];
        parent::init();
    }
}
