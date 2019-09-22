<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

   /* public function login()
    {
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if($user)
            {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());

            }
            else
            {
                $this->Flash->error('Datos incorrectos, intente nuevamente.',['key'=>'auth']);
            }
        }
    }*/

public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'Items']);
            }
            //si no logea
            $this->Flash->error('Usuario o Contraseña Incorrecto');
        }

    }
    public function logout(){
        $this->Flash->success('Esta Cerrando Sesión');
        return $this->redirect($this->Auth->logout());
            }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario Guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se guardó al usuario, intente de nuevo.'));
        }
        $this->set(compact('user'));
    }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('se guardó usuario.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se guardó al usuario, intente de nuevo.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Se eliinó al usuario.'));
        } else {
            $this->Flash->error(__('No se eliminó al usuario, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
        public function register(){
                $user = $this->Users->newEntity();
                if($this->request->is('post')){
                    $user = $this->Users->patchEntity($user, $this->request->data);
                    if($this->Users->save($user)){
                        $this->Flash->success(__('El Usuario Fue Guardado.'));
                        //$this->Flash->success('Usted esta registrado y puede Ingresar');
                        return $this->redirect(['action' => 'login']);
                    }else {
                        $this->Flash->error('Usted no se Pudo Registrar');
                    }
                }   
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
    }
     public function beforeFilter(Event $event)
    {   $this->Auth->allow(['register']);
    }

}
