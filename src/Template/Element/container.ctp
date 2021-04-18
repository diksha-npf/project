
<body>
<div class="container">

    <div class="row">
        <div class="col-4">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Recent Post</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href ="#">Sub Menu 1</a></li>
              <li class="list-group-item"><a href ="#">Sub Menu 2</a></li>
              <li class="list-group-item"><a href ="#">Sub Menu 3</a></li>
           </ul>
           <?php //pr($users); die;
              foreach($users as $datas) 
             
              { 
                
                if($Auth->user('id') && $datas['permission']=='edit' && $datas['permission']=='upload') 
                {

                  //pr($datas['users_permission']['status']); 

                 echo "<a href = '".$this->Url->build (["controller" => "Users","action"=>"edit",$Auth->user('id')])."'>Edit</a>"; 
                 echo "<br>";
                 echo "<a href = '".$this->Url->build (["controller" => "Users","action"=>"upload",$Auth->user('id')])."'>Upload</a>";
                  
               }
               
               elseif($datas['permission']=='edit')
               {
                echo "<a href = '".$this->Url->build (["controller" => "Users","action"=>"edit",$Auth->user('id')])."'>Edit</a>"; 
                echo "<br>";
              } 
              elseif($datas['permission']=='upload')
               {
                echo "<a href = '".$this->Url->build (["controller" => "Users","action"=>"add",$Auth->user('id')])."'>Upload</a>"; 
               } 
               else{


               }
              //} 
            }
            ?>
        </div>

        <div align="center">
          <?php
            if ($Auth->user())
           {
           ?>
           <h4>Hey <?php 
            echo ($Auth->user('username'));
           } 
          ?>!</h4>
           
        </div>
    </div>

    </div>
    
    </div>

    <br>
    <br>
    <br>
    <br>