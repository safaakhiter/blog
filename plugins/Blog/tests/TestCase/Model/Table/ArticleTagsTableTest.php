<?php
declare(strict_types=1);

namespace Blog\Test\TestCase\Model\Table;

use Blog\Model\Table\ArticleTagsTable;
use Cake\TestSuite\TestCase;

/**
 * Blog\Model\Table\ArticleTagsTable Test Case
 */
class ArticleTagsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Blog\Model\Table\ArticleTagsTable
     */
    protected $ArticleTags;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'plugin.Blog.ArticleTags',
        'plugin.Blog.Tags',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ArticleTags') ? [] : ['className' => ArticleTagsTable::class];
        $this->ArticleTags = $this->getTableLocator()->get('ArticleTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ArticleTags);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \Blog\Model\Table\ArticleTagsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \Blog\Model\Table\ArticleTagsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
