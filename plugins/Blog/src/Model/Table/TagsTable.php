<?php
declare(strict_types=1);

namespace Blog\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tags Model
 *
 * @property \Blog\Model\Table\ArticleTagsTable&\Cake\ORM\Association\HasMany $ArticleTags
 *
 * @method \Blog\Model\Entity\Tag newEmptyEntity()
 * @method \Blog\Model\Entity\Tag newEntity(array $data, array $options = [])
 * @method \Blog\Model\Entity\Tag[] newEntities(array $data, array $options = [])
 * @method \Blog\Model\Entity\Tag get($primaryKey, $options = [])
 * @method \Blog\Model\Entity\Tag findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \Blog\Model\Entity\Tag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Blog\Model\Entity\Tag[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Blog\Model\Entity\Tag|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Blog\Model\Entity\Tag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Blog\Model\Entity\Tag[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \Blog\Model\Entity\Tag[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \Blog\Model\Entity\Tag[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \Blog\Model\Entity\Tag[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TagsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tags');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('ArticleTags', [
            'foreignKey' => 'tag_id',
            'className' => 'Blog.ArticleTags',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('tag')
            ->maxLength('tag', 255)
            ->requirePresence('tag', 'create')
            ->notEmptyString('tag');

        return $validator;
    }
}
