<div class="row">
	<?php
		foreach ($query->result() as $row) 
		{		
	?>
	<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
	<div class="form-group">
				<label for="idDakwaan">Nomor dakwaan</label>
				<div class="row">
					<input type="text" class="form-control" name="nomor_dakwaan[]" maxlength="99" id="idDakwaan" value="<?php echo $row->nomor_dakwaan;?>" <?php if(!isset($config) or $config == false){echo "readonly";}?> />
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">tunggal</label>
				<div class="row">
					<textarea class="form-control" name="tunggal[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->tunggal;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">alternatif</label>
				<div class="row">
					<textarea class="form-control" name="alternatif[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->alternatif;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">kumulatif</label>
				<div class="row">
					<textarea class="form-control" name="kumulatif[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->kumulatif;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">penyidik</label>
				<div class="row">
					<?php /*
					<textarea class="form-control" name="form[penyidik]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->penyidik;?></textarea>
					*/ ?>
					<div class="col-md-6 col-xs-12 col-lg-6">
		<input type="text" maxlength='10' name="penyidik_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->penyidik_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->penyidik_datestart)))?>"/>
			</div>
			<div class="col-md-6 col-xs-12 col-lg-6">
				<input type="text" maxlength='10' name="penyidik_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->penyidik_dateend == "0000-00-00"?"":date("d/m/Y",strtotime($row->penyidik_dateend)));?>"/>
			</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">Perpanjangan Penyidik oleh Pengadilan Negeri</label>
				<div class="row">
				<?php /*
					<textarea class="form-control" name="form[penuntut_umum]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->penuntut_umum;?></textarea>
				*/?>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="perpanjangan_penyidik_pn_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_penyidik_pn_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_penyidik_pn_datestart)))?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="perpanjangan_penyidik_pn_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_penyidik_pn_dateend == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_penyidik_pn_dateend)))?>"/>
					</div>
				</div>
			</div>	
		<div class="form-group">
				<label for="idpekerjaan">Perpanjangan Penyidik oleh Ketua Pengadilan Tinggi</label>
				<div class="row">
				<?php /*
					<textarea class="form-control" name="form[penuntut_umum]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->penuntut_umum;?></textarea>
				*/?>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="perpanjangan_penyidik_kpn_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_penyidik_kpn_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_penyidik_kpn_datestart)))?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="perpanjangan_penyidik_kpn_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_penyidik_kpn_dateend == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_penyidik_kpn_dateend)))?>"/>
					</div>
				</div>
			</div>	
		
		<div class="form-group">
				<label for="idpekerjaan">penuntut_umum</label>
				<div class="row">
				<?php /*
					<textarea class="form-control" name="form[penuntut_umum]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->penuntut_umum;?></textarea>
				*/?>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="penuntut_umum_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->penuntut_umum_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->penuntut_umum_datestart)))?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="penuntut_umum_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->penuntut_umum_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->penuntut_umum_dateend)))?>"/>
					</div>
				</div>
			</div>	
		<div class="form-group">
				<label for="idpekerjaan">perpanjangan penuntut umum oleh Ketua Pengadilan Negeri</label>
				<div class="row">
				<?php 
				/*	<textarea class="form-control" name="form[perpanjangan_penuntut_umum]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->perpanjangan_penuntut_umum;?></textarea>
				*/ ?>
				<div class="col-md-6 col-xs-12 col-lg-6">
					<input type="text" maxlength='10' name="perpanjangan_penuntut_umum_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_penuntut_umum_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_penuntut_umum_datestart)));?>"/>
				</div>
				<div class="col-md-6 col-xs-12 col-lg-6">
					<input type="text" maxlength='10' name="perpanjangan_penuntut_umum_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_penuntut_umum_dateend == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_penuntut_umum_dateend)));?>"/>
				</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">perpanjangan penuntut umum oleh Ketua Pengadilan Tinggi</label>
				<div class="row">
				<?php 
				/*	<textarea class="form-control" name="form[perpanjangan_penuntut_umum]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->perpanjangan_penuntut_umum;?></textarea>
				*/ ?>
				<div class="col-md-6 col-xs-12 col-lg-6">
					<input type="text" maxlength='10' name="perpanjangan_penuntut_umum_kpt_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_penuntut_umum_kpt_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_penuntut_umum_kpt_datestart)));?>"/>
				</div>
				<div class="col-md-6 col-xs-12 col-lg-6">
					<input type="text" maxlength='10' name="perpanjangan_penuntut_umum_kpt_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_penuntut_umum_kpt_dateend == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_penuntut_umum_kpt_dateend)));?>"/>
				</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">hakim pengadilan negeri bandung</label>
				<div class="row">
				<?php /*
					<textarea class="form-control" name="form[hakim_pengadilan_negeri_bandung]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->hakim_pengadilan_negeri_bandung;?></textarea>
					*/?>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="hakim_pengadilan_negeri_bandung_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->hakim_pengadilan_negeri_bandung_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->hakim_pengadilan_negeri_bandung_datestart)))?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="hakim_pengadilan_negeri_bandung_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->hakim_pengadilan_negeri_bandung_dateend == "0000-00-00"?"":date("d/m/Y",strtotime($row->hakim_pengadilan_negeri_bandung_dateend)))?>"/>
					</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">Perpanjangan Hakim Pengadilan oleh Ketua Pengadilan Negeri</label>
				<div class="row">
				<?php /*
					<textarea class="form-control" name="form[perpanjangan_ketua_pengadilan_negeri]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->perpanjangan_ketua_pengadilan_negeri;?></textarea>
					*/?>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="perpanjangan_ketua_pengadilan_negeri_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_ketua_pengadilan_negeri_datestart == "0000-00-00"?"": date("d/m/Y",strtotime($row->perpanjangan_ketua_pengadilan_negeri_datestart)));?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="perpanjangan_ketua_pengadilan_negeri_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_ketua_pengadilan_negeri_dateend == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_ketua_pengadilan_negeri_dateend)));?>"/>
					</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">Perpanjangan Hakim Pengadilan oleh Ketua Pengadilan Tinggi</label>
				<div class="row">
				<?php /* 
					<textarea class="form-control" name="form[hakim_pengadilan_negeri_bandung]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->hakim_pengadilan_negeri_bandung;?></textarea>
					*/?>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="perpanjangan_hakim_kpt_datestart[]" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_hakim_kpt_datestart == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_hakim_kpt_datestart)))?>"/>
					</div>
					<div class="col-md-6 col-xs-12 col-lg-6">
						<input type="text" maxlength='10' name="perpanjangan_hakim_kpt_dateend[]" class="form-control datepicker" data-date-format="dd/mm/yyyy"  placeholder="dd/mm/yyyy" <?php if(!isset($config) or $config == false){echo "readonly";}?> value="<?php echo ($row->perpanjangan_hakim_kpt_dateend == "0000-00-00"?"":date("d/m/Y",strtotime($row->perpanjangan_hakim_kpt_dateend)))?>"/>
					</div>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">keterangan</label>
				<div class="row">
					<textarea class="form-control" name="keterangan[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->keterangan;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">tuntutan</label>
				<div class="row">
					<textarea class="form-control" name="tuntutan[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->tuntutan;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">putusan</label>
				<div class="row">
					<textarea class="form-control" name="putusan[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->putusan;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">banding</label>
				<div class="row">
					<textarea class="form-control" name="banding[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->banding;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">kasasi</label>
				<div class="row">
					<textarea class="form-control" name="kasasi[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->kasasi;?></textarea>
				</div>
			</div>
		<div class="form-group">
				<label for="idpekerjaan">inkrach</label>
				<div class="row">
					<textarea class="form-control" name="inkrach[]" <?php if(!isset($config) or $config == false){echo "readonly";}?>><?php echo $row->inkrach;?></textarea>
				</div>
			</div>
			<?php 
		}
			?>
		</div>
		</div>
		
	<script>
		$(".datepicker").datepicker();
	</script>