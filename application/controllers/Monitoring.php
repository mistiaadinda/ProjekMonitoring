<?php
defined('BASEPATH') or exit('NO DIRECT ACCESS SCRIPT ALLOWED');


class Monitoring extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Monitor_model');
    }

    public function index()
    {
        $data['judul'] = "Project Monitoring";
        $data['monitoring'] = $this->Monitor_model->get();
        $this->load->view('monitor', $data);
    }

    public function addindex()
    {
        $data['judul'] = "Halaman Tambah Project";
		$data['monitoring'] = $this->Monitor_model->get();
        $this->load->view('vw_tambah', $data);
    }

    public function tambah()
	{
        $data['judul'] = "Halaman Tambah Project";
		$data['monitoring'] = $this->Monitor_model->get();
        $this->form_validation->set_rules('nama_projek', 'nama_projek', 'required', [
			'required' => 'Nama Projek Wajib di isi'
		]);
        if ($this->form_validation->run() == false) {
			$this->load->view("vw_tambah", $data);
		} else {
			$data = [
                'nama_projek' => $this->input->post('nama_projek'),
                'nama_klien' => $this->input->post('nama_klien'),
                'nama_leader' => $this->input->post('nama_leader'),
                'email' => $this->input->post('email'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'progress' => $this->input->post('progress'),

            ];
            $this->Monitor_model->insert($data);
            redirect('Monitoring');
		}
	}

    public function edit($id)
	{
        $data['judul'] = "Halaman Edit Project";
		$data['monitoring'] = $this->Monitor_model->getById($id);
        $this->form_validation->set_rules('nama_projek', 'nama_projek', 'required', [
			'required' => 'Nama Projek Wajib di isi'
		]);

        if ($this->form_validation->run() == false) {
			$this->load->view("edit", $data);

		} else{
			$data = [
                'nama_projek' => $this->input->post('nama_projek'),
                'nama_klien' => $this->input->post('nama_klien'),
                'nama_leader' => $this->input->post('nama_leader'),
                'email' => $this->input->post('email'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'progress' => $this->input->post('progress'),
            ];


			$id = $this->input->post('id');
			//$this->hijab_model->update($data);
			$this->Monitor_model->update(['id' => $id], $data);
			redirect('Monitoring');
		}
	}

    public function hapus($id){
		$this->Monitor_model->delete($id);
		redirect('Monitoring');
	}
}
