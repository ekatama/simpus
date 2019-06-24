<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
	parent::__construct();
	// cek login
					//
	        // parent::__construct();
	        //  if(!$this->is_logged_in()):
	        //  redirect(base_url()."login.php");
					//
					//
	
}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data['pembuatankta'] = $this->db->query("select * from pembuatankta")->result();
	}

	public function cpanellayananpemustaka()
	{
		//$data['pembuatankta'] = $this->m_cpanel->get_data('pembuatankta')->result();
		$this->load->view('cpanellayananpemustaka');
	}

	public function pembuatankta_edit()
	{

		$data['pembuatankta'] = $this->m_cpanel->get_data('pembuatankta')->result();
		$this->load->view('pembuatankta_edit',$data);
	}

	public function pembuatankta_edit_act()
	{
		$judul_pembuatankta = $this->input->post('judul_pembuatankta');
		$deskripsi_pembuatankta = $this->input->post('deskripsi_pembuatankta');
		$this->form_validation->set_rules('judul_pembuatankta','Judul','required');
		$this->form_validation->set_rules('deskripsi_pembuatankta','Deskripsi','required');

		$where = array(
			'id_pembuatankta' => '1'		
		);
		$data = array(
			'id_pembuatankta' => '1',
			'judul_pembuatankta' => $judul_pembuatankta,
			'deskripsi_pembuatankta' => $deskripsi_pembuatankta,
		);
		$this->m_cpanel->update_data($where,$data,'pembuatankta');
		redirect(base_url().'admin/cpanellayananpemustaka?pesan=sukses_update_kta');
	}

	public function sirkulasi_edit()
	{

		$data['sirkulasi'] = $this->m_cpanel->get_data('sirkulasi')->result();
		$this->load->view('sirkulasi_edit',$data);
	}



}
