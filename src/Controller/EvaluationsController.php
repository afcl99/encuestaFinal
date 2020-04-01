<?php
declare(strict_types=1);

namespace App\Controller;
require '../vendor/autoload.php';
use Cake\Controller\Component;
use Cake\Core\App;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Console\ShellDispatcher;
use Cake\Routing\Router;

class EvaluationsController extends AppController
{   
    public function index()
    {
        $this->paginate = [
            'contain' => ['UsersTests'],
        ];
        $evaluations = $this->paginate($this->Evaluations);

        $this->set(compact('evaluations'));
    }

    /**
     * View method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => ['UsersTests'],
        ]);

        $this->set('evaluation', $evaluation);
    }
    /**
     * send method 
     *
     * @return \Cake\Http\Response|null|void Redirects on successful send, renders view otherwise.
     */
    public function add()
    {
        $evaluation = $this->Evaluations->newEmptyEntity();
        if ($this->request->is('post')) {
            $evaluation = $this->Evaluations->patchEntity($evaluation, $this->request->getData());
            if ($this->Evaluations->save($evaluation)) {
                $this->Flash->success(__('Corrreo(s) enviado(s).'));
                return $this->redirect(['controller' => 'UsersTests','action' => 'index']);
            }
            $this->Flash->error(__('Fallo al enviar el correo, intente nuevamente.'));
        }
        $usersTests = $this->Evaluations->UsersTests->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'usersTests'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evaluation = $this->Evaluations->patchEntity($evaluation, $this->request->getData());
            if ($this->Evaluations->save($evaluation)) {
                $this->Flash->success(__('The evaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evaluation could not be saved. Please, try again.'));
        }
        $usersTests = $this->Evaluations->UsersTests->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'usersTests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evaluation = $this->Evaluations->get($id);
        if ($this->Evaluations->delete($evaluation)) {
            $this->Flash->success(__('The evaluation has been deleted.'));
        } else {
            $this->Flash->error(__('The evaluation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
