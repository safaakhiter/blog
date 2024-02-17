<?php
declare(strict_types=1);

namespace Blog\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArticleTags Model
 *
 * @property \Blog\Model\Table\TagsTable&\Cake\ORM\Association\BelongsTo $Tags
 *
 * @method \Blog\Model\Entity\ArticleTag newEmptyEntity()
 * @method \Blog\Model\Entity\ArticleTag newEntity(array $data, array $options = [])
 * @method \Blog\Model\Entity\ArticleTag[] newEntities(array $data, array $options = [])
 * @method \Blog\Model\Entity\ArticleTag get($primaryKey, $options = [])
 * @method \Blog\Model\Entity\ArticleTag findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \Blog\Model\Entity\ArticleTag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Blog\Model\Entity\ArticleTag[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \Blog\Model\Entity\ArticleTag|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Blog\Model\Entity\ArticleTag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Blog\Model\Entity\ArticleTag[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \Blog\Model\Entity\ArticleTag[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \Blog\Model\Entity\ArticleTag[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \Blog\Model\Entity\ArticleTag[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ArticleTagsTable extends Table
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

        $this->setTable('article_tags');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id',
            'joinType' => 'INNER',
            'className' => 'Blog.Tags',
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
            ->integer('article_id')
            ->requirePresence('article_id', 'create')
            ->notEmptyString('article_id');

        $validator
            ->integer('tag_id')
            ->notEmptyString('tag_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('tag_id', 'Tags'), ['errorField' => 'tag_id']);

        return $rules;
    }
}
