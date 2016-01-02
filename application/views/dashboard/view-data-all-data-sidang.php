<div class="row">
	<?php
	if($query->num_rows() > 0)
	{
		foreach ($query->result() as $row) 
		{		
	?>
	<div class="form-group">
		<label for="idpekerjaan">nomor_perkara</label>
		<div class="row">
			<textarea class="form-control" name="form[nomor_perkara]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->nomor_perkara;?></textarea>
		</div>
	</div>
<div class="form-group">
		<label for="idhakim_ketua">Hakim Ketua</label>
		<div class="row">
			<textarea class="form-control" name="form[hakim_ketua]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->hakim_ketua;?></textarea>
		</div>
	</div>
<div class="form-group">
		<label for="idhakim_anggota">Hakim Anggota</label>
		<div class="row">
				<textarea class="form-control" name="form[hakim_anggota]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->hakim_anggota;?></textarea>
		</div>
	</div>
<div class="form-group">
		<label for="idhakim_anggota_2">Hakim Anggota 2</label>
		<div class="row">
			<textarea class="form-control" name="form[hakim_anggota_2]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->hakim_anggota_2;?></textarea>
	</div>
	</div>
<div class="form-group">
		<label for="idpanitera_pengganti">Jaksa</label>
		<div class="row">
				<textarea class="form-control" name="form[jaksa]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->jaksa;?></textarea>
		</div>
	</div>
<div class="form-group">
		<label for="idpanitera_pengganti">panitera_pengganti</label>
		<div class="row">
				<textarea class="form-control" name="form[panitera_pengganti]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->panitera_pengganti;?></textarea>
		</div>
	</div>
	<?php
		}
	}
	?>
</div>