 
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class prosesLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('tool','',TRUE);
 }

 function index()
 {
   //Aksi untuk melakukan validasi
   $this->load->library('form_validation');

   $this->form_validation->set_rules('email', 'email', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Jika validasi gagal user akan diarahkan kembali ke halaman login
     $this->load->view('backend/login');
   }
   else
   {
     //Jika berhasil user akan di arahkan ke private area 
     redirect('admin/index', 'refresh');
   }

 }

 function check_database($password)
 {
   //validasi field terhadap database 
   $email = $this->input->post('email');

   //query ke database
   $result = $this->tool->login($email, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'Id_profile' => $row->Id_profile,
         'email' => $row->email
       );
        $this->session->set_userdata(array('logged_in'=> $sess_array, 'password' => $row->password, 'email' => $row->email));
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database');
	 echo "<script>alert('Login Failed!  Username or Password is not correct!  Please try again...');history.go(-1);</script>";
     return false;
   }
 }
}
?>



