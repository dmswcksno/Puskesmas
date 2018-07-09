<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Antrian_model extends CI_Model
	{
		public function getDataAntrian()
		{
			$query = $this->db->get("antrian");
			return $query->result_array();
		}
		public function insertAntrian()
		{
			// $tgl=$this->input->post('tglLahir');
			// $tglBaru=date_format(new DateTime($tgl),"Y-m-d");
			$object = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'notlp' => $this->input->post('notlp'));
				// 'tanggalLahir' => $tglBaru,
			$this->db->insert('antrian', $object);
		}

		public function getAntrian($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('antrian');
			return $query->result();
		}

		public function updateById($id)
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'notlp' => $this->input->post('notlp'));
				//'foto' => $this->upload->data('file_name'));
			$this->db->where('id', $id);
			$this->db->update('antrian', $data);
		}

		public function delete($id)
		{ 
        	if ($this->db->delete("antrian", "id = ".$id)) { 
            return true; 
        }
      } 
	}

?>