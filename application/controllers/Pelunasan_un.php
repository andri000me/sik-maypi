<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelunasan_un extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('M_pelunasan_un');
		$this->load->model('M_dana_keluar_un');
		$this->load->model('M_pengaturan');
	}

	public function index()
	{
		$data['title']                = 'Pelunasan UN';
		$tahun_ajaran                 = $this->M_pengaturan->tampil()->row_array();
		$data['pelunasan_un']         = $this->M_pelunasan_un->tampil($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total']                = $this->M_pelunasan_un->total($tahun_ajaran['tahun_ajaran'])->result_array();
		$data['total_dana_keluar_un'] = $this->M_dana_keluar_un->total($tahun_ajaran['tahun_ajaran'])->row_array();
		$this->template->view('pelunasan_un/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah';
		$data['tahun_ajaran'] = $this->M_pengaturan->tampil()->row_array();
		$this->template->view('pelunasan_un/tambah', $data);

		if( isset($_POST['tambah']) ){
			$this->M_pelunasan_un->tambah();
			redirect('pelunasan_un');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit';
		$data['pelunasan_un'] = $this->M_pelunasan_un->tampil_perId($id)->row_array();
		$this->template->view('pelunasan_un/edit', $data);

		if( isset($_POST['simpan']) ){
			$this->M_pelunasan_un->edit($id);
			redirect('pelunasan_un');
		}
	}

	public function hapus($id)
	{
		$this->M_pelunasan_un->hapus($id);
		redirect('pelunasan_un');
	}
}