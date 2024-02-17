<?php
declare(strict_types=1);

namespace Blog\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlsFixture
 */
class ArticlsFixture extends TestFixture
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
                'picture' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'content' => 'Lorem ipsum dolor sit amet',
                'date' => '2024-02-17',
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
