<?php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class ClientsTable extends Table {

public function initialize(array $config){
$this->addBehavior("Timestamp");

}
public function validationDefault(Validator $validator){
$validator->requirePresence('name','You must enter your name')
->add('name', [
'length' => [
'rule' => ['minLength', 6],
'message' => 'Name need to be at least 6 characters long',
]
])
->notEmpty('name','Please, enter your name !')
->notEmpty('password','Please, enter your password !')
->add('password', [
'compare' => [
'rule' => ['compareWith', 'password2'],
'message'=>"Password mismatch password confirm !"
]
])
->notEmpty('email','Please, enter your email !')
->add('email', [
'email' => [
'rule' => ['email'],
'message'=>" Please, enter a valid email!"
]
])
->numeric('phone','Please, enter valid phone number !');

return $validator;
}

}

?>