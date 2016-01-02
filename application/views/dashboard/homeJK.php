<h3 class="page-header">Data Tanpa Perkara</h3>
<div class="temp-data-home-perkara">
<input type="button" class="btn btn-lg btn-default col-md-4 clickMeTanpaPerkara" value="Klik saya"/>
<?php 
/*
$query = $this->sppM->showTanpaPerkara(date("Y-m-d"));
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
?>
</div>
<script>
	$(document).ready(function()
	{
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