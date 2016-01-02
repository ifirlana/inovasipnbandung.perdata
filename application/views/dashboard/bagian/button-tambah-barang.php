<div class="row">
	<div class="col-xs-4 col-md-3 col-lg-3">
		<div class="form-group div-tambah-terdakwa">
			<input type="button" class="btn btn-default btn-sm btn-tambah-terdakwa" value="tambah Data Terdakwa" />
		</div>
	</div>
</div>
<span class="div-loading"></span>
<script>
$(document).ready(function(){
		$(".btn-tambah-terdakwa").on("click",function(){
			console.log(".btn-tambah-terdakwa:click");
			$.ajax({
				url:"<?php echo site_url('resTambahDataTerdakwa');?>",
				type:"POST",
				dataType:"HTML",
				beforeSend:function(data)
				{
					console.log("beforeSend");
					$(".div-loading").html("Loading..");
				},
				error:function(data)
				{
					alert("Error! something wrong "+data.statusCode);
				},
				success:function(data)
				{
					$(".div-loading").html("");
					$(".div-data-terdakwa").append("<div class='col-md-6 col-lg-6 col-xs-12'>"+data+"</div>");
					console.log("success");
				}
			});
		});
	});
</script>