<div class="form-group result-data-terdakwa">
			<input type="button" class="form-control btn btn-info" id="idInputSubmitDataTerdakwa" value="Melanjutkan.."/>
	</div>
</div>
<div class="temp-form-input-data-terdakwa">
</div>
<script>
console.log("load successfuly");
$(document).ready(function()
	{
		$("#idInputSubmitDataTerdakwa").on("click",function()
		{
			console.log($("#idInputNomorPelimpahanPerkara").val());
			if($("#idInputNomorPelimpahanPerkara").val() != "")
			{
				$("#idInputNomorPelimpahanPerkara").attr("readony",true);
				$.ajax(
				{
					url:"<?php echo site_url('resDataTerdakwa');?>",
					type:"POST",
					dataType:"HTML",
					data:{id:"<?php echo $id;?>"},
					beforeSend:function()
					{
						$(".temp-form-input-data-terdakwa").html("Loading Pencarian..");
					},
					error:function(status)
					{
						alert("Error . "+status);
						$(".temp-form-input-data-terdakwa").html("");
					},
					success:function(data)
					{
						$(".temp-form-input-data-terdakwa").html("");
						$(".div-tambah-terdakwa").html("");
						$(".result-data-terdakwa").html(data);
						//$(".temp-form-input-data-terdakwa").html(data);
					},
				});
			}else
			{
				alert("Nomor Surat tidak boleh kosong");
			}
		});
	});
</script>