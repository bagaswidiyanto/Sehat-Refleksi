<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{

	//set the class variable.
	var $template  = array();
	var $data      = array();
	//Load layout    
	public function layout()
	{
		date_default_timezone_set("Asia/Jakarta");

		$this->CI = &get_instance();
		// $this->data['menu']=$this->menu(0,$h="");
		$this->data['website'] = $this->CI->db->get('tbl_website')->row();

		$this->data['sosmed'] = $this->CI->db->get('tbl_sosmed')->result();

		$this->template['header']   = $this->load->view('layout/header', $this->data); //, $this->data

		$this->template['web'] = $this->load->view($this->web, $this->data); //, $this->data
		$this->template['footer'] = $this->load->view('layout/footer', $this->data); //, $this->data




	}

	// private function menu($parent=0,$hasil){
	//  $w = $this->CI->db->query("SELECT * from tbl_navigation where parent=".$parent." order by `sort` asc");


	// 	 if(($w->num_rows())>0 && $parent =='0')
	// 	 {		

	// 	 		$hasil .= "<ul class='nav navbar-nav navbar-right'>";

	// 	 }else if(($w->num_rows())>0 && $parent !=0){

	// 	 		$hasil .= "<ul >";

	// 	}




	// 	foreach($w->result() as $h)
	// 	{
	// 		$r = $this->CI->db->query("SELECT count(*) as jml from tbl_navigation where parent=".$h->id."")->row();

	// 		if($h->isPost=='1'){
	// 		$slug='pages/index/'.$h->slug;
	// 		}else{
	// 		$slug=$h->slug;
	// 		}
	// 		if(($r->jml)>0){

	// 		$hasil .= "<li class='dropdown'><a data-toggle='dropdown' href='".base_url($slug)."'>".$h->title." <span class='caret'></span></a>";
	// 		}else{
	// 		$hasil .= "<li class='dropdown '><a  href='".base_url($slug)."'>".$h->title."</a>";	
	// 		}
	// 		$hasil = $this->menu($h->id,$hasil);
	// 		$hasil .= "</li>";
	// 	}

	// 	if(($w->num_rows)>0 && $parent !=0)
	// 	{
	// 			$hasil .= "</ul>";
	// 	}
	// 	return $hasil;

	// }


}