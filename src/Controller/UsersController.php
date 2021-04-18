<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->loadComponent('Flash');
        $this->loadmodel('Permissions');
        $this->loadmodel('UsersPermissions');
        $this->loadmodel('Users');
        $this->loadComponent('Paginator');

        $this->Auth->allow(['login','logout','index']);
    }

     public function index()
    {
        $this->setAction('login');
        
    }

    public function login()
    {
       
        if ($this->request->is('post')) 
        {
           $user = $this->Auth->identify();

           if($user['role']!='admin')
           {   
             $this->Auth->setUser($user);
             return $this->redirect(['action'=>'welcome']);
           }
            else
            {
               $this->Auth->setUser($user);
             return $this->redirect($this->Auth->redirectUrl());
            }
        }
    }
    
    public function view($id)
    {   
        $user = $this->Users->get($id);
        $this->set('user',$user);
    }
    
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post'))
        {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) 
            {
                $this->Flash->success(__('Your data has been saved.'));
                return $this->redirect(['action' => 'hello']);
            }
        $this->Flash->error(__('Unable to add your data.'));
        }
        $this->set('users', $user);
    }

    public function edit($id='')
    {
        $user=$this->Users->get($id);
        if($this->request->is('post'))
        {
            $user=$this->Users->patchEntity($user,$this->request->getdata());
            if($this->Users->save($user))
            {
                $this->Flash->success(__("Data updated successfully"));
                return $this->redirect(['action'=>'hello']);
            }
        $this->Flash->error(__("Somethig wrong please try again"));
        }
    $this->set('username',$user->username);
    $this->set('email',$user->email);
    $this->set('password',$user->password);
    $this->set('designation',$user->designation);
    $this->set('address1',$user->address1);
    $this->set('address2',$user->address2);
    $this->set('pincode',$user->pincode);
    $this->set('role',$user->role);
    $this->set('id',$id);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) 
        {
            $this->Flash->success(__('The user with id: {0} has been deleted.', ($id)));
            return $this->redirect(['action' => 'hello']);
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    ////admin Dashboard////////
    public function hello()
    {
        $user=$this->Users->find('all');
        $this->set('users', $this->Paginate($user, ['limit'=> '7']));
    }
    ////User Dashboard////////
    public function welcome()
    {
        $this->viewBuilder()->setLayout('users');
        $user=$this->Users->find()->hydrate(false)
        ->select(['id'=>'Users.id','username'=>'Users.username','role'=>'Users.role','usersid'=>'users_permissions.usersid','permissionid'=>'users_permissions.permissionid','status'=>'users_permissions.status','id'=>'permissions.id','permission'=>'permissions.permission'])
         ->join([
       'users_permissions' => [
           'table' => 'users_permissions',
           'type' => 'INNER',
           'conditions' => 'Users.id = users_permissions.usersid'
       ],
       'permissions' => [
           'table' => 'permissions',
           'type' => 'INNER',
           'conditions' => 'users_permissions.permissionid  = permissions.id'
       ]
   ])->where(['Users.id'=>$this->Auth->user('id'),'      users_permissions.status'=>1]);
        //echo $user; exit;
        $this->set('users', $user); 

    }

    public function permission($id='')
    {
      
        $user = $this->UsersPermissions->newEntity();
        if ($this->request->is('post'))
        {
            //pr($this->request->getData()); die;
            $user = $this->UsersPermissions->patchEntity($user, $this->request->getData());
            if ($this->UsersPermissions->save($user)) 
            {
                $this->Flash->success(__('Your data has been saved.'));
                return $this->redirect(['action' => 'hello']);
            }
        $this->Flash->error(__('Unable to add your data.'));
        }
        $data = $this->Permissions->find('list', array('keyField' =>'id','valueField'=>'permission' ));

        $this->set('data',$data);
    
         $this->set('user',$user);
        $this->set('id',$id);
    }
    
}

?>