<ul class="nav" id="side-menu">
		<li class="sidebar-search">
			<div class="input-group custom-search-form">
				<input type="text" class="form-control search-text" placeholder="Search...">
				<span class="input-group-btn">
				<button class="btn btn-default" type="button" id="idInputSearch">
					<i class="fa fa-search"></i>
				</button>
			</span>
			</div>
			<!-- /input-group -->
		</li>
	</ul>
	<ul class="nav" id="side-menu">
		<li>
			<a href="<?php echo site_url("Home");?>"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
		</li>
		<li>
			<a href="<?php echo site_url("formPelimpahan");?>"><i class="fa fa-edit fa-fw"></i> Form Pelimpahan Perkara</a>
		 </li>
		<li>
			<a href="<?php echo site_url("dataPelimpahanPerkara");?>"><i class="fa fa-table fa-fw"></i> Data Pelimpahan Perkara</a>
		</li>
	 </ul> 
	<script>
	$(document).ready(function()
	{
		$("#idInputSearch").on("click",function()
		{
			if($("#search-text").val() != "")
			{
				$.ajax(
				{
					url:"<?php echo site_url("resCariApapun");?>",
					type:"POST",
					data:{value:$(".search-text").val()},
					dataType:"HTML",
					beforeSend:function()
					{
						$(".loading-temp").html("Loading Pencarian..");
					},
					error:function(e)
					{
						alert("Errot . "+e.statusCode);
						$(".loading-temp").html("");
					},
					success:function(data)
					{
						$(".loading-temp").html("");
						$(".div-content").html(data);
					},
				});
			}else
			{
				alert("Tanggal Harus Diisi");
			}
		});
	});
	</script>