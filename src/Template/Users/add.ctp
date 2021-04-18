<h3 style="margin-left:45%;"><u>Add Users</u></h3>
<div style="width:400px; height:400px; margin-left:35%;">
<?= $this->Form->create($users) ?>
  
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->control('designation') ?>
        <?= $this->Form->control('address1') ?>
        <?= $this->Form->control('address2') ?>
        <?= $this->Form->control('pincode') ?>    
        <?= $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'user' => 'User', 'sales' => 'Sales', 'operations' => 'Operations']
        ]) ?>
        <!-- <?= $this->Form->control('users_permission.user_id')  ?> -->
        <div class="submit" style=" margin-left:45%; margin-bottom:70px;">
        <?= $this->Form->button(__('Submit')); ?>
        <?= $this->Form->end() ?>
      </div>


</div>

