<h3 style="margin-left:45%;"><u>Add Permission</u></h3>
<div style="width:400px; height:400px; margin-left:35%;">
<?= $this->Form->create('user',array('action'=>'permission')) ?>
  		<?= $this->Form->control('usersid',['value'=>$id,'readonly']) ?>
  		<?= $this->Form->control('permissionid',['options'=>$data,'type'=>'select']) ?>
        <?= $this->Form->control('status',[
            'options' => ['1' => 'Enable', '0' => 'Disable']
        ]) ?>
        
        <div class="submit" style=" margin-left:45%; margin-bottom:70px;">
        <?= $this->Form->button(__('Submit')); ?>
        <?= $this->Form->end() ?>
      </div>


</div>
