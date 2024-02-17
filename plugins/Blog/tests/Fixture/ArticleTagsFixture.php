<?php
declare(strict_types=1);

namespace Blog\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticleTagsFixture
 */
class ArticleTagsFixture extends TestFixture
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
                'article_id' => 1,
                'tag_id' => 1,
            ],
        ];
        parent::init();
    }
}
