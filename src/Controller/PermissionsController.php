<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class PermissionsController extends AppController
{
  public function index()
    {
         $this->set('users',$this->Permissions->find('all'));
         
    }

   public function add()
   {
   		$user = $this->Permissions->newEntity();
        if ($this->request->is('post'))
        {
            $user = $this->Permissions->patchEntity($user, $this->request->getData());
            if ($this->Permissions->save($user)) 
            {
                $this->Flash->success(__('Your data has been saved.'));
                return $this->redirect(['controller' => 'Users','action' => 'hello']);
            }
        $this->Flash->error(__('Unable to add your data.'));
        }
        
        $this->set('users', $user);
   }
   public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Permissions->get($id);
        if ($this->Permissions->delete($user)) 
        {
            $this->Flash->success(__('The user with id: {0} has been deleted.', ($id)));
            return $this->redirect(['controller' => 'Permissions','action' => 'index']);
        }
    }
    public function back()
    {
        return $this->redirect(['controller' => 'Users','action' => 'hello']);
    }
}	
