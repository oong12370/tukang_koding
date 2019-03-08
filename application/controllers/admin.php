<?php
class admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
        $this->load->model('tool');
	   	$this->load->helper('form_helper');

	}
public function index()
	{
		if($this->session->userdata('logged_in'))
	   	{
	     $session_data = $this->session->userdata('logged_in');
	      $this->data=array('pagetitle'=>'admin',
                    'ambilbio' =>$this->tool->ambilbio(),
                    'isi' =>'backend/isi',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
		$this->load->view('backend/layout/wrapper',$this->data);
	   	}else{
	     //Jika tidak ada session di kembalikan ke halaman login
	     redirect('admin/login_index', 'refresh');
	 	}
   }
 function home(){
		 $this->data=array('pagetitle'=>'admin',
                    'ambilkatagori' =>$this->tool->ambilkatagori(),
                    'ambilkonten' =>$this->tool->ambilkonten(),
                    'isi' =>'backend/isi',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
		$this->load->view('backend/layout/wrapper',$this->data);

	}
function login_index(){
   	if($this->session->userdata('logged_in'))
   	{
     redirect('admin/login_index', 'refresh');

   	}else {
   		$csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash(),
        );
      $this->load->helper(array('form'));
      $this->load->view('backend/login',$csrf);
   		}
 	}
 function logout()
	 {
   	$this->session->unset_userdata('logged_in');
   	session_destroy();
   	redirect('admin/login_index', 'refresh');
 	}
function konten(){
		 $this->data=array('pagetitle'=>'admin',
                    'ambilkatagori' =>$this->tool->ambilkatagori(),
                    'ambilkonten' =>$this->tool->ambilkonten(),
                    'isi' =>'backend/kontenadmin',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
		$this->load->view('backend/layout/wrapper',$this->data);

	}
function tambah_konten(){
		 $this->data=array('pagetitle'=>'admin',
                    'ambilkatagori' =>$this->tool->ambilkatagori(),
                    'ambilkonten' =>$this->tool->ambilkonten(),
                    'isi' =>'backend/tambah_konten',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
		$this->load->view('backend/layout/wrapper',$this->data);

	}
public function add_konten()
    {
    if($this->session->userdata('logged_in'))
    {
    redirect('admin/login_index', 'refresh');
    }else {
     $this->data=array('pagetitle'=>'admin',
                    'ambilkatagori' =>$this->tool->ambilkatagori(),
                    'ambilkonten' =>$this->tool->ambilkonten(),
                    'isi' =>'backend/kontenadmin',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
    $this->load->helper(array('form'));
    $this->load->view('backend/layout/wrapper',$this->data);

    //save ke database
    if($this->input->post(NULL,true)):
    $this->data['konten'] = array ('nama_konten'=>$this->input->post('nama_konten', true),
                                          'id_katagori'=>$this->input->post('id_katagori', true),
                                          'deskripsi'=>$this->input->post('deskripsi', TRUE),
                                          'tgl_konten'=>$this->input->post('tgl_konten', TRUE));
    $this->db->insert('konten', $this->data['konten']);
    
    return redirect('admin/konten');
    endif;
        }
    }
 public function edit_konten($id_konten)
    {
    if($this->session->userdata('logged_in'))
    {
    redirect('admin/login_index', 'refresh');
    }else {
    $this->data=array('pagetitle'=>'admin',
                    'ambilkatagori' =>$this->tool->ambilkatagori(),
                    'getkonten' =>$this->tool->getkonten($id_konten),
                    'isi' =>'backend/edit_konten',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
    $this->load->helper(array('form'));
    $this->load->view('backend/layout/wrapper',$this->data);

    //save ke database
    if($this->input->post(NULL,true)):
    $this->data['baru'] = array (
                                          'nama_konten'=>$this->input->post('nama_konten', true),
                                          'id_katagori'=>$this->input->post('id_katagori', true),
                                          'deskripsi'=>$this->input->post('deskripsi', TRUE),
                                          'tgl_konten'=>$this->input->post('tgl_konten', TRUE));
	$this->db->where('id_konten', $id_konten);
    $this->db->update('konten', $this->data['baru']);
    redirect('Admin/konten/');
    endif;
        }
    }
public function hapuskonten($id_konten){
		$this->tool->delete_konten($id_konten);			
	  	redirect('Admin/konten/');
		}
function user(){
		 $this->data=array('pagetitle'=>'admin',
                    'ambilbio' =>$this->tool->ambilbio(),
                    'isi' =>'backend/userview',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
		$this->load->view('backend/layout/wrapper',$this->data);

	}
public function add_user()
    {
    $this->data=array('pagetitle'=>'admin',
    				'ambilbio' =>$this->tool->ambilbio(),
                    'isi' =>'backend/tambah_user',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
		$this->load->view('backend/layout/wrapper',$this->data);

    }
function tambah_manajemenuser(){
      $data = array(
			'nama' => $this->input->post('nama'),
			'email'=>$this->input->post('email'),
            'password'=> md5($this->input->post('password')),
            'alamat'=>$this->input->post('alamat'),
            'studi'=>$this->input->post('studi'),
            'jabatan'=>$this->input->post('jabatan')
		);
		if (!empty($_FILES['gambar']['name'])) {
			$upload = $this->_do_upload();
			$data['gambar'] = $upload;
		}
		$this->tool->insertuser($data);
		redirect('admin/user', $data);
    }
private function _do_upload()
	{
		$config['upload_path'] 		= 'img/';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size'] 			= 100;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= round(microtime(true)*1000);
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('admin/user');
		}
		return $this->upload->data('file_name');
	}
public function hapususer($Id_profile){
		$this->tool->delete_user($Id_profile);			
	  	redirect('Admin/user/');
		}
function pesan(){
		 $this->data=array('pagetitle'=>'admin',
                    'ambilpesan' =>$this->tool->ambilpesan(),
                    'isi' =>'backend/pesanview',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
		$this->load->view('backend/layout/wrapper',$this->data);

	}
public function form_balas($id_pesan)
    {
    $this->data=array('pagetitle'=>'admin',
    				'get_pesan' =>$this->tool->get_pesan($id_pesan),
                    'isi' =>'backend/balas',
 					'session_data' => $this->session->set_userdata('logged_in')
 					);
		$this->load->view('backend/layout/wrapper',$this->data);

    }
public function send_mail() { 

         $from_email = "oong12370@gmail.com"; 
         $to_email = $this->input->post('email'); 
         $balaspesan = $this->input->post('pesan'); 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => '465',
                'smtp_user' => $from_email,
                'smtp_pass' => 'O@ngjulian91',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Admin Tukang Koding'); 
         $this->email->to($to_email);
         $this->email->subject('Balasan Dari Admin Tukang Koding'); 
         $this->email->message($balaspesan); 

         //Send mail 
         if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
                redirect('admin/pesan');
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                redirect('admin/pesan');
         } 
      }
}
