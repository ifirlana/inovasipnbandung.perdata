<div class="row">
	<div class="col-xs-4 col-md-3 col-lg-3">
		<div class="form-group div-tambah-dakwaan">
			<input type="button" class="btn btn-default btn-sm btn-tambah-terdakwa" value="tambah Data Dakwaan" />
		</div>
	</div>
</div>
<span class="div-loading-dakwaan"></span>
<script>
$(document).ready(function()
	{
		$(".btn-tambah-terdakwa").on("click",function()
		{
			$.ajax({
				url:"<?php echo site_url('resTambahDataDakwaan');?>",
				type:"POST",
				dataType:"HTML",
				data:{id:"<?php echo $id;?>"},
				beforeSend:function(data)
				{
					$(".div-loading-dakwaan").html("Loading..");
				},
				error:function(data)
				{
					alert("Error! something wrong! "+data.statusCode)
					$(".div-loading-dakwaan").html("");
				},
				success:function(data)
				{
					console.log("success");
					$(".div-loading-dakwaan").html("");
					$(".div-data-dakwaan").append("<div class='row'>"+data+"</div>");
				}
			});
		});
	});
</script>