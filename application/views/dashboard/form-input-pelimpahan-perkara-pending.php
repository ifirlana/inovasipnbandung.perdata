<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-8">
		<form method="POST" class="">
			<div class="form-group">
				<label for="idInputTanggalMasuk">Tanggal Masuk</label>
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-4">
							<input type="date" class="form-control form_date" name="form[tanggal_masuk]" maxlength="10" id="idInputTanggalMasuk" value="<?php echo date("Y-m-d");?>" />
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="idInputNomorPelimpahanPerkara">Nomor Surat Pelimapahan Perkara</label>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-8">
							<input type="text" class="form-control" name="form[no]" maxlength="99" id="idInputNomorPelimpahanPerkara" placeholder="Nomor Surat" />
					</div>
					<div class="col-xs-12 col-md-4">
					</div>
				</div>
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
  	<div class="col-xs-6 col-md-4">&nbsp;</div>
</div>