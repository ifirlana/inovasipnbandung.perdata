<h3>Inputan Hari Ini</h3>
<div class="">
<?php 
$query = $this->sppM->showToday();
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
?>
</div>