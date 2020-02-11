<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DvdsLegendas Controller
 *
 * @property \App\Model\Table\DvdsLegendasTable $DvdsLegendas
 *
 * @method \App\Model\Entity\DvdsLegenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DvdsLegendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Dvds', 'Legendas'],
        ];
        $dvdsLegendas = $this->paginate($this->DvdsLegendas);

        $this->set(compact('dvdsLegendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Dvds Legenda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dvdsLegenda = $this->DvdsLegendas->get($id, [
            'contain' => ['Dvds', 'Legendas'],
        ]);

        $this->set('dvdsLegenda', $dvdsLegenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dvdsLegenda = $this->DvdsLegendas->newEmptyEntity();
        if ($this->request->is('post')) {
            $dvdsLegenda = $this->DvdsLegendas->patchEntity($dvdsLegenda, $this->request->getData());
            if ($this->DvdsLegendas->save($dvdsLegenda)) {
                $this->Flash->success(__('The dvds legenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dvds legenda could not be saved. Please, try again.'));
        }
        $dvds = $this->DvdsLegendas->Dvds->find('list', ['limit' => 200]);
        $legendas = $this->DvdsLegendas->Legendas->find('list', ['limit' => 200]);
        $this->set(compact('dvdsLegenda', 'dvds', 'legendas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dvds Legenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dvdsLegenda = $this->DvdsLegendas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dvdsLegenda = $this->DvdsLegendas->patchEntity($dvdsLegenda, $this->request->getData());
            if ($this->DvdsLegendas->save($dvdsLegenda)) {
                $this->Flash->success(__('The dvds legenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dvds legenda could not be saved. Please, try again.'));
        }
        $dvds = $this->DvdsLegendas->Dvds->find('list', ['limit' => 200]);
        $legendas = $this->DvdsLegendas->Legendas->find('list', ['limit' => 200]);
        $this->set(compact('dvdsLegenda', 'dvds', 'legendas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dvds Legenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dvdsLegenda = $this->DvdsLegendas->get($id);
        if ($this->DvdsLegendas->delete($dvdsLegenda)) {
            $this->Flash->success(__('The dvds legenda has been deleted.'));
        } else {
            $this->Flash->error(__('The dvds legenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
