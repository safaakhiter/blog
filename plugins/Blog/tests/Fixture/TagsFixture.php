<?php
declare(strict_types=1);

namespace Blog\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagsFixture
 */
class TagsFixture extends TestFixture
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
                'tag' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
