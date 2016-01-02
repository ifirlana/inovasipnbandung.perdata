<h3  class="page-header">Data Tanpa Perkara</h3>
<div class="temp-data-home-perkara row">
<input type="button" class="btn btn-lg btn-default col-md-4 clickMeTanpaPerkara" value="Klik saya"/>
<?php 
/*
	$data['query'] 	= $this->sppM->showTanpaPerkara();
	$data['config']	= function($row)
	{
		return "<a href='".site_url("showsuratView")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-default'>Lihat</a>&nbsp;<a href='".site_url("formDataPeradilan")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-primary'>Proses..</a>";
	};
	$this->load->view("dashboard/view-list-data",$data);
	/*
		$var 	= "<table class='table'>";
		if($query->num_rows() > 0)
		{
			$var .= "<tr><th>Tanggal Masuk</th><th>Nomor Perkara</th><th>Nomor Pelimpahan Perkara</th><th>Nama</th><th>&nbsp;</th></tr>";
			foreach($query->result() as $row)
			{
					$var .= "<tr>";
					$var .= "<td>".$row->tanggal_masuk."</td>";
					$var .= "<td>".$row->nomor_perkara."</td>";
					$var .= "<td>".$row->no."</td>";
					$var .= "<td>".$row->nama."</td>";
					$var .= "<td><a href='".site_url("showsuratView")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-default'>Lihat</a>&nbsp;<a href='".site_url("formDataPeradilan")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-primary'>Proses..</a></td>";
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
?>
</div>
<h3 class="page-header">Inputan hari Ini</h3>
<div class="temp-data-home row">
<input type="button" class="btn btn-lg btn-default col-md-4 clickMe" value="Klik saya"/>
<?php 
	/*
	$var 	= "<table class='table'>";
		if($query->num_rows() > 0)
		{
			$var .= "<tr><th>Tanggal Masuk</th><th>Nomor Perkara</th><th>Nomor Pelimpahan Perkara</th><th>Nama</th><th>&nbsp;</th></tr>";
			foreach($query->result() as $row)
			{
					$var .= "<tr>";
					$var .= "<td>".$row->tanggal_masuk."</td>";
					$var .= "<td>".$row->nomor_perkara."</td>";
					$var .= "<td>".$row->no."</td>";
					$var .= "<td>".$row->nama."</td>"; 
					$var .= "<td><a href='".site_url("showdetailsurat")."/?no=".$row->no."&id=".$row->id."' class='btn btn-sm btn-default'>Lihat</a>";
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
?>
<script>
	$(document).ready(function()
	{
		$(".clickMe").on("click",function()
		{
			$.ajax(
				{
					url:"<?php echo site_url('showToday');?>",
					type:"POST",
					data:{keyword :"Home"},
					dataType:"HTML",
					beforeSend:function()
					{
						$(".temp-data-home").html("Loading Pencarian..");
					},
					error:function(status)
					{
						alert("Error . "+status);
						$(".temp-data-home").html("");
					},
					success:function(data)
					{
						$(".temp-data-home").html(data);
					},
				});
		});
		$(".clickMeTanpaPerkara").on("click",function()
		{
			$.ajax(
				{
					url:"<?php echo site_url('showTanpaPerkara');?>",
					type:"POST",
					data:{keyword :"Home"},
					dataType:"HTML",
					beforeSend:function()
					{
						$(".temp-data-home-perkara").html("Loading Pencarian..");
					},
					error:function(status)
					{
						alert("Error . "+status);
						$(".temp-data-home-perkara").html("");
					},
					success:function(data)
					{
						$(".temp-data-home-perkara").html(data);
					},
				});
		});
	});
</script>
</div>