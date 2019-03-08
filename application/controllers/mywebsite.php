<?php
/**
* 
*/
class mywebsite extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('tool');
	}

public function halaman()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash(),
        );
        $this->data=array('pagetitle'=>'oong_julian',
                    'isi' =>'isi');
        $this->load->view('Frontend/wrapper',$this->data);
    }

public function service()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash(),
        );
        $this->data=array('pagetitle'=>'oong_julian',
                    'isi' =>'servicepage');
        $this->load->view('Frontend/wrapper',$this->data);
    }

public function portfolio()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash(),
        );
        $this->data=array('pagetitle'=>'oong_julian',
                    'ambilkonten' =>$this->tool->ambilkonten(),
                    'isi' =>'portpoliopage');
        $this->load->view('Frontend/wrapper',$this->data);
    }
public function about()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash(),
        );
        $this->data=array('pagetitle'=>'oong_julian',
            'ambilbio' =>$this->tool->ambilbio(),
                    'isi' =>'aboutpage');
        $this->load->view('Frontend/wrapper',$this->data);
    }
public function contact()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash(),
        );
        $this->data=array('pagetitle'=>'oong_julian',
                    'ambilbio' =>$this->tool->ambilbio(),
                    'isi' =>'contactpage');
        $this->load->view('Frontend/wrapper',$this->data);
    }
public function location()
    {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash(),
        );
         $this->data=array('pagetitle'=>'oong_julian',
                    'isi' =>'locationpage');
        $this->load->view('Frontend/wrapper',$this->data);
    }
public function contact_us()
    {
    //save ke database
    if($this->input->post(NULL,true)):
    $this->data['pesan'] = array ('name'=>$this->input->post('name', true),
                                          'email'=>$this->input->post('email', true),
                                          'subject'=>$this->input->post('subject', TRUE),
                                          'message'=>$this->input->post('message', TRUE));
    $this->db->insert('pesan', $this->data['pesan']);
    redirect('mywebsite/contact', 'refresh');
    endif;
        
    }
}