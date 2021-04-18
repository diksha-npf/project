<?php   
    namespace App\Model\Table;
    use Cake\ORM\Table;
    use Cake\Validation\Validator;
    class PermissionsTable extends Table
    {
        public function initialize(array $config)
        {
           /*parent::initialize($config);
           $this->table('permissions');
           $this->displayfield('id');
           $this->primarykey('id');

           $this->belongsTo('UsersPermissions',[
               'foreignKey'=>'permissionid',
               'joinType'=>'INNER'
           ]);*/
        }
           
        
    }
?>    