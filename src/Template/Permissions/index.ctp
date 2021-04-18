<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
  
    
</head>
<style>
    th,td{
        padding: 15px;
        background-color: rgba(255,255,255,0.65);
        color:#fff;
        border:solid white 1px;
    }
    th{
        background-color: #8BC9C7;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
    }
    tbody td{
        position: relative;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
    }
    tbody tr:hover{
        background-color: rgba(21, 8, 8, 0.8);
    }
    
</style>

       
<body>
<style>
body{
        background-image: url(https://source.unsplash.com/user/erondu/1600x900);
        background-size: cover;
        margin-top:20px;
        overflow: hidden;
        display: flex;
        justify-content: center;
    }
</style>

        <div class="row text-center">
            <div class="col-lg-12" style="padding-right:0px;">
          <?php
            if ($Auth->user())
           {
           ?>
           <h4 class="jubtron" style="color:white;background:#00008ba1; font-size:40px; border:solid black 2px;text-align:center;padding-bottom:10px">Hey <?php 
            echo ($Auth->user('username'));
           } 
          ?>, Welcome to Admin Panel</h4>
           
        
    
        
    <br>
    <div class="mt-5 mb-3 clearfix">
        

<table style="color:white;background:#00008ba1; font-size:40px;border:solid 1px; text-align:center;padding-bottom:10px">
    <thead class="bg-primary">
    <tr>
    	<th>Id</th>
    	<th>Permission Name</th>
    	<th colspan="2" style="text-align:center" >Actions</th>
    </tr>
    </thead>    
<tbody>
<?php foreach ($users as $user) 
//pr($user); exit;
{ 
?>
	<tr >
    <td><?php echo $user->id; ?></td>
    <td>
    <?php echo $user->permission; ?>
    </td>    
    <td>
    <span class="fa fa-shield"> 
    <?= $this->Html->link('Add Permission', ['action' => 'add', $user->id]); ?>
    </span>
    </td>
    
	<td >
	<span class="fa fa-trash">	
	<?= $this->Form->postLink(
	'Delete',
	['action' => 'delete', $user->id],
	['confirm' => __('Are you sure you want to delete permission with id # {0}?',$user->id)]);
	?>
	</span>
	</td>
	
	</tr>
<?php
}
?>
</tbody>
</table> 
        </div>        
     </div>

</div>
<br>
<br>
<center>
    <button type="button" style="color:white;background:#00008ba1; font-size:25px;border:solid black 2px;"><b><?= $this->Html->link('Back', ['action' => 'back']); ?></b></button>
</center>  
</body>
</html>