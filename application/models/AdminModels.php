<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModels extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Almaty');
	}

	public function add_catalog($d)
	{
		$string = array(
			'name' => $d['name'],
			'photo' => $d['photo'],
			'alt_image' => $d['alt_image'],
			'title_page' => $d['title_page'],
		);
		$this->db->insert('catalog', $string);
		return $this->db->insert_id();
	}

	public function add_goods($d)
	{
		$string = array(
			'id_catalog' => $d['catalog_id'],
			'id_podcatalog' => $d['podcatalog_id'],
			'name' => $d['name'],
			'photo_1' => $d['photo_1'],
			'photo_2' => $d['photo_2'],
			'alt_image' => $d['alt_image'],
			'charac' => $d['characteristic'],
			'description' => $d['desc'],
			'link_video' => $d['link']
		);
		$this->db->insert('goods', $string);
		return $this->db->insert_id();
	}

	public function add_news($d)
	{
		$string = array(
			'name' => $d['name'],
			'text' => $d['text'],
			'photo' => $d['photo'],
			'alt_image' => $d['alt_image'],
			'title_page' => $d['title_page']
		);
		return $this->db->insert('news', $string);
	}

	public function add_reviews($d)
	{
		$string = array(
			'name' => $d['name'],
			'text' => $d['texts'],
			'who' => $d['who']
		);
		return $this->db->insert('reviews', $string);
	}

	public function add_header_slide($d)
	{
		$string = array(
			'title1' => $d['name1'],
			'title2' => $d['name2'],
			'photo' => $d['photo']
		);

		return $this->db->insert('header_slide', $string);
	}

	public function add_partners($d)
	{
		$string = array(
			'photo' => $d['photo'],
			'alt_image' => $d['alt_image'],
			'url' => $d['url'],
		);
		return $this->db->insert('partners', $string);
	}

	public function add_contact($d)
	{
		$string = array(
			'num' => $d['num'],
			'status' => $d['status']
		);
		return $this->db->insert('contact', $string);
	}

	public function selectAllArray($table)
	{
		$this->db->order_by('id', 'asc');
		$query = $this->db->get($table);
		return $query->result_array();
	}

	public function get_first_name($tbl, $field, $id)
	{
		$sql = "SELECT $field FROM $tbl WHERE id = ?";
		$query = $this->db->query($sql, array($id));
		if ($query) {
			return $query->row_array();
		} else {
			return false;
		}
	}

	public function search_goods($referal)
	{
		$this->db->like('name', $referal);
		$res = $this->db->get('goods');
		return $res->result_array();
	}

	public function get_goods($id)
	{
		$sql = "SELECT * FROM goods WHERE id_catalog = ?";
		$query = $this->db->query($sql, array($id));
		if ($query) {
			return $query->result_array();
		} else {
			return false;
		}
	}

	public function get_goods_in_podcatalog($id_catalog, $id_podcatalog)
	{
		$sql = "SELECT * FROM goods WHERE id_catalog = ? and id_podcatalog = ?";
		$query = $this->db->query($sql, array($id_catalog, $id_podcatalog));
		if ($query) {
			return $query->result_array();
		} else {
			return false;
		}
	}

	public function get_podcatalogs($id)
	{
		$sql = "SELECT * FROM podcatalog WHERE catalog_id = ?";
		$query = $this->db->query($sql, array($id));
		if ($query) {
			return $query->result_array();
		} else {
			return false;
		}
	}

	// Select with where po id
	public function get_id($tablename, $id)
	{
		$sql = "SELECT * FROM $tablename WHERE id = ?";
		$query = $this->db->query($sql, array($id));
		if ($query) {
			return $query->row_array();
		} else {
			return false;
		}
	}

	public function update_good($arr)
	{
		if (isset($arr['photo_1']) && isset($arr['photo_2'])) {
			$data = array(
				'id_catalog' => $arr['id_catalog'],
				'id_podcatalog' => $arr['id_podcatalog'],
				'name' => $arr['name'],
				'photo_1' => $arr['photo_1'],
				'photo_2' => $arr['photo_2'],
				'alt_image' => $arr['alt_image'],
				'charac' => $arr['characteristic'],
				'description' => $arr['desc'],
				'link_video' => $arr['link']
			);
		} elseif (isset($arr['photo_1']) && !isset($arr['photo_2'])) {
			$data = array(
				'id_catalog' => $arr['id_catalog'],
				'id_podcatalog' => $arr['id_podcatalog'],
				'name' => $arr['name'],
				'photo_1' => $arr['photo_1'],
				'alt_image' => $arr['alt_image'],
				'charac' => $arr['characteristic'],
				'description' => $arr['desc'],
				'link_video' => $arr['link']
			);
		} elseif (!isset($arr['photo_1']) && isset($arr['photo_2'])) {
			$data = array(
				'id_catalog' => $arr['id_catalog'],
				'id_podcatalog' => $arr['id_podcatalog'],
				'name' => $arr['name'],
				'photo_2' => $arr['photo_2'],
				'alt_image' => $arr['alt_image'],
				'charac' => $arr['characteristic'],
				'description' => $arr['desc'],
				'link_video' => $arr['link']
			);
		} elseif (!isset($arr['photo_1']) && !isset($arr['photo_2'])) {
			$data = array(
				'id_catalog' => $arr['id_catalog'],
				'id_podcatalog' => $arr['id_podcatalog'],
				'name' => $arr['name'],
				'alt_image' => $arr['alt_image'],
				'charac' => $arr['characteristic'],
				'description' => $arr['desc'],
				'link_video' => $arr['link']
			);
		}


		$this->db->where('id', $arr['id']);
		$this->db->update('goods', $data);

		$success = $this->db->affected_rows();

		if (!$success) {
			return false;
		} else {
			return true;
		}
	}

	public function update_catalog($arr)
	{
		if (isset($arr['photo'])) {
			$data = array(
				'name' => $arr['name'],
				'photo' => $arr['photo'],
				'alt_image' => $arr['alt_image'],
				'title_page' => $arr['title_page']
			);
		} else {
			$data = array(
				'name' => $arr['name'],
				'alt_image' => $arr['alt_image'],
				'title_page' => $arr['title_page']
			);
		}


		$this->db->where('id', $arr['id']);
		$this->db->update('catalog', $data);

		$success = $this->db->affected_rows();

		if (!$success) {
			return false;
		} else {
			return true;
		}
	}

	public function update_news($arr)
	{
		if (isset($arr['photo'])) {
			$data = array(
				'name' => $arr['name'],
				'text' => $arr['text'],
				'photo' => $arr['photo'],
				'alt_image' => $arr['alt_image'],
				'title_page' => $arr['title_page']
			);
		} else {
			$data = array(
				'name' => $arr['name'],
				'text' => $arr['text'],
				'alt_image' => $arr['alt_image'],
				'title_page' => $arr['title_page']
			);
		}

		$this->db->where('id', $arr['id']);
		$this->db->update('news', $data);

		$success = $this->db->affected_rows();

		if (!$success) {
			return false;
		} else {
			return true;
		}
	}

	public function update_reviews($arr)
	{
		$data = array(
			'name' => $arr['name'],
			'text' => $arr['texts'],
			'who' => $arr['who']
		);

		$this->db->where('id', $arr['id']);
		$this->db->update('reviews', $data);

		return $this->db->affected_rows();
	}

	public function update_slide($arr)
	{
		if (isset($arr['photo'])) {
			$data = array(
				'title1' => $arr['name1'],
				'title2' => $arr['name2'],
				'photo' => $arr['photo'],
			);
		} else {
			$data = array(
				'title1' => $arr['name1'],
				'title2' => $arr['name2'],
			);
		}


		$this->db->where('id', $arr['id']);
		$this->db->update('header_slide', $data);

		$success = $this->db->affected_rows();

		if (!$success) {
			return false;
		} else {
			return true;
		}
	}

	public function update_partners($arr)
	{
		if (isset($arr['photo'])) {
			$data = array(
				'photo' => $arr['photo'],
				'alt_image' => $arr['alt_image'],
				'url' => $arr['url']
			);
		} else {
			$data = array(
				'alt_image' => $arr['alt_image'],
				'url' => $arr['url']
			);
		}


		$this->db->where('id', $arr['id']);
		$this->db->update('partners', $data);

		$success = $this->db->affected_rows();

		if (!$success) {
			return false;
		} else {
			return true;
		}
	}

	public function update_podcatalog($arr)
	{
		if (isset($arr['photo'])) {
			$data = array(
				'name' => $arr['name'],
				'photo' => $arr['photo'],
				'alt_image' => $arr['alt_image'],
				'title_page' => $arr['title_page']
			);
		} else {
			$data = array(
				'name' => $arr['name'],
				'alt_image' => $arr['alt_image'],
				'title_page' => $arr['title_page']
			);
		}


		$this->db->where('id', $arr['id']);
		$this->db->update('podcatalog', $data);

		$success = $this->db->affected_rows();

		if (!$success) {
			return false;
		} else {
			return true;
		}
	}

	public function update_contact($arr)
	{

		$data = array(
			'status' => $arr['status'],
			'num' => $arr['num']
		);


		$this->db->where('id', $arr['id']);
		$this->db->update('contact', $data);

		$success = $this->db->affected_rows();

		if (!$success) {
			return false;
		} else {
			return true;
		}
	}

	public function add_podcatalog($d)
	{
		$string = array(
			'catalog_id' => $d['catalog_id'],
			'name' => $d['name'],
			'photo' => $d['photo'],
			'alt_image' => $d['alt_image'],
			'title_page' => $d['title_page']
		);
		return $this->db->insert('podcatalog', $string);
	}

	public function change_catalog($id)
	{
		$data = array(
			'podcatalog' => 1,
		);

		$this->db->where('id', $id);
		$this->db->update('catalog', $data);

		return $this->db->affected_rows();
	}

	// Delete по id и tablename
	public function delete_row($table, $id)
	{
		$this->db->where('id', $id);
		$this->db->delete($table);
		if ($this->db->affected_rows() == '1') {
			return TRUE;
		} else {
			return FAlSE;
		}
	}

	// Delete по id и tablename
	public function delete_row_2($table, $id, $field)
	{
		$this->db->where($field, $id);
		$this->db->delete($table);
		if ($this->db->affected_rows() == '1') {
			return TRUE;
		} else {
			return FAlSE;
		}
	}

	// Удаление изобр из папки
	public function delete_files($name, $puth)
	{
		return unlink(FCPATH . "public/img/$puth/" . $name);
	}

	public function add_request($d)
	{
		$string = array(
			'name' => $d['form_name'],
			'catalog' => $d['form_catalog'],
			'number' => $d['form_number'],
			'date_system' => date("Y-m-d H:i:s")
		);
		return $this->db->insert('reguest', $string);
	}

	public function get_contact($status){
		$sql = "SELECT num FROM contact WHERE status = ?";
		$query = $this->db->query($sql, array($status));
		if ($query) {
			return $query->row_array();
		} else {
			return false;
		}
	}
}
