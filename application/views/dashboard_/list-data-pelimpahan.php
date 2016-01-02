<h3>Data Pelimpahan Perkara</h3>
<small>Data dibawah ini data yang belum Diproses.</small>
<table class="table">
<tr>
	<th>Nomor</th>
	<th>Tanggal</th>
	<th>Dikerjakan</th>
	<th>&nbsp;</th>
</tr>
<?php
	foreach($query->result() as $row)
	{
		echo "<tr>";
			echo "<td>".$row->no."</td>";
			echo "<td>".$row->tanggal_masuk."</td>";
			echo "<td>".$row->username."</td>";
			echo "<td><a class='btn btn-default' href='".site_url('prosesPenginputan/?id='.$row->id."&no=".$row->no)."'>lanjutkan</a></td>";
		echo "</tr>";
	}
?>
</table>