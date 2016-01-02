<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
	<form method="POST" class="form">
		<div class="form-group">
			<input type='text' name="form[no]" class="form-control col-xs-6" id="idInputNomorPelimpahanPerkara" value="<?php echo $no;?>" readonly/>
			<input type='hidden' id="idref" value="<?php echo $id;?>" disabled/>
		</div>
		<div>
			<input type="button" class="btn btn-default col-xs-6" id="idInputSubmit" value='Lanjutkan..' />
		</div>
			<div class="form-group class-temp">
				<div class="text-center text-muted">
					&nbsp;
				</div>
			</div>
	</form>
</div>	
<script type="text/javascript">
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
					data:{no:$("#idInputNomorPelimpahanPerkara").val(),id:$("#idref").val()},
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