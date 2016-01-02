<div class="">
<form method="POST">
	<h2 class="page-header">Data Pengadilan</h2>
	<div class="form-group">
		<label for="idNomor_perkara">Nomor Perkara</label>
		<input type="text" name="form[nomor_perkara]" class="form-control" id="idNomor_perkara" maxlength="99" />			
	</div>
	<div class="form-group">
		<label for="idHakim_ketua">Hakim Ketua</label>
		<textarea name="form[hakim_ketua]" class="form-control" id="idHakim_ketua"></textarea>			
	</div>
	<div class="form-group">
		<label for="idHakim_anggota">Hakim Anggota</label>
		<textarea name="form[hakim_anggota]" class="form-control" id="idHakim_anggota"></textarea>			
	</div>
	<div class="form-group">
		<label for="idHakim_anggota_2">Hakim Anggota 2</label>
		<textarea name="form[hakim_anggota_2]" class="form-control" id="idHakim_anggota_2"></textarea>			
	</div>
	<div class="form-group">
		<label for="idJaksa">Jaksa</label>
		<textarea name="form[jaksa]" class="form-control" id="idJaksa"></textarea>			
	</div>
	<div class="form-group">
		<label for="idPanitera_pengganti">Panitera Pengganti</label>
		<textarea name="form[panitera_pengganti]" class="form-control" id="idPanitera_pengganti"></textarea>			
	</div>
	<div class="form-group">
		<label for="idKeterangan">keterangan</label>
		<textarea name="form[keterangan]" class="form-control" id="idKeterangan"></textarea>			
	</div>
	<?php 
				if(isset($_content))
				{ 
			?><div class="form-group">
					<?php
					echo $_content;	
					?>
				</div>
			<?php
				}
			?>
</form>
</div>
<script>
	$('.datepicker').datepicker();
</script>