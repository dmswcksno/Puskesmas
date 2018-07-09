<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('antrian_model');
		$data['antrian_list'] = $this->antrian_model->getDataAntrian();
		$this->load->view('antrian', $data);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('antrian_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'ALamat', 'trim|required');
		$this->form_validation->set_rules('notlp', 'No Telpon', 'trim|required');

		// $this->antrian_model->insertAntrian();
		// $this->load->view('tambah_antrian_data');

		if ($this->form_validation->run()==FALSE)
		{
		$this->load->view('tambah_antrian_view');
			
		}
		// else
		// {
		// 	$config['upload_path']		= './assets/uploads';
		// 	$config['allowed_types']	= 'gif|jpg|png';
		// 	$config['max_size']			= 1000000000;
		// 	$config['max_width']		= 10240;
		// 	$config['max_height']		= 7680;

		// 	$this->load->library('upload', $config);

		// 	if ( ! $this->upload->do_upload('foto'))
		// 	{
		// 		$error = array('error' => $this->upload->display_errors());
		// 		$this->load->view('tambah_antrian_view', $error);
		// 	}

		else
		{
				$this->antrian_model->insertAntrian();
				$this->load->view('tambah_antrian_data');

			}
		}


	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'ALamat', 'trim|required');
		$this->form_validation->set_rules('notlp', 'No Telpon', 'trim|required');

		$this->load->model('antrian_model');
		$data['antrian'] = $this->antrian_model->getAntrian($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_antrian_view',$data);
		}
		else
		{
			$this->antrian_model->updateById($id);
			$this->load->view('edit_antrian_data');
		}
	}

	public function deleteData($id)
	{
		$this->load->helper("url");
		$this->load->model("antrian_model");
		$this->antrian_model->delete($id);
		redirect('antrian');
	}
}

