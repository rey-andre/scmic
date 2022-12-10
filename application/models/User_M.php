<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_M extends CI_Model {

	public function cek_user($data) {
		$query = $this->db->get_where('user', $data);
		return $query;
	}

	public function get($id = null)
	{
		$this->db->from('user');
		if ($id != null) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['nama'] = $post['nama'];
		$params['email'] = $post['email'];
		$params['no_hp'] = $post['no_hp'];
		$params['password'] = md5($post['password']);
		$params['role'] = "user";

		$this->db->insert('user', $params);
	}

	public function add_admin($post)
	{
		$params['nama'] = $post['nama'];
		$params['email'] = $post['email'];
		$params['no_hp'] = $post['no_hp'];
		$params['password'] = md5($post['password']);
		$params['role'] = "admin";

		$this->db->insert('user', $params);
	}

	public function del($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
	
}