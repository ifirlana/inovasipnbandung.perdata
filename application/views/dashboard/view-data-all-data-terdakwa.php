	<div class="row">
	<?php
		foreach ($query->result() as $row) 
		{		
	?>
	<div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
	<div class="form-group">
		<label for="inama">nama</label>
		<div class="row">
			<input type="text" class="form-control" name="nama[]" maxlength="99" id="idnama" value="<?php echo $row->nama;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
		</div>
	</div>
		<div class="form-group">
				<label for="idtempat_lahir">Tempat Lahir</label>
				<div class="row">
					<input type="text" class="form-control" name="tempat_lahir[]" maxlength="99" id="idtempat_lahir" value="<?php echo $row->tempat_lahir;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idtanggal_lahir">Tanggal lahir</label>
				<div class="row">
					<input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="tanggal_lahir[]" maxlength="99" id="idtanggal_lahir" value="<?php echo ($row->tanggal_lahir == ""?"0000-00-00": date("d/m/Y",strtotime($row->tanggal_lahir)));?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idjenis_kelamin">jenis kelamin</label>
				<div class="row">
					<select name="jenis_kelamin[]" class="form-control" id="idjenis_kelamin" <?php if(!isset($config) or $config == false){echo "readonly";}?>>
						<option value='laki-laki' <?php if($row->jenis_kelamin == "laki-laki"){echo "selected";}?>>laki-laki</option>
						<option value='perempuan' <?php if($row->jenis_kelamin == "perempuan"){echo "selected";}?>>perempuan</option>
						<option value='lainnya' <?php if($row->jenis_kelamin == "lainnya"){echo "selected";}?>>lainnya</option>
					</select>
				</div>
			</div>
		<div class="form-group">
				<label for="idkebangsaan">kebangsaan</label>
				<div class="row">
					<input type="text" class="form-control" name="kebangsaan[]" maxlength="99" id="idkebangsaan" value="<?php echo $row->kebangsaan;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idtempat_tinggal">Tempat Tinggal</label>
				<div class="row">
					<textarea class="form-control" name="tempat_tinggal[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->tempat_tinggal;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idagama">agama</label>
				<div class="row">
					<input type="text" class="form-control" name="agama[]" maxlength="99" id="idagama" value="<?php echo $row->agama;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">pekerjaan</label>
				<div class="row">
					<textarea class="form-control" name="pekerjaan[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->pekerjaan;?></textarea>
				</div>
			</div>
			</div>
	<?php 
	}
	?>
	</div>
	<script>
		$(".datepicker").datepicker();
	</script>