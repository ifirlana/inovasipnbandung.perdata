<script type="text/javascript">
	$(document).ready(function() {
    $('#mytable').DataTable();
	} );
</script>
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table id="mytable" class='mytable2 table table-striped '>
	<thead>
	<tr>
		<th>Tanggal Masuk</th>
		<th>Nomor Pelimpahan Perkara</th>
		<th>Nomor Perkara</th>
		<th>Nama</th>
		<th>Dibuat Oleh</th>
		<!-- <th>Tuntutan</th> 
		<th>Putusan</th>
		<th>Hakim Ketua</th> -->
		<th>&nbsp;</th>
	</tr>
	</thead>
<tbody>
<?php
	if(!isset($config))
	{
		$config = function($e){};//<a href='".site_url("showsuratView")."/?no=".$row->no."&id=".$row->id."'>View</a>
	}
	if(isset($query) and $query->num_rows() > 0)
	{
		foreach($query->result() as $row)
		{
				echo  "<tr>";
				echo  "<td>".$row->tanggal_masuk."</td>";
				echo  "<td>".$row->no."</td>";
				echo  "<td>".$row->nomor_perkara."</td>";
				echo  "<td>".$row->nama."</td>";
				echo  "<td>".$row->username."</td>";
			/*	echo  "<td>".$row->tuntutan."</td>";
				echo  "<td>".$row->putusan."</td>";
				echo  "<td>".$row->hakim_ketua."</td>"; */
				echo  "<td>".$config($row)."</td>";
				echo  "</tr>";
		}
		
		//echo "<tr><td colspan='5'> Total Pencarian : ".$query->num_rows()."</td></tr>";

	}
	/*else
	{
		echo  "<tr><td colspan='7' class='bg-warning text-center'>Data Tidak Ditemukan.</td></tr>";
	}*/
?>
</tbody>
</table>
</div>
</div>
</div>