<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Genaral Controller
 *
 * @method \App\Model\Entity\Genaral[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GenaralController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $genaral = $this->paginate($this->Genaral);

        $this->set(compact('genaral'));
    }

    /**
     * View method
     *
     * @param string|null $id Genaral id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genaral = $this->Genaral->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('genaral'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genaral = $this->Genaral->newEmptyEntity();
        if ($this->request->is('post')) {
            $genaral = $this->Genaral->patchEntity($genaral, $this->request->getData());
            if ($this->Genaral->save($genaral)) {
                $this->Flash->success(__('The genaral has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genaral could not be saved. Please, try again.'));
        }
        $this->set(compact('genaral'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Genaral id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genaral = $this->Genaral->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genaral = $this->Genaral->patchEntity($genaral, $this->request->getData());
            if ($this->Genaral->save($genaral)) {
                $this->Flash->success(__('The genaral has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genaral could not be saved. Please, try again.'));
        }
        $this->set(compact('genaral'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Genaral id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genaral = $this->Genaral->get($id);
        if ($this->Genaral->delete($genaral)) {
            $this->Flash->success(__('The genaral has been deleted.'));
        } else {
            $this->Flash->error(__('The genaral could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
