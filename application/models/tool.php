<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tool extends CI_Model{

public function ambilbio()
    {
        $query=$this->db->query("SELECT * FROM profile WHERE Id_profile");
        return $query->result();
    }
public function ambilpesan()
    {
        $query=$this->db->query("SELECT * FROM pesan WHERE id_pesan");
        return $query->result();
    }

public function ambilkatagori()
    {
        $query=$this->db->query("SELECT * FROM katagori WHERE id_katagori;");
        return $query->result();
    }
public function ambilkonten()
    {
        $query=$this->db->query("SELECT * FROM konten, katagori WHERE konten.id_katagori=katagori.id_katagori");
        return $query->result();
    }
function login($email, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('profile');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
public function view_where($table,$data){
        $this->db->where($data);
        return $this->db->get($table);
}
public function getkonten($id_konten)
    {
        $query=$this->db->query("SELECT * from konten WHERE id_konten='$id_konten'");
        return $query->result();
    }
public function delete_konten($id_konten)
    {
        $hasil=$this->db->query("delete from konten WHERE id_konten='$id_konten'");
        return $hasil;
    }
 public function insertuser($data){
       $this->db->insert('profile', $data);
    }
public function delete_user($Id_profile)
    {
        $hasil=$this->db->query("delete from profile WHERE Id_profile='$Id_profile'");
        return $hasil;
    }
public function get_pesan($id_pesan)
    {
        $query=$this->db->query("SELECT * from pesan WHERE id_pesan='$id_pesan'");
        return $query->result();
    }
}
