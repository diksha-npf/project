<h1>Register new client </h1>
<?php

echo $this->Form->create($client);
echo $this->Form->input('name');
echo $this->Form->input('password');
echo $this->Form->input('password2',array('label'=>"confirm password",'type'=>'password'));
echo $this->Form->input('email');
echo $this->Form->input('phone');

echo $this->Form->button(__('Register'));
echo $this->Form->end();
?>