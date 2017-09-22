<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_app extends CI_Model{
  public function Select($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

  public function Select_like($table, $kolom, $term){
        $query = $this->db->query("Select * FROM $table where $kolom LIKE '%$term%'");
        return $query->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }

	public function Select_like_or($table, $like, $or_like){
		$this->db->like($like);
		$this->db->or_like($or_like);
		$query=$this->db->get($table);
		return $query->result_array();
	}

	public function Select_where($table, $array){
		$res=$this->db->get_where($table, $array);
		return $res->result_array();
	}

  public function Insert($table,$data){
      $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
      return $res; // Kode ini digunakan untuk mengembalikan hasil $res
  }

  public function Update($table, $data, $where){
      $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
      return $res;
  }

  public function Delete($table, $where){
      $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
      return $res;
  }

  public function get_key($table, $key){
      $query = $this->db->select('id')->from($table)->order_by('id', 'DESC')->limit(1)->get();


      if($query->num_rows() > 0) {
          $id = $query->row("id");
      }else {
          $id=0;
      }

      if($id>9999){
          $id=$key.($id+1);
      }
      elseif($id>999){
          $id=$key.'0'.($id+1);
      }elseif($id>99){
          $id=$key.'00'.($id+1);
      }elseif($id>9){
          $id=$key.'000'.($id+1);
      }else{
          $id=$key.'0000'.($id+1);
      }

      return $id;
  }

	public function get_row_field($table, $field, $array){
        $query = $this->db->select($field)->from($table)->where($array)->get();

        if($query->num_rows() > 0) {
            $_field = $query->row($field);
        }else {
            $_field=0;
        }

        return $_field;
    }

    public function cek_login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user');
    }

    public function num_result($table, $key, $data){
        $aa=$this->db->query("SELECT * FROM {$table} WHERE {$key}='{$data}'");
        return $aa->num_rows();
    }

	public function Select_distinct($table){
		$this->db->distinct();
		$query=$this->db->get($tabel);
		return $res->result_array();
	}

}
