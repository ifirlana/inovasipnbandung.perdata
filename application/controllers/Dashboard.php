<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('is_loggin') != true)
		{
			$this->session->set_flashdata('message', 'Maaf session tidak register. silahkan login ulang.'); 
			redirect("login");
		}
		$this->sidebar = $this->session->userdata('code');
		$this->username = $this->session->userdata('username');
	} 
	/**
	* @see index
	*	@route Dashboard
	*/	
	public function index()
	{
		$this->load->library('pagination');
		$this->load->model("Pelimpahanperkara_model","sppM");
		$data['_title']			=	"Beranda";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/home".$this->sidebar;
		$this->load->view('dashboard-admin-template/main',$data);
	}
	public function homeEmpty()
	{
		$data['_title']			=	"Silahkan Melanjutkan..";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$this->load->view('dashboard-admin-template/main',$data);	
	}
	// end of function index
	/**
	*	@see formPelimpahanPerkara
	*	@route formPelimpahan 
	*/
	public function formPelimpahanPerkara()
	{
		$data['_title']			=	"Form Pelimpahan Perkara";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/form-input-pelimpahan-perkara";
		$this->load->view('dashboard-admin-template/main',$data);
	}
	// end of function formPelimpahanPerkara
	/**
	*	@see simpanDataPelimpahan
	*/
	public function simpanDataPelimpahan()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		$form = $this->input->post("form");
		$form['username']	=	$this->username;
		$this->sppM->insert($form,4);
		$this->session->set_flashdata('message', 'Data telah di-input, Silahkan lanjutkan ');
		redirect("Dashboard");	
	}
	//end of function simpanDataPelimpahan
	/**
	*	@see 		formDataPeradilan
	*	@desc 	2015
	*	@code AD
	*	@route formDataPeradilan
	*/
	function formDataPeradilan()
	{
		$no 	=	$this->input->get("no");
		$id		=	$this->input->get("id");
		$data['_title']			=	"Form Data Peradilan";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/form-input-data-perkara";
		$data['_content']		=	"<input type='hidden' name='form[no]' value='".$no."' /><input type='hidden' name='form[id]' value='".$id."' /><input type='submit' class='form-control btn btn-primary btn-lg' value='simpan' onclick=\"this.form.action='".site_url("saveDataPerkara")."'\"/>";
		$this->load->view('dashboard-admin-template/main',$data);
	}
	// end of function formDataPeradilan
	/**
	*	@see dataPelimpahanPerkara
	*	@route dataPelimpahanPerkara
	*/
	public function dataPelimpahanPerkara()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		//$view['query']		= $this->sppM->showAll();
		if($this->sidebar == "AD")
		{
			$view['config']		= function($data){return "<a href='".site_url("showdetailsurat")."/?no=".$data->no."&id=".$data->id."' target='_blank'>View</a>";};
		}
		else
		if( $this->sidebar == "JK")
		{
			$view['config']		= function($data){return "<a href='".site_url("dakwaan/halamanData")."/?no=".$data->no."&id=".$data->id."' target='_blank'>View</a>";};
		}
		
		$var = $this->load->view("dashboard/view-list-data",$view,true);
		
		$data['_title']			=	"Data Pelimpahan Perkara";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/lihat-data-pelimpahan-perkara";
		$data['_content']		=	$var;
		$this->load->view('dashboard-admin-template/main',$data);
	} 
	// end of function dataPelimpahanPerkara
	/**
	*	@see cariNomorPelimpahanPerkara
	*	@route resCariNomorPelimpahanPerkara
	* not working again
	*/	
	public function cariNomorPelimpahanPerkara()
	{
		$var ="";
		$this->load->model("Pelimpahan_model",'spM');
		$id 		= $this->input->post("id");
		$no 		= $this->input->post("no");
		$query = $this->spM->cariNomorSurat($id,"surat_pelimpahan_perkara.id");
		if($query->num_rows() != 1)
		{
			echo "Nomor Surat Telah Ada. Silahkan Ganti Nomor Surat Lain.";
		}else
		{ 
			$data['id']	=	$id;
			$var .= $this->load->view("dashboard/bagian/button-tambah-barang",'',true);
			$var .= "<div class='row div-data-terdakwa'><div class='col-md-6 col-lg-6 col-xs-12'>";
			$var .= $this->load->view("dashboard/form-input-data-terdakwa",$data,true);
			$var .= "</div></div>";
			$var .= $this->load->view("dashboard/bagian/form-input-data-terdakwa",$data,true);
			echo $var;
		}
		/*
		$var ="";
		$this->load->model("Pelimpahanperkara_model",'spM');
		$no 		= $this->input->post("no");
		$query = $this->spM->cariNomorSurat($no,"surat_pelimpahan_perkara.no");
		if($query->num_rows() > 0)
		{
			echo "Nomor Surat Telah Ada. Silahkan Ganti Nomor Surat Lain.";
		}else
		{ 
			$var .= $this->load->view("dashboard/bagian/button-tambah-barang",'',true);
			$var .= "<div class='row div-data-terdakwa'><div class='col-md-6 col-lg-6 col-xs-12'>";
			$var .= $this->load->view("dashboard/form-input-data-terdakwa",'',true);
			$var .= "</div></div>";
			$var .= $this->load->view("dashboard/bagian/form-input-data-terdakwa",'',true);
			echo $var;
		}
		*/
	}
	// end of function cariNomorPelimpahanPerkara
	
	/**
	*	@see formTambahDataTerdakwa
	*	@route resTambahDataTerdakwa
	*/
	public function formTambahDataTerdakwa()
	{
		$this->load->model("Pelimpahanperkara_model",'spM');
		$no 		= $this->input->post("no");
		$query = $this->spM->cariNomorSurat($no,"surat_pelimpahan_perkara.no");
		if($query->num_rows() > 0)
		{
			echo "Nomor Surat Telah Ada. Silahkan Ganti Nomor Surat Lain.";
		}else
		{
			$this->load->view("dashboard/form-input-data-terdakwa");
		}
	
	}
	// end of function formTambahDataTerdakwa
	/**
	*	@see suratDakwaan
	*	@route resDataTerdakwa
	*/
	public function suratDakwaan()
	{
		$id 		=	$this->input->post("id");
		$data['id'] = $id;
		$var = "";
		$data['url_submit'] = site_url("savePelimpahanBerkasPerkara");
		$var .= $this->load->view("dashboard/bagian/button-tambah-dakwaan",$data,true);
		$var .= "<div class='row div-data-dakwaan'>";
		$var .= $this->load->view("dashboard/form-input-surat-dakwaan",$data,true);
		$var .= "</div>";
		$var .= $this->load->view("dashboard/input-submit",$data,true);
		echo $var;
	}
	/**
	*	@see formTambahDataTerdakwa
	*	@route resTambahDataTerdakwa
	*/
	public function formTambahDataDakwaan()
	{
		$this->load->model("Pelimpahanperkara_model",'spM');
		$no 		= $this->input->post("no");
		$id 		= $this->input->post("id");
		$query = $this->spM->cariNomorSurat($no,"surat_pelimpahan_perkara.no");
		if($query->num_rows() > 0)
		{
			echo "Nomor Surat Telah Ada. Silahkan Ganti Nomor Surat Lain.";
		}else
		{
			$data['id']	=	$id;
			$this->load->view("dashboard/form-input-surat-dakwaan",$data);
		}
	
	}
	// end of function formTambahDataTerdakwa
	
	// end of function suratDakwaan
	/**
	*	@see simpanPelimpahanBerkasPerkara
	*	@code AD,JK
	*/
	function simpanPelimpahanBerkasPerkara()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		//echo "<pre>";
		$form 						= $this->input->post("form");
		$form['username']	=	$this->username;
		$this->sppM->insert($form,2);
		$this->session->set_flashdata('message', 'Data telah di-input');
		redirect("Dashboard");
	}
	// end of function simpanPelimpahanBerkasPerkara()
	/**
	*	@see simpanDataPerkara
	*	@code AD
	*/
	function simpanDataPerkara()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		//echo "<pre>";
		$form = $this->input->post("form");
		$form['username'] = $this->username;
		$this->sppM->insert($form,3);
		$this->session->set_flashdata('message', 'Data telah di-input');
		redirect("Dashboard");
	}
	// end of function simpanDataPerkara()
	/**
	*	@see responseCariDataPelimpahanPerkara
	*	@route resCariDataPelimpahan
	*/ 
	function responseCariDataPelimpahanPerkara()
	{ 
		$this->load->model("Pelimpahanperkara_model",'spM');
		$start		= $this->input->post("start");
		$end		= $this->input->post("end");
		$keyword	= $this->input->post("keyword"); 
		$data['query'] = $this->spM->cariNomorSuratTanggal($this->spM->dateFormat($start),$this->spM->dateFormat($end),$keyword);
		if($this->sidebar == "AD")
		{
			$data['config']		= function($data){return "<a href='".site_url("showdetailsurat")."/?no=".$data->no."&id=".$data->id."' target='_blank'>View</a>";};
		}
		else
		if( $this->sidebar == "JK")
		{
			$data['config']		= function($data){return "<a href='".site_url("dakwaan/halamanData")."/?no=".$data->no."&id=".$data->id."' target='_blank'>View</a>";};
		}
		$this->load->view("dashboard/view-list-data",$data);
			
	}
	// end of function responseCariDataPelimpahanPerkara
	/**
	*	@see 	showNoSuratDetail 	
	*	@route  showdetailsurat
	*/
	public function showNoSuratDetail()
	{
		$no = $this->input->get("no");
		$id = $this->input->get("id");
		$this->load->model("Pelimpahanperkara_model","ppM");
		$this->load->model("Dataterdakwa_model","dtM");
		$this->load->model("Dakwaan_model","dwM");
		$this->load->model("Datasidang_model","dsM");

		$data['query']	=	$this->ppM->cariNomorSurat($id,"surat_pelimpahan_perkara.id");
		
		$data['_title']			=	"Data Surat Pelimpahan Perkara";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/view-data-all";
		$data['config'] 			= false;
		
		$form['query'] 		=	$this->dtM->cariDataTerdakwa($id);
		$data['_content'] 	=	$this->load->view("dashboard/view-data-all-data-terdakwa",$form,true);
		$form['query'] 		=	$this->dwM->cariDataDakwaan($id);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-dakwaan",$form,true);
		$form['query']		=	$this->dsM->cariDataSidang($id);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-sidang",$form,true);
		
		//lagi perbaikan
		//$data['_content']		.=	$this->load->view("dashboard/input-submit",array("url_submit" => site_url("editNoSuratDetail/?no=".$no."&id=".$id.""), "value_submit" => "Edit Surat"),true);
		$data['_content']		.=	$this->load->view("dashboard/input-submit",array("class_submit" => "form-control btn btn-default","url_submit" => site_url("dakwaan/halamanData/?no=".$no."&id=".$id.""), "value_submit" => "Lihat Surat", "_target_submit" => "_blank"),true);	
		$data['_content']		.=	$this->load->view("dashboard/input-submit",array("class_submit" => "form-control btn btn-danger","url_submit" => site_url("deletePelimpahanBerkasPerkara"), "value_submit" => "Delete Surat","_target_submit" => null),true);
		$data['_content']		.=	"<input type='hidden' name='no' value='".$no."' /><input type='hidden' name='id' value='".$id."' />";
		$this->load->view('dashboard-admin-template/main',$data);
	
	}
	// end of function showNoSuratDetail
	public function showNoSurat()
	{
		$no = $this->input->get("no");
		$id = $this->input->get("id");
		$this->load->model("Pelimpahanperkara_model","ppM");
		$this->load->model("Dataterdakwa_model","dtM");
		$this->load->model("Dakwaan_model","dwM");
		$this->load->model("Datasidang_model","dsM");

		$data['query']	=	$this->ppM->cariNomorSurat($id,"surat_pelimpahan_perkara.id");
		$form['query'] 		=	$this->dtM->cariDataTerdakwa($no);
		$data['_content'] 	=	$this->load->view("dashboard/view-data-all-data-terdakwa",$form,true);
		$form['query'] 		=	$this->dwM->cariDataDakwaan($no);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-dakwaan",$form,true);
		$form['query']		=	$this->dsM->cariDataSidang($no);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-sidang",$form,true);
		
		$data['_title']			=	"Data Surat Pelimpahan Perkara";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/view_data";
		$data['config'] 			= false;

		$data['_content']		.=	$this->load->view("dashboard/input-submit",array("url_submit" => site_url("editNoSurat/?no=".$no."&id=".$id.""), "value_submit" => "Edit Surat"),true);
		$data['_content']		.=	$this->load->view("dashboard/input-submit",array("class_submit" => "form-control btn btn-danger","url_submit" => site_url("deletePelimpahanBerkasPerkara"), "value_submit" => "Delete Surat"),true);
		$data['_content']		.=	"<input type='hidden' name='no' value='".$no."' /><input type='hidden' name='id' value='".$id."' />";
		$this->load->view('dashboard-admin-template/main',$data);
	
	}
	public function showNoSuratView()
	{
		$no = $this->input->get("no");
		$id = $this->input->get("id");
		$this->load->model("Pelimpahanperkara_model","ppM");
		$this->load->model("Dataterdakwa_model","dtM");
		$this->load->model("Dakwaan_model","dwM");
		$this->load->model("Datasidang_model","dsM");

		$data['query']		=	$this->ppM->cariNomorSurat($id,"surat_pelimpahan_perkara.id");
		$data['config'] 	= false;
		$form['query'] 		=	$this->dtM->cariDataTerdakwa($id);
		$data['_content'] 	=	$this->load->view("dashboard/view-data-all-data-terdakwa",$form,true);
		$form['query'] 		=	$this->dwM->cariDataDakwaan($id);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-dakwaan",$form,true);
		$form['query']		=	$this->dsM->cariDataSidang($id);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-sidang",$form,true);
		
		
		$data['_title']			=	"Data Surat Pelimpahan Perkara";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/view_data";
		$data['_content']		.= "<a href='".site_url("dataPelimpahanPerkara")."'>BACK</a>";
		$this->load->view('dashboard-admin-template/main',$data);
	
	}
	/**
	*	@see showNoSuratViewDetail
	*	@code AD
	*/
	public function showNoSuratViewDetail()
	{
		$no = $this->input->get("no");
		$id = $this->input->get("id");
		$this->load->model("Pelimpahanperkara_model","ppM");
		$data['query']	=	$this->ppM->cariNomorSurat($id,"surat_pelimpahan_perkara.id");
		
		$data['_title']			=	"Data Surat Pelimpahan Perkara";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/view-data-all";
		$data['config'] 		= false;
		$data['_content']		= "<a href='".site_url("dataPelimpahanPerkara")."'>BACK</a>";
		$this->load->view('dashboard-admin-template/main',$data);
	
	}
	//	end of function showNoSuratViewDetail()
	function editNoSurat()
	{
		$no = $this->input->get("no");
		$id = $this->input->get("id");
		$this->load->model("Pelimpahanperkara_model","ppM");
		$this->load->model("Dataterdakwa_model","dtM");
		$this->load->model("Dakwaan_model","dwM");
		$this->load->model("Datasidang_model","dsM");

		$data['query']	=	$this->ppM->cariNomorSurat($no,"surat_pelimpahan_perkara.no");
		$data['_title']			=	"Data Surat Pelimpahan Perkara";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/view_data";
		$data['config'] 			= true;
		$form['config']		=	$data['config'];
		$form['query'] 		=	$this->dtM->cariDataTerdakwa($no);
		$data['_content'] 	=	$this->load->view("dashboard/view-data-all-data-terdakwa",$form,true);
		$form['query'] 		=	$this->dwM->cariDataDakwaan($no);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-dakwaan",$form,true);

		$data['_content']		.=	$this->load->view("dashboard/input-submit",array("url_submit" => site_url("UpdatePelimpahanBerkasPerkara"), "value_submit" => "Update"),true);
		$data['_content']		.=	"<input type='hidden' name='no' value='".$no."' /><input type='hidden' name='id' value='".$id."' />";
		$this->load->view('dashboard-admin-template/main',$data);
	}
	function editNoSuratDetail()
	{
		$no = $this->input->get("no");
		$id = $this->input->get("id");
		$this->load->model("Pelimpahanperkara_model","ppM");
		$this->load->model("Dataterdakwa_model","dtM");
		$this->load->model("Dakwaan_model","dwM");
		$this->load->model("Datasidang_model","dsM");
		
		$data['query']	=	$this->ppM->cariNomorSurat($id,"surat_pelimpahan_perkara.id");
		$data['_title']			=	"Data Surat Pelimpahan Perkara";
		$data['_sidebar']		=	"sidebar/".$this->sidebar;
		$data['_loadView'][] 	= "dashboard/view-data-all";
		
		$data['config'] 			= true;
		$form['config']		=	$data['config'];
		$form['query'] 		=	$this->dtM->cariDataTerdakwa($id);
		$data['_content'] 	=	$this->load->view("dashboard/view-data-all-data-terdakwa",$form,true);
		$form['query'] 		=	$this->dwM->cariDataDakwaan($id);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-dakwaan",$form,true);
		$form['query']		=	$this->dsM->cariDataSidang($id);
		$data['_content'] 	.=	$this->load->view("dashboard/view-data-all-data-sidang",$form,true);
		
		$data['_content']		.=	$this->load->view("dashboard/input-submit",array("url_submit" => site_url("UpdatePelimpahanBerkasPerkaraDetail"), "value_submit" => "Update"),true);
		$data['_content']		.=	"<input type='hidden' name='no' value='".$no."' /><input type='hidden' name='id' value='".$id."' />";
		$this->load->view('dashboard-admin-template/main',$data);
	}
	/**
	*	@see UpdatePelimpahanBerkasPerkara
	*	@desc 
	*	@code JK
	*/
	function UpdatePelimpahanBerkasPerkara()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		//echo "<pre>";
		$form = $this->input->post("form");
		$no = $this->input->post("no");
		$id = $this->input->post("id");
		$form['username']	=	$this->username;
		$this->sppM->updateAll($no,$id,$form,2);
		$this->session->set_flashdata('message', 'Berhasil Terupdate');
		redirect("Dashboard");
	}
	// end of function UpdatePelimpahanBerkasPerkara
	/**
	*	@see updatePelimpahanBerkasPerkaraDetail
	*	@desc 
	*	@code AD
	*/
	function UpdatePelimpahanBerkasPerkaraDetail()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		//echo "<pre>";
		$form = $this->input->post("form");
		$no = $this->input->post("no");
		$id = $this->input->post("id");
		//echo "<pre>";
		//print_r($form);
		$form['username']	=	$this->username;
		$this->sppM->updateAll($no,$id,$form,1);
		$this->session->set_flashdata('message', 'Berhasil Terupdate');
		redirect("Dashboard"); 
	}
	// end of function UpdatePelimpahanBerkasPerkaraDetail()
	
	function deletePelimpahanBerkasPerkara()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		//echo "<pre>";
		$no = $this->input->post("no");
		$id = $this->input->post("id");
		$this->sppM->resetSurat($no,$id);
		$this->session->set_flashdata('message', 'Berhasil Delete');
		redirect("Dashboard");
		//print_r($form);
	}
	/**
	*	@see showToday
	*/
	function showToday()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		$data['query'] = $this->sppM->showToday();
		$data['config']	= function($row)
		{
			return "<a href='".site_url("showdetailsurat")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-default'>Lihat</a>";
		};
		//var_dump($data['query']);
		$this->load->view("dashboard/view-list-data",$data);
	
	}
	// end of function showToday
	
	function showTanpaPerkara()
	{
		$this->load->model("Pelimpahanperkara_model","sppM");
		if($this->sidebar == "AD")
		{
			$data['query'] 	= $this->sppM->showTanpaPerkara();
			$data['config']	= function($row)
			{
				return "<a href='".site_url("showsuratView")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-default'>Lihat</a>&nbsp;<a href='".site_url("formDataPeradilan")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-primary'>Proses..</a>";
			};
		}else if($this->sidebar == "JK")
		{
			$data['query']  = $this->sppM->showTanpaPerkara(date("Y-m-d"));
			$data['config']	= function($row)
			{
				return "<a href='".site_url("showsurat")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-default'>Lihat</a>";
			};
		}
		$this->load->view("dashboard/view-list-data",$data);
	}
}