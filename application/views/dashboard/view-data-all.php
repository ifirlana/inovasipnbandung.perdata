<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-8">
		<form method="POST">
		<?php
			if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
				{
		/*
					foreach($row as $key => $row->)
					{
		?>
			<div class="form-group">
				<label for="id<?php echo $key;?>"><?php echo $key;?></label>
				<div class="row">
					<input type="text" class="form-control" name="form[<?php echo $key;?>]" maxlength="99" id="id<?php echo $key;?>" value="<?php echo $value;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<?php
					}
			*/ 
		?>
		<div class="form-group">
				<label for="idNo">No</label>
				<div class="row">
					<input type="text" class="form-control" name="form[no]" maxlength="99" id="idNo" value="<?php echo $row->no;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idtanggal_masuk">Tanggal Masuk Berkas</label>
				<div class="row">
					<input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="form[tanggal_masuk]" maxlength="99" id="idtanggal_masuk" value="<?php echo ($row->tanggal_masuk == ""?"0000-00-00": date("d/m/Y",strtotime($row->tanggal_masuk)));?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
			<?php
				}
			}
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
</div>

	<script>
		$(".datepicker").datepicker();
	</script>