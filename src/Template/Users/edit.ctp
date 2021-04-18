<?php

echo $this->Form->create("users",array('action'=>'edit/'.$id));
echo $this->Form->input('username',["value"=>$username]);
echo $this->Form->input('email',['value'=>$email]);
echo $this->Form->input('password',['value'=>$password]);
echo $this->Form->input('designation',['value'=>$designation]);
echo $this->Form->input('address1',["value"=>$address1]);
echo $this->Form->input('address2',['value'=>$address2]);
echo $this->Form->input('pincode',['value'=>$pincode]);
if($Auth->user('role')=='admin') {
echo $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'user' => 'User', 'sales' => 'Sales', 'operations' => 'Operations']
        ]);
} else
{

}
echo $this->Form->button('Submit');
echo $this->Form->end();
?> 