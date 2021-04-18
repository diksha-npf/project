<?php   
    namespace App\Model\Table;
    use Cake\ORM\Table;
    use Cake\Validation\Validator;
    class UsersTable extends Table
    {
        public function initialize(array $config)
        {
           /*parent::initialize($config);
           $this->table('users');
           $this->displayfield('id');
           $this->primarykey('id');
           
           $this->hasone('UsersPermissions',[
               'foreignKey'=>'usersid'
           ]);*/
        }
        
    }
?>    