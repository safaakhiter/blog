<?php
declare(strict_types=1);

namespace Blog\Controller;

use App\Controller\AppController;

/**
 * Articls Controller
 *
 * @property \Blog\Model\Table\ArticlsTable $Articls
 * @method \Blog\Model\Entity\Articl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $articls = $this->paginate($this->Articls);

        $this->set(compact('articls'));
    }

    /**
     * View method
     *
     * @param string|null $id Articl id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articl = $this->Articls->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('articl'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articl = $this->Articls->newEmptyEntity();
        if ($this->request->is('post')) {
            $articl = $this->Articls->patchEntity($articl, $this->request->getData());
            if ($this->Articls->save($articl)) {
                $this->Flash->success(__('The articl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articl could not be saved. Please, try again.'));
        }
        $users = $this->Articls->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('articl', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Articl id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articl = $this->Articls->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articl = $this->Articls->patchEntity($articl, $this->request->getData());
            if ($this->Articls->save($articl)) {
                $this->Flash->success(__('The articl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articl could not be saved. Please, try again.'));
        }
        $users = $this->Articls->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('articl', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Articl id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articl = $this->Articls->get($id);
        if ($this->Articls->delete($articl)) {
            $this->Flash->success(__('The articl has been deleted.'));
        } else {
            $this->Flash->error(__('The articl could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
