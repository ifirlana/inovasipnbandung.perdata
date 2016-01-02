<input type="hidden" name="id_ref_terdakwa[]" value="<?php echo $id;?>">
<h2 class="page-header">Data Terdakwa</h2>
<div class="form-group">
	<label for="idNama">Nama Lengkap</label>
		<input type="text" name="nama[]" class="form-control" id="idNama" maxlength="99" placeholder="input disini" />
</div>
<div class="form-group">
	<label for="idTempatLahir">Tempat Lahir</label>
		<textarea name="tempat_lahir[]" class="form-control" id="idTempatLahir"></textarea>			
</div>
<div class="form-group">
	<label for="idTanggalLahir">Tanggal Lahir</label>
			<?php /*
			<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="idTanggalLahir" data-link-format="yyyy-mm-dd">
                <input class="form-control" size="16" type="text" value="" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				<input type="hidden" class="findMe" name="tanggal_lahir[]" id="idTanggalLahir" maxlength="10" value="0" />
            </div>
            */
            ?>
		<input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="tanggal_lahir[]" id="idTanggalLahir" maxlength="10" placeholder="dd/mm/yyyy" />
</div> 
<div class="form-group">
	<label for="idJenisKelamin">Jenis Kelamin</label>
		<select name="jenis_kelamin[]" class="form-control" id="idJenisKelamin">
			<option value='laki-laki'>laki-laki</option>
			<option value='perempuan'>perempuan</option>
			<option value='lainnya'>lainnya</option>
		</select>
</div>
<div class="form-group">
	<label for="idKebangsaan">Kebangsaan</label>
		<input type="text" name="kebangsaan[]" class="form-control" id="idKebangsaan" maxlength="99" />
</div>
<div class="form-group">
	<label for="idTempatTinggal">Tempat Tinggal</label>
	<textarea name="tempat_tinggal[]" class="form-control" id="idTempatTinggal"></textarea>			
</div>
<div class="form-group">
	<label for="idAgama">Agama</label>
		<input type="text" name="agama[]" class="form-control" id="idAgama" placeholder="agama input disini" />
</div>
<div class="form-group">
	<label for="idPekerjaan">Pekerjaan</label>
		<input type="text" name="pekerjaan[]" class="form-control" id="idPekerjaan" />
</div>
<script>
	$('.datepicker').datepicker();
	$(".form_date").on("click",function(data)
		{
			$(this).datetimepicker({
		        language:  'fr',
		        weekStart: 1,
		        todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
		    });
		});
</script>