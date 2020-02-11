<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Produtoras Controller
 *
 * @property \App\Model\Table\ProdutorasTable $Produtoras
 *
 * @method \App\Model\Entity\Produtora[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdutorasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $produtoras = $this->paginate($this->Produtoras);

        $this->set(compact('produtoras'));
    }

    /**
     * View method
     *
     * @param string|null $id Produtora id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produtora = $this->Produtoras->get($id, [
            'contain' => [],
        ]);

        $this->set('produtora', $produtora);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produtora = $this->Produtoras->newEmptyEntity();
        if ($this->request->is('post')) {
            $produtora = $this->Produtoras->patchEntity($produtora, $this->request->getData());
            if ($this->Produtoras->save($produtora)) {
                $this->Flash->success(__('The produtora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produtora could not be saved. Please, try again.'));
        }
        $this->set(compact('produtora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produtora id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produtora = $this->Produtoras->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produtora = $this->Produtoras->patchEntity($produtora, $this->request->getData());
            if ($this->Produtoras->save($produtora)) {
                $this->Flash->success(__('The produtora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produtora could not be saved. Please, try again.'));
        }
        $this->set(compact('produtora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produtora id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produtora = $this->Produtoras->get($id);
        if ($this->Produtoras->delete($produtora)) {
            $this->Flash->success(__('The produtora has been deleted.'));
        } else {
            $this->Flash->error(__('The produtora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
