<?php
class User_model extends CI_model{

	function create($formArray){
		$this->db->insert('users',$formArray); // insert into users (name, email) values (?, ?); 
	}

	function all(){
		return $users = $this->db->get('users')->result_array(); // select * from users
	}

	function getUser($id){
		$this->db->where('id', $id);
		return $users = $this->db->get('users')->row_array(); // fetch only one row as where condition
	}

	function updateUser($formArray, $id){
		$this->db->where('id', $id);
		$this->db->update('users', $formArray); // update users SET name = ? , email = ? 		 
	}

	function deletUser($id){
		$this->db->where('id', $id);
		$this->db->delete('users'); // DELETE from usres where id = ?
	}
}
?>