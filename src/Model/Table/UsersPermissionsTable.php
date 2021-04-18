<?php   
    namespace App\Model\Table;
    use Cake\ORM\Table;
    use Cake\Validation\Validator;
    class UsersPermissionsTable extends Table
    {
        public function initialize(array $config)
       {
          /* parent::initialize($config);
           $this->table('users_permissions');
           $this->displayfield('id');
           $this->primarykey('id');

           $this->belongsTo('Users',[
               'foreignKey'=>'usersid',
               'joinType'=>'INNER'
           ]);
           $this->hasone('Permissions',[
               'foreignKey'=>'permissionid'
           ]);*/
       }
        
        
    }
?>    