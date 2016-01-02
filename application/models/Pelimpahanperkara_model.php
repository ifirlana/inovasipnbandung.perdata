<?php
class Pelimpahanperkara_model extends CI_Model
{ 
	function __construct()
	{
		
		parent::__construct();
	}
	/**
	*	@see dateFormat
	*/
	function dateFormat($date)
	{
		if(empty($date))
		{
			return "0000-00-00";
		}else
		{
			$format = explode("/",$date);
			//print_r($format);
			return $format[2]."-".$format[1]."-".$format[0];//date("Y-m-d",strtotime($date));
		}
		//$format = explode("/",$date);
		//return $format[2]."-".$format[1]."-".$format[0];
	}
	// end of function dateFormat
	
	private function conditional()
	{
		$this->db->from("surat_pelimpahan_perkara");
		$this->db->join("(select * from surat_dakwaan where active = '1') surat_dakwaan","surat_pelimpahan_perkara.no = surat_dakwaan.no","left");
		$this->db->join("(select * from data_terdakwa where active = '1') data_terdakwa","surat_pelimpahan_perkara.no = data_terdakwa.no","left");
		$this->db->join("(select * from data_sidang_perkara where active = '1') data_sidang_perkara","surat_pelimpahan_perkara.no = data_sidang_perkara.no","left");
		$this->db->where("surat_pelimpahan_perkara.active",'1');
	}
	
	private function get($boolean = true)
	{
		$query = $this->db->get();
		if($boolean == true)
		{
			return $query;
		}else if($boolean == false)
		{
			return $this->db->last_query();
		}
	}
	private function select($concat = false)
	{
		$this->db->select("surat_pelimpahan_perkara.id");
		$this->db->select("surat_pelimpahan_perkara.no");
		$this->db->select("surat_pelimpahan_perkara.username");
		//$this->db->select("surat_pelimpahan_perkara.tanggal_masuk");
		$this->db->select("DATE_FORMAT(surat_pelimpahan_perkara.tanggal_masuk,'%d-%m-%Y') tanggal_masuk");
		if($concat == false){$this->db->select("data_terdakwa.nama"); }
		$this->db->select("data_terdakwa.tempat_lahir");
		$this->db->select("data_terdakwa.tanggal_lahir");
		$this->db->select("data_terdakwa.jenis_kelamin");
		$this->db->select("data_terdakwa.kebangsaan");
		$this->db->select("data_terdakwa.tempat_tinggal");
		$this->db->select("data_terdakwa.agama");
		$this->db->select("data_terdakwa.pekerjaan");
		$this->db->select("surat_dakwaan.nomor_dakwaan");
		$this->db->select("surat_dakwaan.tunggal");
		$this->db->select("surat_dakwaan.alternatif");
		$this->db->select("surat_dakwaan.kumulatif");
		$this->db->select("surat_dakwaan.keterangan");
		$this->db->select("DATE_FORMAT(surat_dakwaan.penyidik_datestart,'%d-%m-%Y') penyidik_datestart");  
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_penyidik_pn_datestart,'%d-%m-%Y') perpanjangan_penyidik_pn_datestart");  
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_penyidik_kpn_datestart,'%d-%m-%Y') perpanjangan_penyidik_kpn_datestart"); 
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_penuntut_umum_datestart,'%d-%m-%Y') perpanjangan_penuntut_umum_datestart");
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_penuntut_umum_kpt_datestart,'%d-%m-%Y') perpanjangan_penuntut_umum_kpt_datestart");
		$this->db->select("DATE_FORMAT(surat_dakwaan.penuntut_umum_datestart,'%d-%m-%Y') penuntut_umum_datestart");
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_ketua_pengadilan_negeri_datestart,'%d-%m-%Y') perpanjangan_ketua_pengadilan_negeri_datestart");
		$this->db->select("DATE_FORMAT(surat_dakwaan.hakim_pengadilan_negeri_bandung_datestart,'%d-%m-%Y') hakim_pengadilan_negeri_bandung_datestart");
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_hakim_kpt_datestart,'%d-%m-%Y') perpanjangan_hakim_kpt_datestart");
		$this->db->select("DATE_FORMAT(surat_dakwaan.penyidik_dateend,'%d-%m-%Y') penyidik_dateend");
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_penyidik_pn_dateend,'%d-%m-%Y') perpanjangan_penyidik_pn_dateend");  
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_penyidik_kpn_dateend,'%d-%m-%Y') perpanjangan_penyidik_kpn_dateend"); 
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_penuntut_umum_dateend,'%d-%m-%Y') perpanjangan_penuntut_umum_dateend");
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_penuntut_umum_kpt_dateend,'%d-%m-%Y') perpanjangan_penuntut_umum_kpt_dateend");
		$this->db->select("DATE_FORMAT(surat_dakwaan.penuntut_umum_dateend,'%d-%m-%Y') penuntut_umum_dateend");
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_ketua_pengadilan_negeri_dateend,'%d-%m-%Y') perpanjangan_ketua_pengadilan_negeri_dateend");
		$this->db->select("DATE_FORMAT(surat_dakwaan.hakim_pengadilan_negeri_bandung_dateend,'%d-%m-%Y') hakim_pengadilan_negeri_bandung_dateend");
		$this->db->select("DATE_FORMAT(surat_dakwaan.perpanjangan_hakim_kpt_dateend,'%d-%m-%Y') perpanjangan_hakim_kpt_dateend");
		$this->db->select("DATE_FORMAT(surat_dakwaan.tanggal_berkas_dakwaan,'%d-%m-%Y') tanggal_berkas_dakwaan");
		/*
		$this->db->select("surat_dakwaan.penyidik_datestart");
		$this->db->select("surat_dakwaan.perpanjangan_penuntut_umum_datestart");
		$this->db->select("surat_dakwaan.penuntut_umum_datestart");
		$this->db->select("surat_dakwaan.perpanjangan_ketua_pengadilan_negeri_datestart");
		$this->db->select("surat_dakwaan.hakim_pengadilan_negeri_bandung_datestart");
		$this->db->select("surat_dakwaan.penyidik_dateend");
		$this->db->select("surat_dakwaan.perpanjangan_penuntut_umum_dateend");
		$this->db->select("surat_dakwaan.penuntut_umum_dateend");
		$this->db->select("surat_dakwaan.perpanjangan_ketua_pengadilan_negeri_dateend");
		$this->db->select("surat_dakwaan.hakim_pengadilan_negeri_bandung_dateend");
		*/
		$this->db->select("surat_dakwaan.tuntutan");
		$this->db->select("surat_dakwaan.putusan");
		$this->db->select("surat_dakwaan.banding");
		$this->db->select("surat_dakwaan.kasasi");
		$this->db->select("surat_dakwaan.inkrach");  
		if($concat == false){$this->db->select("data_sidang_perkara.nomor_perkara");}
		$this->db->select("data_sidang_perkara.hakim_ketua");
		$this->db->select("data_sidang_perkara.hakim_anggota");
		$this->db->select("data_sidang_perkara.hakim_anggota_2");
		$this->db->select("data_sidang_perkara.panitera_pengganti");
	}
	//
	private function selectConcat()
	{
		$this->db->select("group_concat(data_terdakwa.nama) nama");
		$this->db->select("data_sidang_perkara.nomor_perkara nomor_perkara");
		$this->db->group_by("surat_pelimpahan_perkara.no");
	}
	/* private */
	//update db
	private function resetUpdatePelimpahanPerkara($id)
	{
		$data	=	array("active" => '0');
		$this->db->where("id",$id);
		$this->db->update("surat_pelimpahan_perkara",$data);
	}
	private function resetUpdateSuratDakwaan($id)
	{
		$data	=	array("active" => '0');
		$this->db->where("id_ref",$id);
		$this->db->update("surat_dakwaan",$data);
	} 
	private function resetUpdateDataTerdakwa($id)
	{
		$data	=	array("active" => '0');
		$this->db->where("id_ref",$id);
		$this->db->update("data_terdakwa",$data);
	}
	private function resetUpdateDataSidangPerkara($id)
	{
		$data	=	array("active" => '0');
		$this->db->where("id_ref",$id);
		$this->db->update("data_sidang_perkara",$data);
	}
	/* insert db */
	private function simpanSuratPelimpahanPerkara($form)
	{
		//echo $this->dateFormat($form['tanggal_masuk']);
		$data = array(
			"no" 				=> $form['no'],
			"tanggal_masuk"		=> $this->dateFormat($form['tanggal_masuk']),
			"username"	 		=> $form['username'],
			);
		$this->db->insert("surat_pelimpahan_perkara",$data);
	//	return $this->db->insert_id();
	}
	
	private function simpanDataTerdakwa($form,$temp)
	{
		for($i=0;$i<count($temp['nama']);$i++) 
		{
			$data = array(
			"id_ref" 					=> $temp['id_ref_terdakwa'][$i],
			"no" 						=> $form['no'],
			"nama" 						=> $temp['nama'][$i],
			"tempat_lahir"	 			=> $temp['tempat_lahir'][$i],
			"tanggal_lahir"	 			=> $this->dateFormat($temp['tanggal_lahir'][$i]),
			"jenis_kelamin"	 			=> $temp['jenis_kelamin'][$i],
			"kebangsaan"	 			=> $temp['kebangsaan'][$i],
			"tempat_tinggal"	 		=> $temp['tempat_tinggal'][$i],
			"agama"	 					=> $temp['agama'][$i],
			"pekerjaan"	 				=> $temp['pekerjaan'][$i],
			);
			$this->db->insert("data_terdakwa",$data);
		}
	}
	
	private function simpanSuratDakwaan($form,$temp)
	{
		for($i=0;$i<count($temp['nomor_dakwaan']);$i++) 
		{
		$data = array(
			"id_ref" 												=> $temp['id_ref_dakwaan'][$i],
			"no" 													=> $form['no'],
			"nomor_dakwaan" 										=> $temp['nomor_dakwaan'][$i],
			"tunggal" 												=> $temp['tunggal'][$i],
			"alternatif"	 										=> $temp['alternatif'][$i],
			"kumulatif"	 											=> $temp['kumulatif'][$i],
		//	"penyidik"	 														=> $form['penyidik'],
		//	"perpanjangan_penuntut_umum"	 					=> $form['perpanjangan_penuntut_umum'],
		//	"penuntut_umum"	 											=> $form['penuntut_umum'],
		//	"perpanjangan_ketua_pengadilan_negeri"	 		=> $form['perpanjangan_ketua_pengadilan_negeri'],
		//	"hakim_pengadilan_negeri_bandung"	 			=> $form['hakim_pengadilan_negeri_bandung'],
			"tuntutan"	 											=> $temp['tuntutan'][$i],
			"putusan"	 											=> $temp['putusan'][$i],
			"banding"	 											=> $temp['banding'][$i],
			"kasasi"	 											=> $temp['kasasi'][$i],
			"inkrach"	 											=> $temp['inkrach'][$i],
			"keterangan"	 											=> $temp['keterangan'][$i],
			"penyidik_datestart"	 								=> $this->dateFormat($temp['penyidik_datestart'][$i]),
			"perpanjangan_penyidik_pn_datestart"	 				=> $this->dateFormat($temp['perpanjangan_penyidik_pn_datestart'][$i]),
			"perpanjangan_penyidik_kpn_datestart"	 				=> $this->dateFormat($temp['perpanjangan_penyidik_kpn_datestart'][$i]),
			"perpanjangan_penuntut_umum_datestart"	 				=> $this->dateFormat($temp['perpanjangan_penuntut_umum_datestart'][$i]),
			"penuntut_umum_datestart"	 							=> $this->dateFormat($temp['penuntut_umum_datestart'][$i]),
			"perpanjangan_penuntut_umum_kpt_datestart"	 			=> $this->dateFormat($temp['perpanjangan_penuntut_umum_kpt_datestart'][$i]),
			"perpanjangan_ketua_pengadilan_negeri_datestart"	 	=> $this->dateFormat($temp['perpanjangan_ketua_pengadilan_negeri_datestart'][$i]),
			"perpanjangan_hakim_kpt_datestart"						 => $this->dateFormat($temp['perpanjangan_hakim_kpt_datestart'][$i]),
			"hakim_pengadilan_negeri_bandung_datestart"	 			=> $this->dateFormat($temp['hakim_pengadilan_negeri_bandung_datestart'][$i]),
			"penyidik_dateend"	 									=> $this->dateFormat($temp['penyidik_dateend'][$i]),
			"perpanjangan_penyidik_pn_dateend"	 				=> $this->dateFormat($temp['perpanjangan_penyidik_pn_dateend'][$i]),
			"perpanjangan_penyidik_kpn_dateend"	 				=> $this->dateFormat($temp['perpanjangan_penyidik_kpn_dateend'][$i]),
			"perpanjangan_penuntut_umum_dateend"	 				=> $this->dateFormat($temp['perpanjangan_penuntut_umum_dateend'][$i]),
			"penuntut_umum_dateend"	 								=> $this->dateFormat($temp['penuntut_umum_dateend'][$i]),
			"perpanjangan_penuntut_umum_kpt_dateend"	 			=> $this->dateFormat($temp['perpanjangan_penuntut_umum_kpt_dateend'][$i]),
			"perpanjangan_ketua_pengadilan_negeri_dateend"	 		=> $this->dateFormat($temp['perpanjangan_ketua_pengadilan_negeri_dateend'][$i]),
			"perpanjangan_hakim_kpt_dateend"						 => $this->dateFormat($temp['perpanjangan_hakim_kpt_dateend'][$i]),
			"hakim_pengadilan_negeri_bandung_dateend"		 		=> $this->dateFormat($temp['hakim_pengadilan_negeri_bandung_dateend'][$i]),
			"tanggal_berkas_dakwaan"		 		=> $this->dateFormat($temp['tanggal_berkas_dakwaan'][$i]),
			
		//	"nomor_perkara"	 														=> $form['nomor_perkara'],
		//	"hakim_ketua"	 														=> $form['hakim_ketua'],
		//	"hakim_anggota"	 														=> $form['hakim_anggota'],
		//	"hakim_anggota_2"	 														=> $form['hakim_anggota_2'],
		//	"panitera_pengganti"	 														=> $form['panitera_pengganti'],
			);
			$this->db->insert("surat_dakwaan",$data);
		}
	}
	private function simpanDataSidangPerkara($form)
	{
		if(isset($form['nomor_perkara']))
		{
			$data = array(
			"id_ref" 														=> $form['id'],
			"no" 															=> $form['no'],
			"nomor_perkara"	 												=> $form['nomor_perkara'],
			"hakim_ketua"	 												=> $form['hakim_ketua'],
			"hakim_anggota"	 												=> $form['hakim_anggota'],
			"hakim_anggota_2"	 											=> $form['hakim_anggota_2'],
			"panitera_pengganti"	 										=> $form['panitera_pengganti'],
			"jaksa"				 											=> $form['jaksa'],
			);
			$this->db->insert("data_sidang_perkara",$data);
		}
	}
	/* end insetr db*/
	/** end private */
	
	function cariNomorSurat($value,$key = "no")
	{
		$this->conditional();
		$this->select(); 
		$this->db->where($key,$value);
		$this->db->group_by("surat_pelimpahan_perkara.no");
		return $this->get();
	}
	function cariNomorSuratTanggal($start,$end,$keyword)
	{
		$this->conditional();
		$this->select();
		$this->db->order_by("surat_pelimpahan_perkara.no","desc");
		$this->db->where("date(tanggal_masuk) >= '".$start."'");
		$this->db->where("date(tanggal_masuk) <= '".$end."'");
		if(!empty($keyword))
		{
			$this->db->where("(surat_pelimpahan_perkara.no like '%".$keyword."%' or data_terdakwa.nama like '%".$keyword."%' or surat_dakwaan.nomor_dakwaan like '%".$keyword."%')");
			//$this->db->or_where("data_terdakwa.nama like '%".$keyword."%'"); 
			//$this->db->or_where("surat_dakwaan.nomor_dakwaan like '%".$keyword."%'");
		}
		return $this->get(); 
	}
	function cariDataPerkara($value)
	{
		$this->conditional();
		$this->select(); 
		$this->db->where("data_terdakwa.nama like '%".$value."%'");
		$this->db->or_where("data_sidang_perkara.nomor_perkara",$value);
		return $this->get();
	}
	function cariApapun($value)
	{
		$this->conditional();
		$this->select(); 
		$this->db->where("data_terdakwa.nama like '%".$value."%'");
		$this->db->or_where("data_sidang_perkara.nomor_perkara",$value);
		$this->db->or_where("surat_dakwaan.tuntutan like '%".$value."%'");
		$this->db->or_where("surat_dakwaan.putusan like '%".$value."%'");
		$this->db->or_where("surat_pelimpahan_perkara.no like '".$value."%'");
		return $this->get();
	
	}
	function updateAll($no,$id,$data,$set = 1)
	{
		$this->resetSurat($no,$id,$set);
		$this->insert($data,$set);
	}
	function resetSurat($no,$id, $set = 1)
	{
		if($set == 1) // code AD
		{
			$this->resetUpdatePelimpahanPerkara($id);
			$this->resetUpdateSuratDakwaan($id);
			$this->resetUpdateDataTerdakwa($id);
			$this->resetUpdateDataSidangPerkara($id);
		}
		else if($set == 2) // code JK
		{
			$this->resetUpdatePelimpahanPerkara($id);
			$this->resetUpdateSuratDakwaan($id);
			$this->resetUpdateDataTerdakwa($id);
		}
	} 
	function insert($form,$set = 1)
	{	
		
		$temp['nama'] 			= $this->input->post("nama");
		$temp['tempat_lahir'] 	= $this->input->post("tempat_lahir");
		$temp['tanggal_lahir'] 	= $this->input->post("tanggal_lahir");
		$temp['jenis_kelamin']	= $this->input->post("jenis_kelamin");
		$temp['kebangsaan'] 	= $this->input->post("kebangsaan");
		$temp['tempat_tinggal'] = $this->input->post("tempat_tinggal");
		$temp['agama'] 			= $this->input->post("agama");
		$temp['pekerjaan'] 		= $this->input->post("pekerjaan");
		$temp['id_ref_dakwaan']		= $this->input->post("id_ref_dakwaan");
		$temp['id_ref_terdakwa'] 	= $this->input->post("id_ref_terdakwa");

		$temp['nomor_dakwaan']														=	$this->input->post("nomor_dakwaan");
		$temp['tunggal']																		=	$this->input->post("tunggal");
		$temp['alternatif']																	=	$this->input->post("alternatif");
		$temp['kumulatif']																	=	$this->input->post("kumulatif");
		$temp['tuntutan']																		=	$this->input->post("tuntutan");
		$temp['putusan']																		=	$this->input->post("putusan");
		$temp['banding']																		=	$this->input->post("banding");
		$temp['kasasi']																		=	$this->input->post("kasasi");
		$temp['inkrach']																		=	$this->input->post("inkrach");
		$temp['penyidik_datestart']														=	$this->input->post("penyidik_datestart");
		$temp['perpanjangan_penyidik_pn_datestart']										=	$this->input->post("perpanjangan_penyidik_pn_datestart");
		$temp['perpanjangan_penyidik_kpn_datestart']									=	$this->input->post("perpanjangan_penyidik_kpn_datestart");
		$temp['perpanjangan_penuntut_umum_datestart']				=	$this->input->post("perpanjangan_penuntut_umum_datestart");
		$temp['penuntut_umum_datestart']							=	$this->input->post("penuntut_umum_datestart");
		$temp['perpanjangan_penuntut_umum_kpt_datestart']			=	$this->input->post("perpanjangan_penuntut_umum_kpt_datestart");
		$temp['perpanjangan_ketua_pengadilan_negeri_datestart']		=	$this->input->post("perpanjangan_ketua_pengadilan_negeri_datestart");
		$temp['perpanjangan_hakim_kpt_datestart']					=	$this->input->post("perpanjangan_hakim_kpt_datestart");
		$temp['hakim_pengadilan_negeri_bandung_datestart']			=	$this->input->post("hakim_pengadilan_negeri_bandung_datestart");
		$temp['penyidik_dateend']									=	$this->input->post("penyidik_dateend");
		$temp['perpanjangan_penyidik_pn_dateend']					=	$this->input->post("perpanjangan_penyidik_pn_dateend");
		$temp['perpanjangan_penyidik_kpn_dateend']					=	$this->input->post("perpanjangan_penyidik_kpn_dateend");
		$temp['perpanjangan_penuntut_umum_dateend']					=	$this->input->post("perpanjangan_penuntut_umum_dateend");
		$temp['penuntut_umum_dateend']								=	$this->input->post("penuntut_umum_dateend");
		$temp['perpanjangan_penuntut_umum_kpt_dateend']				=	$this->input->post("perpanjangan_penuntut_umum_kpt_dateend");
		$temp['perpanjangan_ketua_pengadilan_negeri_dateend']		=	$this->input->post("perpanjangan_ketua_pengadilan_negeri_dateend");
		$temp['perpanjangan_hakim_kpt_dateend']						=	$this->input->post("perpanjangan_hakim_kpt_dateend");
		$temp['hakim_pengadilan_negeri_bandung_dateend']			=	$this->input->post("hakim_pengadilan_negeri_bandung_dateend");
		$temp['tanggal_berkas_dakwaan']			=	$this->input->post("tanggal_berkas_dakwaan");
	

		if($set == 1) //code AD
		{
			//$this->simpanSuratPelimpahanPerkara($form);
			$this->simpanDataTerdakwa($form,$temp);  
			$this->simpanSuratDakwaan($form,$temp);  
			$this->simpanDataSidangPerkara($form);  
		}
		else if($set == 2) // code JK,AD
		{
			//$this->simpanSuratPelimpahanPerkara($form);
			$this->simpanDataTerdakwa($form,$temp);  
			$this->simpanSuratDakwaan($form,$temp);  
		}
		else if($set == 3) // code AD
		{
			$this->simpanDataSidangPerkara($form);  
		}
		else if($set == 4) // code AD simpan pelimpahan
		{
			//$this->simpanSuratPelimpahanPerkara($form);  
		}		
	}
	
	function showAll()
	{
		$this->conditional();
		$this->select();
		//$this->select(true);
		//$this->selectConcat();
		$this->db->order_by("surat_pelimpahan_perkara.no asc");
		$this->db->order_by("surat_pelimpahan_perkara.date_added desc");
		$this->db->limit("0","10");
		return $this->get();
	}
	function showToday()
	{
		/*
		$this->conditional();
		$this->select();
		//$this->select(true);
		//$this->selectConcat();
		$this->db->where("date(data_sidang_perkara.date_added) = CURDATE()");
		$this->db->order_by("surat_pelimpahan_perkara.date_added desc");
		$this->db->limit($multiple,$count);
		return $this->get();
		*/
		$select = "select * 
		from 
			surat_pelimpahan_perkara s 
			#left join data_sidang_perkara p on s.no = p.no
			left join (select * from data_sidang_perkara where active = '1') p on s.id = p.id_ref
			left join (select * from surat_dakwaan where active = '1') d on s.id = d.id_ref
			left join (select * from data_terdakwa where active = '1') t on s.id = t.id_ref
		where 
			s.active ='1' 
			#and date(s.date_added) >= '2015-09-22' 
			#and date(s.date_added) = CURDATE() 
			group by s.no 
		ORDER BY s.no DESC "; 
		//return $select;
		return $this->db->query($select);
	}
	function showTest()
	{
		$this->conditional();
		$this->select();
		//$this->select(true);
		//$this->selectConcat();
		$this->db->where("date(data_sidang_perkara.date_added) = CURDATE()");
		$this->db->where("surat_pelimpahan_perkara.no = '129'");
		$this->db->order_by("surat_pelimpahan_perkara.date_added desc");
		return $this->get(false);	
	}
	function showTanpaPerkara($date = false)
	{
		$where = "";
		if($date != false)
		{
			$where .= " and date(surat_pelimpahan_perkara.date_added) = '".$date."'";
		}
	/*
		if($date != false)
		{
			$this->db->where("date(surat_pelimpahan_perkara.date_added) = '".$date."'");
		}
	
		$this->conditional();
		$this->select();
		//$this->select(true);
		//$this->selectConcat();
		$this->db->where("data_sidang_perkara.nomor_perkara is null");
		$this->db->order_by("surat_pelimpahan_perkara.date_added desc");
		return $this->get();
		*/
		$select = "select s.*,p.nomor_perkara, t.nama 
		from 
			surat_pelimpahan_perkara s left join data_sidang_perkara p on p.id_ref = s.id,	
			(select * from surat_dakwaan where active = '1') d,
			(select * from data_terdakwa where active = '1') t
		where 
			s.id = d.id_ref 
			and s.id = t.id_ref 
			and s.active ='1' 
			and p.no is null
			".$where."
			group by s.id";
		return $this->db->query($select);
	}

	/*Model Fahmi 09-09-2015 */
	function lihatTilang($tgl_sidang = null,$jenis_sidang=null,$jinstansi=null,$jnotil=null,$jputusan=null){
		$tgl = '';
		$jsid = '';
		$jins='';
		$jnot='';
		$jpts='';
		$whr = '';
		$isi ='';
		if($tgl_sidang != null){
			$tgl = " tgl_sidang = '".$tgl_sidang."' ";
		}
		if($jnotil != null){
			$jnot = " no_tilang = ".$jnotil." ";
		}
		if($jenis_sidang != null){
		$jsid = " id_jenis_sidang = '".$jenis_sidang."' ";
		}
		if($jinstansi != null){
		$jins = " id_instansi = '".$jinstansi."' ";
		}
		if($jputusan != null){
		$jpts = " id_putusan = ".$jputusan." ";
		}
		/*  */
		if($tgl_sidang != null || $jenis_sidang != null || $jinstansi != null || $jnotil != null || $jpts != null){
			$whr='where';
			// if():
				$isi = implode(" and ",array_filter(array($tgl,$jsid,$jins,$jnot,$jpts)));
			// endif;
		}
		//$select = "select * from v_detail $whr $isi";
		
		return $this->db->query("select * from v_detail $whr $isi")->result();
		// return $this->db->query("select * from v_detail where tgl_sidang = '$tgl_sidang'")->result();
	}

	function getTotal()
	{
		$this->conditional();
		$this->db->select("count(*) total");
		$this->db->group_by("surat_pelimpahan_perkara.no");
		return $this->get();
	}
}