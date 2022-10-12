<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['website'] = $this->db->get('tbl_website')->row();
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		$this->data['fitur'] = $this->db->get('tbl_fitur')->result();
		$this->data['pelayanan'] = $this->db->get('tbl_pelayanan')->row();
		$this->data['pijat_bekam'] = $this->db->get('tbl_pijat_bekam')->result();
		$this->data['pijat_lulur'] = $this->db->get('tbl_pijat_lulur')->result();
		$this->data['pijat_panggilan'] = $this->db->get('tbl_pijat_panggilan')->result();
		$this->data['testimoni'] = $this->db->get('tbl_testimoni')->result();
		$this->data['gallery'] = $this->db->get('tbl_gallery')->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}