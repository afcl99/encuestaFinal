<?php
declare(strict_types=1);

namespace App\Controller;
/**
 * UsersTests Controller
 *
 * @property \App\Model\Table\UsersTestsTable $UsersTests
 *
 * @method \App\Model\Entity\UsersTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersTestsController extends AppController
{   
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tests'],
        ];
        $usersTests = $this->paginate($this->UsersTests);

        $this->set(compact('usersTests'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Test id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersTest = $this->UsersTests->get($id, [
            'contain' => ['Users', 'Tests'],
        ]);

        $this->set('usersTest', $usersTest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersTest = $this->UsersTests->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersTest = $this->UsersTests->patchEntity($usersTest, $this->request->getData());
            if ($this->UsersTests->save($usersTest)) {
                $this->Flash->success(__('The users test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users test could not be saved. Please, try again.'));
        }
        $users = $this->UsersTests->Users->find('list', ['limit' => 200]);
        $tests = $this->UsersTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('usersTest', 'users', 'tests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Test id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersTest = $this->UsersTests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersTest = $this->UsersTests->patchEntity($usersTest, $this->request->getData());
            if ($this->UsersTests->save($usersTest)) {
                $this->Flash->success(__('The users test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users test could not be saved. Please, try again.'));
        }
        $users = $this->UsersTests->Users->find('list', ['limit' => 200]);
        $tests = $this->UsersTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('usersTest', 'users', 'tests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Test id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersTest = $this->UsersTests->get($id);
        if ($this->UsersTests->delete($usersTest)) {
            $this->Flash->success(__('The users test has been deleted.'));
        } else {
            $this->Flash->error(__('The users test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function send(){
        if ($this->request->is('post')) {            
            $to = "andresclarl@unicauca.edu.co";
            $subject = "Encuesta";
            $message = "Se le ha enviado la encuesta para responder".$evaluation;
            try {
                $mail = $this->Email->send_mail($to, $subject, $message);
            } catch (Exception $e) {
                echo 'email no enviado: ', $mail->ErrorInfo;
            }
            
            $this->Flash->success(__('Corrreo(s) enviado(s).'));
            //return $this->redirect(['controller' => 'UsersTests','action' => 'index']);
        }
    }
    public function isAuthorized($user)
    {
        $action=$this->request->getParam('action');
        if(isset($user['role']) and $user['role'] === 'user')
        {
            if( in_array($action, ['add', 'view', 'index', 'edit', 'delete']))
            {
                return true;
            }
        }
        return parent::isAuthorized($user);
        
    }
}
