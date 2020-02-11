<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Legendas Controller
 *
 * @property \App\Model\Table\LegendasTable $Legendas
 *
 * @method \App\Model\Entity\Legenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LegendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $legendas = $this->paginate($this->Legendas);

        $this->set(compact('legendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Legenda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $legenda = $this->Legendas->get($id, [
            'contain' => ['Dvds'],
        ]);

        $this->set('legenda', $legenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $legenda = $this->Legendas->newEmptyEntity();
        if ($this->request->is('post')) {
            $legenda = $this->Legendas->patchEntity($legenda, $this->request->getData());
            if ($this->Legendas->save($legenda)) {
                $this->Flash->success(__('The legenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legenda could not be saved. Please, try again.'));
        }
        $this->set(compact('legenda'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Legenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $legenda = $this->Legendas->get($id, [
            'contain' => ['Dvds'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $legenda = $this->Legendas->patchEntity($legenda, $this->request->getData());
            if ($this->Legendas->save($legenda)) {
                $this->Flash->success(__('The legenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The legenda could not be saved. Please, try again.'));
        }
        $dvds = $this->Legendas->Dvds->find('list', ['limit' => 200]);
        $this->set(compact('legenda', 'dvds'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Legenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $legenda = $this->Legendas->get($id);
        if ($this->Legendas->delete($legenda)) {
            $this->Flash->success(__('The legenda has been deleted.'));
        } else {
            $this->Flash->error(__('The legenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
