<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dvds Controller
 *
 * @property \App\Model\Table\DvdsTable $Dvds
 *
 * @method \App\Model\Entity\Dvd[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DvdsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Produtoras'],
        ];
        $dvds = $this->paginate($this->Dvds);

        $this->set(compact('dvds'));
    }

    /**
     * View method
     *
     * @param string|null $id Dvd id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dvd = $this->Dvds->get($id, [
            'contain' => ['Produtoras', 'Legendas'],
        ]);

        $this->set('dvd', $dvd);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dvd = $this->Dvds->newEmptyEntity();
        if ($this->request->is('post')) {
            $dvd = $this->Dvds->patchEntity($dvd, $this->request->getData());
            if ($this->Dvds->save($dvd)) {
                $this->Flash->success(__('The dvd has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dvd could not be saved. Please, try again.'));
        }
        $produtoras = $this->Dvds->Produtoras->find('list', ['keyField'=>'id_produtora', 'valueField'=>'nome','limit' => 200]);
        $legendas = $this->Dvds->Legendas->find('list', ['keyField'=>'id_legenda', 'valueField'=>'lingua', 'limit' => 200]);
        $this->set(compact('dvd', 'produtoras', 'legendas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dvd id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dvd = $this->Dvds->get($id, [
            'contain' => ['Legendas'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dvd = $this->Dvds->patchEntity($dvd, $this->request->getData());
            if ($this->Dvds->save($dvd)) {
                $this->Flash->success(__('The dvd has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dvd could not be saved. Please, try again.'));
        }
        $produtoras = $this->Dvds->Produtoras->find('list', ['keyField'=>'id_produtora', 'valueField'=>'nome','limit' => 200]);
        $legendas = $this->Dvds->Legendas->find('list', ['keyField'=>'id_legenda', 'valueField'=>'lingua','limit' => 200]);
        $this->set(compact('dvd', 'produtoras', 'legendas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dvd id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dvd = $this->Dvds->get($id);
        if ($this->Dvds->delete($dvd)) {
            $this->Flash->success(__('The dvd has been deleted.'));
        } else {
            $this->Flash->error(__('The dvd could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function legendas($id) {
        $dvd = $this->Dvds->get($id, [
            'contain' => ['Legendas'],
        ]);
       
        $arr = [];
        foreach ($dvd->legendas as $legenda) {
            $arr[] = ['id'=>$legenda->id_legenda, 'lingua'=>$legenda->lingua];
        }
        echo json_encode($arr);
        exit;
    }
}
