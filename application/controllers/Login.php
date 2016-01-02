<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{ 
	public function index()
	{
		$this->load->view("login/form-input");
	}
	public function response()
	{
		$this->load->model("Login_model","LM");
		$username 	=	filter_var($this->input->post("username"), FILTER_SANITIZE_STRING);
		$password 		=	filter_var($this->input->post("password"), FILTER_SANITIZE_STRING);
		$query = $this->LM->checkLogin($username,$password);
		if($query->num_rows() == 1)
		{
			$newSes = array(
                   'username'  => $query->row()->username,
                   'code'  => $query->row()->code,
                   'privillage' => $query->row()->id_privillage,
                   'is_loggin'	=> TRUE,
               );
				$this->session->set_userdata($newSes);
			
			$this->session->set_flashdata('message', 'Selamat datang.');
			//redirect("Home");
			redirect("homeE");
		}else
		{
			$this->session->set_flashdata('message', 'Check Kembali username & password.');
			redirect("login");
		}
	}
	public function show()
	{
		$data	= array();
		$this->load->view("login/view-index",$data);
	}
	function logout() 
	{
		$this->session->sess_destroy();
		redirect("admlogin");
	}
	public function cariApapun()
	{
		$value 			= $this->input->post("value");
		$this->load->model("Pelimpahanperkara_model","ppM");
		$data['query'] 	= $this->ppM->cariApapun($value);
		$data['config']	=	function($row)
		{
			return "<a href='".site_url("showsurat")."/?no=".$row->no."&id=".$row->id."' target='_blank'>View</a>";
		};
		$this->load->view("login/header");
		$this->load->view("dashboard/view-list-data",$data);
		$this->load->view("login/script");
		$this->load->view("login/footer");
		/*
		$var 	= "<table class='table'>";
		if($query->num_rows() > 0)
		{
			$var .= "<tr><th>Tanggal Masuk</th><th>Nomor Perkara</th><th>Nama</th><th>&nbsp;</th></tr>";
			foreach($query->result() as $row)
			{
					$var .= "<tr>";
					$var .= "<td>".$row->tanggal_masuk."</td>";
					$var .= "<td>".$row->no."</td>";
					$var .= "<td>".$row->nama."</td>";
					$var .= "<td><a href='".site_url("showsurat")."/?no=".$row->no."&id=".$row->id."'>View</a>";
					$var .= "</tr>";
			}
		}
		else
		{
			$var .= "<tr><td>Kosong</td></tr>";
		}
			$var .= "</table>";
		echo $var;
		*/
	}
	function tglView(){
		$this->load->model("Pelimpahanperkara_model","ppM");
        $tgl_sidang = $this->input->post('tglpil');
        $jnsidang = $this->input->post('jnsidang');
        $jninstansi = $this->input->post('jninstansi');
        $notil = $this->input->post('jnotil');
        $jputusan = $this->input->post('jputusan');
        $data['response'] = 'false'; 
        $query = $this->ppM->lihatTilang($tgl_sidang,$jnsidang,$jninstansi,$notil,$jputusan);
        $data['response'] = 'false'; 
        if( ! empty($query) )
        {
            $data['response'] = 'true'; 
            foreach( $query as $row )
            {
                $data['message'][] = array(
                        
						'nama_instansi' =>  $row->nama_instansi,
						'nama_sidang' =>  $row->nama_sidang,
						'no_tilang' =>  $row->no_tilang,
						'nama_pelanggar' =>  $row->nama_pelanggar,
						'alamat_pelanggar' =>  $row->alamat_pelanggar,
						'barang_bukti' =>  $row->barang_bukti,
						'pasal' =>  $row->pasal,
						'id_tilang' =>  $row->id_tilang,
						'tgl_sidang' =>  date("d-m-Y",strtotime($row->tgl_sidang)),
						/* 'biaya_denda' =>  "Rp.".number_format($row->biaya_denda),
						'biaya_perkara' =>  "Rp.".number_format($row->biaya_perkara) ,*/
						/* Diubah  pada tanggal  18 08 2015 @ fahmi */
						'biaya_denda' =>  ($jnsidang == 1 ? $row->biaya_denda : "0"),
						'biaya_perkara' => ($jnsidang == 1 ? $row->biaya_perkara : "0"),
						'nama_putusan' => $row->nama_putusan,
						'id_putusan' => $row->id_putusan,
                    );
            }
        }
        if('IS_AJAX')
        {
            echo json_encode($data); 
        }
	}
}