<h1>Edit client data </h1>
<?php

echo $this->Form->create($client);
echo $this->Form->input('name');
echo $this->Form->input('password');
echo $this->Form->input('password2',array('label'=>"confirm password"));
echo $this->Form->input('email');
echo $this->Form->input('phone');
echo $this->Form->button(__('Save'));
echo $this->Form->end();
?>