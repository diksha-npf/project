<?php
namespace App\Controller;

use App\Controller\AppController;
use cake\Routing\Router;

class ClientsController extends AppController{

public function show($arg1, $arg2, $arg3) {
	  $this->autoRender=false;
      $this->set('argument1',$arg1);
      $this->set('argument2',$arg2);
      echo $arg1; 
      echo "<br>";
      echo $arg2;
      echo "<br>";
      echo $arg3;
   }	

public function initialize()
{
	parent::initialize();
	$this->loadComponent('Flash'); 
	$this->url=Router::url($this->url,true);
	
}
public $url;
public function display()
{
	$this->autoRender=false;
	print_r($this->url);
}
public function index()
{
	$this->set('clients',$this->Clients->find('all'));
}
public function view($id)
{
	$client = $this->Clients->get($id);
	$this->set('client',$client);

}
public function add()
{
	$client = $this->Clients->newEntity();
	if($this->request->is('post')) {
	$this->Clients->patchEntity($client,$this->request->data);
	if($this->Clients->save($client)){
	$this->Flash->success(__('Your account has been registered .'));
	return $this->redirect(['action' => 'index']);
	}
	$this->Flash->error(__('Unable to register your account.'));
	}
	$this->set('client',$client);
}
public function edit($id)
{
	$client = $this->Clients->get($id);
	if ($this->request->is(['post', 'put'])) {
	$this->Clients->patchEntity($client, $this->request->data);
	if ($this->Clients->save($client)) {
	$this->Flash->success(__('Your profile data has been updated.'));
	return $this->redirect(['action' => 'index']);
	}
	$this->Flash->error(__('Unable to update your profile.'));
	}

	$this->set('client', $client);

}
public function delete($id)
{
	$this->request->allowMethod(['post', 'delete']);

	$client = $this->Clients->get($id);
	if ($this->Clients->delete($client)) {
	$this->Flash->success(__('The client with id: {0} has been deleted.', h($id)));
	return $this->redirect(['action' => 'index']);
}

}
}

?>