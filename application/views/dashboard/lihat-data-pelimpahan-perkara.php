<div class="row">
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<label for="idInputTanggalMasuk">Kata Kunci</label>
				<input type="text"  name="form[keyword]" class="keyword form-control" id="keyword" maxlength="99" placeholder="Masukan Keyword" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="idInputTanggalMasuk">Tanggal Pencarian</label>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4">
			<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="idInputTanggalMasuk" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="<?php echo date("Y-m-d");?>" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					<input type="hidden"  name="form[start]" class="findMe" id="idInputTanggalMasuk" maxlength="10" value="<?php echo date("d-m-Y");?>" />
	            </div>
	            */?>
	            <input type="text"  name="form[start]" class="findMe form-control" id="idInputTanggalMasuk" maxlength="10" value="<?php echo date("d/m/Y");?>" />
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
			<?php /*
				<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="idInputTanggalBerakhir" data-link-format="yyyy-mm-dd">
	                <input class="form-control" size="16" type="text" value="<?php echo date("Y-m-d");?>" readonly>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					<input type="hidden"  name="form[end]" class="findMe" id="idInputTanggalBerakhir" maxlength="10" value="<?php echo date("d-m-Y");?>" />
	            </div>
	            */
	            ?>

	            <input type="text"  name="form[end]" class="findMe form-control" id="idInputTanggalBerakhir" maxlength="10" value="<?php echo date("d/m/Y");?>" />
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">			
				<button class="btn btn-info btn-search-data-pelimpahan-perkara" type="button">
					<i class="fa fa-search"></i>
				</button>
			</div>
		</div>
	</div>	
</div>
<div class="row temp-data-pelimpahan">
<?php if(isset($_content)){ echo $_content; } ?>
<input type="button" class="btn btn-default col-md-4 clickMe " value="Klik untuk data hari ini." />
<script>
	$(document).ready(function()
	{
		$(".clickMe").on("click",function()
		{
				if($("#idInputTanggalMasuk").val() != "" && $("#idInputTanggalBerakhir").val() != "")
			{
				$.ajax(
				{
					url:"<?php echo site_url('resCariDataPelimpahan');?>",
					type:"POST",
					data:{start 	:"<?php echo date("d/m/Y");?>",
							end 	:"<?php echo date("d/m/Y");?>",
							keyword :$("#keyword").val()},
					dataType:"HTML",
					beforeSend:function()
					{
						$(".temp-data-pelimpahan").html("Loading Pencarian..");
					},
					error:function(status)
					{
						alert("Error . "+status);
						$(".temp-data-pelimpahan").html("");
					},
					success:function(data)
					{
						$(".temp-data-pelimpahan").html(data);
					},
				});
			}else
			{
				alert("Nomor Surat tidak boleh kosong");
			}
		});
	});
</script>
</div>
<script>
<?php
	$session = $this->session->flashdata("message");
	if(!empty($session)){ echo "alert('".$session."');";}
	?>
	$(document).ready(function()
	{
		$(".btn-search-data-pelimpahan-perkara").on("click",function()
		{
			console.log("run .btn-search-data-pelimpahan-perkara");
			if($("#idInputTanggalMasuk").val() != "" && $("#idInputTanggalBerakhir").val() != "")
			{
				$.ajax(
				{
					url:"<?php echo site_url('resCariDataPelimpahan');?>",
					type:"POST",
					data:{start 	:$("#idInputTanggalMasuk").val(),
							end 	:$("#idInputTanggalBerakhir").val(),
							keyword :$("#keyword").val()},
					dataType:"HTML",
					beforeSend:function()
					{
						$(".temp-data-pelimpahan").html("Loading Pencarian..");
					},
					error:function(status)
					{
						alert("Error . "+status);
						$(".temp-data-pelimpahan").html("");
					},
					success:function(data)
					{
						$(".temp-data-pelimpahan").html(data);
					},
				});
			}else
			{
				alert("Nomor Surat tidak boleh kosong");
			}
		});
	});
	if($(".form_date").length)
	{
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
	}
</script>