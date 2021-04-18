<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create(NULL) ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<center>    
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</center>
</div>
