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
           
        
        <div class="pull-left">
        <button type="button" style="color:white;background:#00008ba1; font-size:20px;border:solid black 2px;"><b><?= $this->Html->link('Logout', ['action' => 'logout']); ?></b></button>
        </div>
        <div class="pull-right">
        <button type="button" style="color:white;background:#00008ba1; font-size:20px;border:solid black 2px;">
            <b>
            <?php echo "<a href = '".$this->Url->build (["controller" => "Permissions","action"=>"index"])."'>Add Permission</a>"; ?>
                
            </b></button>
        </div>
    <br>
    <div class="mt-5 mb-3 clearfix">
        <div class="pull-left" ><button type="button" style="color:white;background:#00008ba1; font-size:20px;border:solid black 2px;">
            <div class="btn btn-success">
            <b>Users Details</b></button></div>
        </button>
        <div class="pull-right"><button type="button" style="color:white;background:#00008ba1; font-size:20px; border:solid black 2px;"><div class="btn btn-success pull-right">
        <i class="fa fa-plus"></i>
        </div><b><?= $this->Html->link('Create User', ['action' => 'add']) ?></b></button>
        </div>

<table style="color:white;background:#00008ba1; font-size:40px;border:solid 1px; text-align:center;padding-bottom:10px">
    <thead class="bg-primary">
    <tr>
    	<th>Id</th>
    	<th>User Name</th>
    	<th colspan="3" style="text-align:center" >Actions</th>
    </tr>
    </thead>    
<tbody>
<?php foreach ($users as $user) 
{ 
?>
	<tr >
	<td><?php echo $user->id; ?></td>
	<td>
	<?= $this->Html->link($user->username, ['action' => 'view', $user->id]); ?>
	</td>
    <td>
    <span class="fa fa-shield"> 
    <?= $this->Html->link('Permission', ['action' => 'permission', $user->id]); ?>
    </span>
    </td>
    <td >    
	<span class="fa fa-pencil">	
	<?= $this->Html->link('Edit', ['action' => 'edit', $user->id]); ?>
	</span>
	</td>
	<td >
	<span class="fa fa-trash">	
	<?= $this->Form->postLink(
	'Delete',
	['action' => 'delete', $user->id],
	['confirm' => __('Are you sure you want to delete user with id # {0}?',$user->id)]);
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
<ul class="pagination" style="margin-left:40%; margin-right: 40%; font-size:40px;border:solid black 2px;background:#00008ba1; ">
<?= $this->Paginator->prev("<<") ?>
<?= $this->Paginator->numbers() ?>
<?= $this->Paginator->next(">>") ?>
</ul>       
</div>
   

</div>

</body>
</html>