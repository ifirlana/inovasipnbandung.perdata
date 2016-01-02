<div class="row">
	<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
		<form method="POST" class="form">
			<div class="form-group">
				<label for="idInputTanggalMasuk">Tanggal Masuk Berkas</label>
						<?php
						/*
						<div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="idInputTanggalMasuk" data-link-format="yyyy-mm-dd">
		                    <input class="form-control" size="16" type="text" value="<?php echo date("d M Y");?>" readonly>
		                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		                </div>
		                */ ?>
						<input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy"  name="form[tanggal_masuk]" id="idInputTanggalMasuk" value="<?php echo date("d/m/Y")?>" />
			</div>
			<div class="form-group">
				<label for="idInputNomorPelimpahanPerkara">Nomor Surat Pelimapahan Perkara</label>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
							<input type="text" class="form-control" name="form[no]" maxlength="99" id="idInputNomorPelimpahanPerkara" placeholder="Nomor Surat" />
					</div>
					<div class="col-xs-8 col-sm-4 col-md-2 col-lg-2">
						<input type="button" class="form-control btn btn-info" id="idInputSubmit" value="Lanjutkan.."/>
					</div>
					<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
						<input type="button" class="form-control btn btn-default" id="idInputReset" value="Reset"/>
					</div> 
				</div>
			</div>
			<div class="form-group class-temp">
				<div class="text-center text-muted jumbotron">
					&nbsp;
				</div>
			</div>
		</form>
	</div>
</div>
<script>
<?php
	$session = $this->session->flashdata("message");
	if(!empty($session)){ echo "alert('".$session."');";}
	?>
	/*
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
*/

		$('.datepicker').datepicker();
	$(document).ready(function()
	{	
		$("#idInputSubmit").on("click",function()
		{
			console.log("run");
			if($("#idInputNomorPelimpahanPerkara").val() != "")
			{
				$("#idInputNomorPelimpahanPerkara").attr("readony",true);
				$.ajax(
				{
					url:"<?php echo site_url("resCariNomorPelimpahanPerkara");?>",
					type:"POST",
					data:{no:$("#idInputNomorPelimpahanPerkara").val()},
					dataType:"HTML",
					beforeSend:function()
					{
						$(".class-temp").html("Loading Pencarian..");
					},
					error:function(e)
					{
						alert("Error . "+e.statusCode);
						$(".class-temp").html("");
					},
					success:function(data)
					{
						$("#idInputNomorPelimpahanPerkara").attr("readonly",true);
						$(".class-temp").html(data);
					},
				});
			}else
			{
				alert("Form Harus diisi dengan Benar");
			}
		});
		$("#idInputReset").on("click",function()
		{
			location.reload(true);
		});
	});
</script>