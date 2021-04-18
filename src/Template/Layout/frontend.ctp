<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    echo $this->Html->charset();
    echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
   echo $this->Html->script('https://code.jquery.com/jquery-3.3.1.min.js');
    echo $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
     echo $this->Html->css('style');
     echo $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css');
      echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js');
         


     
?>
<title>layout element learning</title>
</head>

<body>
    <?= $this->element('header') ?>
    <!-- Page Content -->
    <div id="content" class="container">
    
        <div class="row full-width">
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <?= $this->element('footer') ?>
</body>
</html>