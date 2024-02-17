<?php
declare(strict_types=1);

namespace Blog\Test\TestCase\Model\Table;

use Blog\Model\Table\ArticlsTable;
use Cake\TestSuite\TestCase;

/**
 * Blog\Model\Table\ArticlsTable Test Case
 */
class ArticlsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Blog\Model\Table\ArticlsTable
     */
    protected $Articls;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'plugin.Blog.Articls',
        'plugin.Blog.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Articls') ? [] : ['className' => ArticlsTable::class];
        $this->Articls = $this->getTableLocator()->get('Articls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Articls);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \Blog\Model\Table\ArticlsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \Blog\Model\Table\ArticlsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
