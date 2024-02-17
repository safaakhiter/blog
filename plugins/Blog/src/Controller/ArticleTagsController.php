<?php
declare(strict_types=1);

namespace Blog\Controller;

use App\Controller\AppController;

/**
 * ArticleTags Controller
 *
 * @property \Blog\Model\Table\ArticleTagsTable $ArticleTags
 * @method \Blog\Model\Entity\ArticleTag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticleTagsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tags'],
        ];
        $articleTags = $this->paginate($this->ArticleTags);

        $this->set(compact('articleTags'));
    }

    /**
     * View method
     *
     * @param string|null $id Article Tag id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articleTag = $this->ArticleTags->get($id, [
            'contain' => ['Tags'],
        ]);

        $this->set(compact('articleTag'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articleTag = $this->ArticleTags->newEmptyEntity();
        if ($this->request->is('post')) {
            $articleTag = $this->ArticleTags->patchEntity($articleTag, $this->request->getData());
            if ($this->ArticleTags->save($articleTag)) {
                $this->Flash->success(__('The article tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article tag could not be saved. Please, try again.'));
        }
        $tags = $this->ArticleTags->Tags->find('list', ['limit' => 200])->all();
        $this->set(compact('articleTag', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Article Tag id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articleTag = $this->ArticleTags->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articleTag = $this->ArticleTags->patchEntity($articleTag, $this->request->getData());
            if ($this->ArticleTags->save($articleTag)) {
                $this->Flash->success(__('The article tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article tag could not be saved. Please, try again.'));
        }
        $tags = $this->ArticleTags->Tags->find('list', ['limit' => 200])->all();
        $this->set(compact('articleTag', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Article Tag id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articleTag = $this->ArticleTags->get($id);
        if ($this->ArticleTags->delete($articleTag)) {
            $this->Flash->success(__('The article tag has been deleted.'));
        } else {
            $this->Flash->error(__('The article tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
