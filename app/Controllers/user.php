<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_user;

class user extends Controller
{

    public function index(){
        $data =[
            'title' => 'Form Login',
            'tampil' => 'login',
        ];
        echo view('templates/wrapper', $data);
    }

    public function register(){
        $data =[
            'title' => 'Form Register',
            'tampil' => 'register',
        ];
        echo view('templates/wrapper', $data);
    }
<<<<<<< HEAD
   // public function User_view(){
    //   $data =[
    //        'title' => 'Form Menu',
      //     'tampil' => 'User_view',
     //  ];
     //  echo view('Views/User_view/', $data);
 //  }
=======
>>>>>>> 02d8cc4e459087195b2ba489f8476cd4a9193ce9

    public function regis(){
        helper(['form', 'url', 'date']);

        $userModel = new M_user();
        
        $now = date('Y-m-d H:i:s');
        
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'date_update' => $now
        ];

        $save = $userModel->insert($data);
<<<<<<< HEAD
        $session = session();
        session()->setFlashdata('message', 'selamat registrasi berhasil');
        return redirect() -> to(base_url('user'));
    }
  //  public function save()
  //  {
  //      $model = new User_model();
  //      $data = array(
 //           'firstname'         => $this->request->getPost('firstname'),
  //          'lastname'       => $this->request->getPost('lastname'),
  //          'email'           => $this->request->getPost('email'),
  //          'password'           => $this->request->getPost('password'),
   //     );
  //      $model->saveUser($data);
  //      return redirect()->to(base_url('user')); 
  //  }
 
  //  public function update()
 //   {
   //     $model = new User_model();
   //     $id = $this->request->getPost('firstname');
   //     $data = array(
   //         'firstname'        => $this->request->getPost('firstname'),
  //          'lastname'       => $this->request->getPost('lastname'),
  //          'email'          => $this->request->getPost('email'),
  //          'password'          => $this->request->getPost('password'),
  //      );
  //      $model->updateUser($data, $id);
  //      return redirect()->to(base_url('user')); 
 //   }
 
 //   public function delete()
  //  {
  //      $model = new User_model();
  //      $id = $this->request->getPost('firstname');
   //     $model->deleteUser($id);
   //     return redirect()->to(base_url('user')); 
  //  }
 
 }
=======
       
        return redirect() -> to(base_url('user'));
    }
    public function login(){

        if($this->ada($_POST['email'],$_POST['password'])!=NULL) {

            $session=session();
            $session->set('email',$_POST['email']);
            return $this->response->redirect(site_url('home'));
        }else{
            session()->setFlashdata('msg','Email/Password Salah!!!!');
            return redirect()->to(site_url('user'));
        }
    }

    
}
>>>>>>> 02d8cc4e459087195b2ba489f8476cd4a9193ce9
