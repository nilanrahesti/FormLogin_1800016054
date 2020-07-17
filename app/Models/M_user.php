<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class M_user extends Model{
    protected $table = 'user';
    protected $allowedFields =['firstname','lastname','email','password','date_update'];
<<<<<<< HEAD


   // public function getUser()
   // {
    //    $builder = $this->db->table('user');
   //     $builder->select('*');
   //     return $builder->get();
  //  }

 //   public function saveUser($data){
 //       $query = $this->db->table('user')->insert($data);
  //      return $query;
  //  }
 //  public function updateUser($data, $id)
  //  {
  //      $query = $this->db->table('user')->update($data, array('firstname' => $id));
  //      return $query;
  //  }
 
  //  public function deleteUser($id)
  //  {
  //      $query = $this->db->table('user')->delete(array('firstname' => $id));
  //      return $query;
  //  } 
=======
>>>>>>> 02d8cc4e459087195b2ba489f8476cd4a9193ce9
}